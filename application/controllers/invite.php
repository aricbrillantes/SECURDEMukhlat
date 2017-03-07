<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of invite
 *
 * @author Arces
 */
class invite extends CI_Controller {

    public function index() {
        echo "invite for moderator";
    }

    public function share(){
        $topic = $_SESSION['current_topic'];
        $user_ids = $this->input->post('invite-checkbox');
        $this->load->model("notification_model", "notifs");
        foreach ($user_ids as $id) {
            $this->notifs->notify_user($id, $topic->topic_id, 4);
        }
        echo "success???? change this";
    }
    
    public function accept() {
        echo "accept";
    }

}
