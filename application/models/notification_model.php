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
class notification_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /* NOTIFY */
    public function notify_user($user_id, $source_id, $type) {
        $logged_user = $_SESSION['logged_user'];

        if ($user_id !== $logged_user->user_id) {
            //remove existing notif
            $remove_data = array("notification_type_id" => $type,
                "user_id" => $user_id,
                "doer_id" => $logged_user->user_id,
                "source_id" => $source_id);

            $this->db->delete("tbl_notifications", $remove_data);

            //add to notifications
            $insert_data = array("notification_type_id" => $type,
                "user_id" => $user_id,
                "doer_id" => $logged_user->user_id,
                "source_id" => $source_id,
                "is_read" => 0,);

            $this->db->set("date_performed", "NOW()", FALSE);
            $this->db->insert("tbl_notifications", $insert_data);
        }
    }

    /* GET */
    public function get_user_notifications($user_id) {
        $this->db->select("u.first_name, u.last_name, n.doer_id, n.notification_type_id, n.source_id");
        $this->db->from("tbl_notifications as n");
        $this->db->join("tbl_users as u", "n.doer_id = u.user_id");
        $this->db->where("n.user_id =", $user_id);
        $this->db->where("date_performed <= NOW()");
        $this->db->where("notification_type_id != 4");
        $this->db->order_by("is_read, date_performed", "desc");

        $notifs = $this->db->get()->result();

        $this->load->model("post_model", "posts");
        $this->load->model("topic_model", "topics");
        foreach ($notifs as $notif) {
            $type = $notif->notification_type_id;
            if ($type === '1' || $type === '3' || $type === '5') {
                $notif->post = $this->posts->get_post(false, false, $notif->source_id);
            } else if ($type === '2') {
                $notif->topic = $this->topics->get_topic(false, $notif->source_id);
            }
        }

        return $notifs;
    }

    public function get_user_shared($user_id) {
        $this->db->select("u.first_name, u.last_name, n.doer_id, n.source_id");
        $this->db->from("tbl_notifications as n");
        $this->db->join("tbl_users as u", "n.doer_id = u.user_id");
        $this->db->where("n.user_id = ", $user_id);
        $this->db->where("date_performed <= NOW()");
        $this->db->where("notification_type_id = 4");
        $this->db->order_by("is_read, date_performed");

        $shared = $this->db->get()->result();

        $this->load->model("topic_model", "topics");
        foreach ($shared as $notif) {
            $notif->topic = $this->topics->get_topic(false, $notif->source_id);
        }

        return $shared;
    }
    
    /* GET COUNT */
    public function get_unread_count($user_id) {
        $this->db->select("COUNT(*) AS unread_count");
        $this->db->where("user_id = ", $user_id);
        $this->db->where("is_read = 0");

        $count = $this->db->get("tbl_notifications")->row();

        if ($count) {
            return $count->unread_count;
        } else {
            return 0;
        }
    }
    
    /* READ NOTIFS */
    public function read_user_notifications($user_id) {
        $this->db->where("user_id = ", $user_id);
        $this->db->update("tbl_notifications", array("is_read" => 1));
    }
}