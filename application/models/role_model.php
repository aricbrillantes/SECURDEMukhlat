<?php

class role_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_roles() {
        $query = $this->db->get('tbl_roles');
        return $query->result_array();
    }

}
