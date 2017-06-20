<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notification_model
 *
 * @author Arces
 */
class Attachment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_attachment($post_id, $file_url, $type){
        $data = array('post_id' => $post_id,
            'file_url' => $file_url,
            'attachment_type_id' => $type);
        
        $this->db->set('date_uploaded', 'NOW()', FALSE);
        $this->db->insert('tbl_attachments', $data);
    }
    
    public function get_post_attachments($post_id){
        $attachments = $this->db->get_where('tbl_attachments', array('post_id' => $post_id))->result();
        
        return $attachments;
    }
    
    public function get_thread_attachments($post_id){
        $this->db->select('a.attachment_id, p.post_id, a.attachment_type_id, a.date_uploaded, a.file_url');
        $this->db->from('tbl_attachments as a');
        $this->db->join('tbl_posts as p', 'p.post_id = a.post_id');
        $this->db->where('p.root_id = ', $post_id);
        
        $attachments = $this->db->get()->result();
        
        return $attachments;
    }
    
    public function get_attachment($attachment_id){
        return $this->db->get_where('tbl_attachments', array('attachment_id' => $attachment_id))->row();
    }
}