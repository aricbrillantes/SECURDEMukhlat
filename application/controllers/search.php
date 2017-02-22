<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of search
 *
 * @author Arces
 */
class search extends CI_Controller {

    public function index() {
        $this->load->model("user_model", "users");
        $this->load->model("topic_model", "topics");
        $keyword = $this->input->post("search-key");
        $data['keyword'] = $keyword;
        $data['users'] = $this->users->search_users($keyword);
        $data['topics'] = $this->topics->search_topics($keyword);
        $this->load->view('pages/search_page', $data);
    }

    public function topic() {
        $keyword = $this->input->post("keyword");
        $this->load->model("topic_model", "topics");
        $topics = $this->topics->search_topics($keyword);
        $html = "";

        foreach ($topics as $topic) {
            $user = $topic->user;
            $html = $html . "<a class = \"list-group-item btn btn-link list-entry\" href = \"topic/view/" . $topic->topic_id . "\">\n"
                    . "<h4 class = \"text-info no-padding no-margin\" style = \"display: inline-block;\">" . $topic->topic_name . "</h4>\n"
                    . "<small><i>by " . $user->first_name . " " . $user->last_name . " </i></small>\n"
                    . "<div class = \"pull-right\">\n"
                    . "<span class = \"label label-info follower-label\"><i class = \"fa fa-group\"></i> " . ($topic->followers ? count($topic->followers) : '0') . " </span>\n"
                    . "</div>\n"
                    . "</a>\n";
        }

        echo $html;
    }

}
