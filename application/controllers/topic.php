<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of topic
 *
 * @author Arces
 */
class topic extends CI_Controller {

    public function index() {
        if (!empty($_SESSION['logged_user'])) {
            $this->load->view('pages/topic_list_page');
        } else {
            echo 'ERROR!';
        }
    }

    public function view() {
        //change to redirect later
        $this->load->view('pages/topic_page');
    }

}
