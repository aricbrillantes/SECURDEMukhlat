<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of topic_model
 *
 * @author Arces
 */
class topic_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_topic($load_posts, $id) {
        $topic = $this->db->get_where('tbl_topics', array('topic_id' => $id))->row();

        if ($load_posts) {
            //get posts
            $this->load->model('post_model', 'posts');
            $topic->posts = $this->posts->get_topic_posts($topic->topic_id);
            
            $this->load->model('user_model', 'users');
            $topic->followers = $this->users->get_topic_followers($topic->topic_id);
        }
        return $topic;
    }

    public function get_topics() {
        $topics = $this->db->order_by('date_created', 'DESC')->get('tbl_topics')->result();

        //load user of topic
        $this->load->model('user_model', 'users');

        foreach ($topics as $topic) {
            $topic->user = $this->users->get_user(false, array('user_id' => $topic->creator_id));
            $topic->followers = $this->users->get_topic_followers($topic->topic_id);
        }

        return $topics;
    }

    public function get_user_topics($user_id) {
        $topics = $this->db->order_by('topic_name', 'ASC')->get_where('tbl_topics', array('creator_id' => $user_id))->result();
        
        $this->load->model('user_model', 'users');
        
        foreach ($topics as $topic){
            $topic->followers = $this->users->get_topic_followers($topic->topic_id);
        }
        
        return $topics;
    }

    public function get_followed_topics($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_topics');
        $this->db->join('tbl_topic_follower', 'tbl_topic_follower.topic_id = tbl_topics.topic_id');
        $this->db->where(array('tbl_topic_follower.user_id' => $user_id));
     //   $this->db->where();
        $topics = $this->db->order_by('tbl_topics.topic_name', 'ASC')->get()->result();
        
        $this->load->model('user_model', 'users');
        
        foreach ($topics as $topic){
            $topic->followers = $this->users->get_topic_followers($topic->topic_id);
        }
        
        return $topics;
    }

    public function check_follow($topic_id, $user_id) {
        $is_followed = $this->db->get_where('tbl_topic_follower', array('topic_id' => $topic_id, 'user_id' => $user_id))->row();

        return $is_followed;
    }
    
    public function search_topics($keyword){
        $this->db->like("topic_name", $keyword, "both");
        $topics = $this->db->get("tbl_topics")->result();
        
        $this->load->model("user_model", "users");
        foreach ($topics as $topic) {
            $topic->user = $this->users->get_user(false, array('user_id' => $topic->creator_id));
            $topic->followers = $this->users->get_topic_followers($topic->topic_id);
        }
        
        return $topics;
    }

}
