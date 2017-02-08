<?php

class home extends CI_Controller {

    public function index() {
        if (!empty($_SESSION['logged_user'])) {
            $this->load->view('pages/home_page');
        } else{
            echo 'ERROR!';
        }
    }

    public function hello() {
        echo 'hello???????';
    }

    public function sign() {
        $this->load->view('sign_in');
    }

}
