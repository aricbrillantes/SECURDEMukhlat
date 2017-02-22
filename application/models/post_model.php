<?php

class post_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_topic_posts($topic_id) {
        $query = $this->db->order_by('date_posted', 'DESC')->get_where('tbl_posts', array('topic_id' => $topic_id, 'parent_id' => 0));
        $posts = $query->result();

        //load user of post
        $this->load->model('user_model', 'users');

        foreach ($posts as $post) {
            $post->user = $this->users->get_user(false, array('user_id' => $post->user_id));
        }

        return $posts;
    }

    public function get_post($post_id) {
        $post = $this->db->get_where('tbl_posts', array('post_id' => $post_id))->row();

        //load user of post
        $this->load->model('user_model', 'users');
        $post->user = $this->users->get_user(false, array('user_id' => $post->user_id));

        //load topic of post
        $this->load->model('topic_model', 'topics');
        $post->topic = $this->topics->get_topic(false, $post->topic_id);

        return $post;
    }

    public function get_home_posts($user_id) {
        $this->db->select('p.post_id, p.post_title, p.post_content, p.date_posted, t.topic_id, t.topic_name, u1.user_id, u1.first_name, u1.last_name, u1.profile_url, u1.is_enabled');
        $this->db->from('tbl_posts as p');
        $this->db->join('tbl_users as u1', 'p.user_id = u1.user_id');
        $this->db->join('tbl_topics as t', 'p.topic_id = t.topic_id');
        $this->db->join('tbl_topic_follower as tf', 'tf.topic_id = t.topic_id');
        $this->db->join('tbl_users as u2', 'tf.user_id = u2.user_id');
        $this->db->where('u2.user_id =', $user_id);
        $this->db->where('p.parent_id =', '0');
        $this->db->order_by('p.date_posted', 'DESC');
        
        $home_posts = $this->db->get()->result();
        
        return $home_posts;
    }
    
    public function get_post_votes($post_id){
        $this->db->select('SUM(vote_type) as vote_count', FALSE);
    }
    
    public function vote_post($user_id, $post_id, $vote_type){
        //delete existing votes of user to post
        $this->db->delete('tbl_post_vote', array('post_id' => $post_id, 'user_id' => $user_id));
        
        //add new vote of user to post
        $data = array('post_id' => $post_id,
            'user_id' => $user_id,
            'vote_type' => $vote_type);
        $this->db->insert('tbl_post_vote', $data);
    }
}
