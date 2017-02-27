<?php

class user_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_users() {
        $query = $this->db->get('tbl_users');
        return $query->result();
    }

    public function get_user($load_topics, $load_activities, $fields = array()) {
        $logged_user = $_SESSION['logged_user'];
        $query = $this->db->get_where('tbl_users', $fields);

        $user = $query->row();

        if ($load_topics) {
            $this->load->model('topic_model', 'topics');
            $user->topics = $this->topics->get_user_topics($user->user_id);
            $user->followed_topics = $this->topics->get_followed_topics($user->user_id);
        }
        
        if($load_activities){
            $this->load->model('post_model', 'posts');
            $user->activities = $this->posts->get_user_activities($user->user_id, $logged_user->user_id);
        }

        return $user;
    }

    public function get_topic_followers($topic_id) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_topic_follower', 'tbl_topic_follower.user_id = tbl_users.user_id');
        $this->db->where(array('tbl_topic_follower.topic_id' => $topic_id));
        $query = $this->db->order_by('tbl_users.first_name', 'ASC')->get();

        return $query->result();
    }

    public function toggle_account($user_id) {
        $this->db->set("is_enabled", "1 - is_enabled", FALSE);
        $this->db->where("user_id", $user_id);
        $this->db->update("tbl_users");
    }
    
    public function search_users($keyword){
        $this->db->where("CONCAT(first_name, ' ', last_name) LIKE '%" . $keyword . "%'", NULL, FALSE);
        $this->db->where("role_id = ", 2);
        $users = $this->db->get("tbl_users")->result();
        
        return $users;
    }
}
