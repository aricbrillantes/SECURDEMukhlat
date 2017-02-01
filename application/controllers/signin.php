<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_Controller {

    public function index() {
        $this->load->view('sign_in');
    }
    
    public function signup() {
        $data = array(
            'first_name' => $this->input->post('first_name', TRUE),
            'last_name' => $this->input->post('last_name', TRUE),
            'email' => $this->input->post('sign_up_email', TRUE),
            'password' => $this->input->post('sign_up_password', TRUE)
        );
        $this->db->insert('tbl_users', $data);
        
        //change to ajax later
        $this->load->view('sign_in');
    }
    
    public function login(){
        $this->load->model('user_model', 'user');
        $user = $this->user->login($this->input->post('log_in_email'), $this->input->post('log_in_password'));
        
        echo "<script>console.log('".count($user). "');</script>";
        if($user->num_rows() > 0){
            $_SESSION['logged_user'] = $user->row();
            redirect('home', 'location');
        } else{
            //change to ajax later
            redirect('signin', 'location');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('signin', 'refresh');
    }
}