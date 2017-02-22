<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of topic
 *
 * @author Arces
 */
class topic extends CI_Controller {

    public function index() {
        $logged_user = $_SESSION['logged_user'];
        if (!empty($logged_user)) {
            $this->load->model('topic_model', 'topics');
            $data['topics'] = $this->topics->get_topics();
            $this->load->view('pages/topic_list_page', $data);
        } else {
            echo 'ERROR!';
        }
    }

    public function view() {
        $logged_user = $_SESSION['logged_user'];

        $topic_id = $this->uri->segment(3);

        if ($topic_id) {
            $this->load->model('topic_model', 'topics');
            $topic = $this->topics->get_topic(true, $topic_id);

            if ($topic) {
                //change to redirect later
                $_SESSION['current_topic'] = $topic;

                //check if user is following topic then pass
                $data['is_followed'] = $this->topics->check_follow($topic->topic_id, $logged_user->user_id);
                $this->load->view('pages/topic_page', $data);
            } else {
                $this->load->view('errors/error_404');
            }
        } else {
            $this->load->view('errors/error_404');
        }
    }

    public function thread() {
        $post_id = $this->uri->segment(3);
        if ($post_id) {
            $this->load->model('post_model', 'posts');
            $post = $this->posts->get_post($post_id);

            if ($post) {
                //check if user is following topic then pass
                $data['post'] = $post;
                $this->load->view('pages/thread_page', $data);
            } else {
                $this->load->view('errors/error_404');
            }
        } else {
            $this->load->view('errors/error_404');
        }
    }

    public function create() {
        $input = $this->input;
        $logged_user = $_SESSION['logged_user'];

        $data = array(
            'creator_id' => $logged_user->user_id,
            'topic_name' => htmlspecialchars($input->post('topic_name', TRUE)),
            'topic_description' => htmlspecialchars($input->post('topic_description', TRUE)),
            'date_created' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_topics', $data);
        $topic_id = $this->db->insert_id();

        //return topic
        $this->load->model("topic_model", "topics");
        $topic = $this->topics->get_topic(false, $topic_id);

        //add topic to topics of logged user
        $logged_user->topics[] = $topic;
        redirect('topic/view/' . $topic_id);
    }

    public function follow() {
        $logged_user = $_SESSION['logged_user'];
        if ($logged_user) {
            $topic_id = $this->uri->segment(3);
            $this->load->model("topic_model", "topics");

            //check if user is already following
            $is_followed = $this->topics->check_follow($topic_id, $logged_user->user_id);
            $data = array(
                'user_id' => $logged_user->user_id,
                'topic_id' => $topic_id
            );

            if (!$is_followed) {
                //if user is not yet following the topic, insert to db
                $this->db->insert("tbl_topic_follower", $data);
            } else {
                //if user is not yet following the topic, insert to db
                $this->db->delete("tbl_topic_follower", $data);
            }

            //return topic
            $topic = $this->topics->get_topic(true, $topic_id);

            if (!$is_followed) {
                //add topic to followed topics of logged user
                $logged_user->followed_topics[] = $topic;
            } else {
                //if user is following the topic, remove from list
                foreach ($logged_user->followed_topics as $key => $topic) {
                    if ($topic->topic_id == $topic_id) {
                        unset($logged_user->followed_topics[$key]);
                    }
                }
            }

            echo $topic->topic_name;
        } else {
            echo 'hehe no follow for u';
        }
    }

    /* FUNCTIONS FOR POSTS */

    public function post() {
        $input = $this->input;
        $logged_user = $_SESSION['logged_user'];
        $topic = $_SESSION['current_topic'];

        $data = array(
            'parent_id' => 0,
            'user_id' => $logged_user->user_id,
            'root_id' => 0,
            'topic_id' => $topic->topic_id,
            'post_title' => htmlspecialchars($input->post('post_title', TRUE)),
            'post_content' => htmlspecialchars($input->post('post_content', TRUE)),
            'date_posted' => date('Y-m-d H:i:s')
        );

        $this->db->insert('tbl_posts', $data);
        $post_id = $this->db->insert_id();

        //set post id as root id of post
        $this->db->set("root_id", $post_id);
        $this->db->where("post_id", $post_id);
        $this->db->update("tbl_posts");

        redirect(base_url('topic/view/' . $topic->topic_id));
    }

    public function preview() {
        $this->load->model('post_model', 'posts');
        
        //check referer
        $post_id = $this->uri->segment(3);
        $data['post'] = $this->posts->get_post($post_id);

        $this->load->view('post_preview', $data);
    }

    public function vote() {
        $logged_user = $_SESSION['logged_user'];
        
        $post_id = $this->uri->segment(3);
        $this->load->model("post_model", "posts");
    }
}
