<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notifications
 *
 * @author Arces
 */
class notifications extends CI_Controller {
    public function index() {
        $logged_user = $_SESSION['logged_user'];

        if ($logged_user) {
            $this->load->model("notification_model", "notifs");

            //return unread count
            $logged_user->unread_notifs = $this->notifs->get_unread_count($logged_user->user_id);

            //update notifs
            $logged_user->notifications = $this->notifs->get_user_notifications($logged_user->user_id);
            
            //update shared topics
            $logged_user->shared_topics = $this->notifs->get_user_shared($logged_user->user_id);
        }
    }

    public function read() {
        $logged_user = $_SESSION['logged_user'];
        $this->load->model("notification_model", "notifs");
        $this->notifs->read_user_notifications($logged_user->user_id);
    }
}