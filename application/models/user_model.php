<?php
class user_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function login($email, $password) {
        $query = $this->db->get_where('tbl_users', 
                array('email' => $email,
                    'password' => $password,
                    'is_enabled' => true));
        
        return $query;
    }
}