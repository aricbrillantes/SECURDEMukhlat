<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users_model
 *
 * @author Arces
 */
class user_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($email, $password) {
        $query = $this->db->get_where('tbl_users', 
                array('email' => $email,
                    'password' => $password));
        
        return $query;
    }

}
