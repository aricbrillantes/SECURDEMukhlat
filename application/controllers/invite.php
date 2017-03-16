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
        $topic = $_SESSION['current_topic'];
        $user_ids = $this->input->post('invite-checkbox');
        $this->load->model("notification_model", "notifs");
        foreach ($user_ids as $id) {
            //invite
            $this->notifs->invite_user($id, $topic->topic_id);
        }
        //change
        redirect(base_url('topic/view/' . $topic->topic_id));
    }

    public function share() {
        $topic = $_SESSION['current_topic'];
        $user_ids = $this->input->post('share-checkbox');
        $this->load->model("notification_model", "notifs");
        foreach ($user_ids as $id) {
            $this->notifs->notify_user($id, $topic->topic_id, 4);
        }
        //change
        redirect(base_url('topic/view/' . $topic->topic_id));
    }

    public function accept() {
        $type = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        $this->load->model("notification_model", "notifs");

        if ($type === "request") {
            //REQUEST
            $this->notifs->respond_request($id, 1);
        } else if ($type === "invite"){
            //INVITE
            $this->notifs->respond_request($id, 1);
        }
    }

    public function decline() {
        $type = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        $this->load->model("notification_model", "notifs");

        if ($type === "request") {
            //REQUEST
            $this->notifs->respond_invite($id, -1);
        } else if ($type === "invite") {
            //INVITE
            $this->notifs->respond_invite($id, -1);
        }
    }

}
