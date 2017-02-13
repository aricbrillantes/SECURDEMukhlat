<?php

class home extends CI_Controller {

    public function index() {
        $logged_user = $_SESSION['logged_user'];
        if (!empty($logged_user)) {
            if ($logged_user->role_id === '1') {
                $this->load->view('pages/admin_page');    
            } else if ($logged_user->role_id === '2') {
                $this->load->view('pages/home_page');
            }
        } else {
            $this->load->view('errors/html/error_general');
        }
    }

    public function sign() {
        $this->load->view('sign_in');
    }

}
