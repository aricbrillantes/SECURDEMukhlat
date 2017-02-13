<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_Controller {

    public function index() {
        //load roles
        $this->load->model('role_model', 'roles');
        $data['roles'] = $this->roles->get_roles();
        $this->load->view('pages/sign_in_page', $data);
    }

    public function signup() {
        $data = array(
            'first_name' => $this->input->post('first_name', TRUE),
            'last_name' => $this->input->post('last_name', TRUE),
            'email' => $this->input->post('sign_up_email', TRUE),
            'password' => $this->input->post('sign_up_password', TRUE),
            'birthdate' => $this->input->post('sign_up_birthday'),
            'role_id' => 2,
            'is_enabled' => true
        );
        $this->db->insert('tbl_users', $data);
    }

    public function login() {
        $this->load->model('user_model', 'user');
        $user = $this->user->login($_POST['log_in_email'], $_POST['log_in_password']);

        //echo "<script>console.log('".count($user). "');</script>";
        if ($user->num_rows() > 0) {
            $_SESSION['logged_user'] = $user->row();
            echo 1;
        } else {
            echo 0;
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('signin', 'refresh');
    }

}
