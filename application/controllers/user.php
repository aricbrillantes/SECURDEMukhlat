<?php

class user extends CI_Controller {

    public function index() {
        $this->load->view('pages/user_page');
    }

    public function profile() {
        $user_id = $this->uri->segment(3);

        if ($user_id) {
            $this->load->model("user_model", "users");

            $data['user'] = $this->users->get_user(true, array('user_id' => $user_id));

            $this->load->view('pages/user_page', $data);
        } else{
            $this->load->view('errors/error_404');
        }
    }

}
