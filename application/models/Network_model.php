<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Network_model
 *
 * @author Arces
 */
class Network_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_general_network() {
        $this->load->model('user_model', 'users');

        $users = $this->users->get_ordinary_users();
        foreach ($users as $user) {
            //get user connections
            $user->user_map = $this->db->query('SELECT result.user_id FROM (select u.user_id from tbl_posts p ' .
                            'join tbl_post_vote pv on p.post_id = pv.post_id ' .
                            'join tbl_users u on u.user_id = p.user_id where pv.user_id = ' . $user->user_id .
                            ' UNION ALL select u.user_id from tbl_posts p1 join tbl_posts p2 on p2.parent_id = p1.post_id ' .
                            'join tbl_users u on p1.user_id = u.user_id where p2.user_id = ' . $user->user_id . ') result ' .
                            'group by result.user_id;')->result();

            //get topic connections
            $user->topic_map = $this->db->query('SELECT result.topic_id FROM (select t.topic_id from tbl_posts p ' .
                            'join tbl_topics t on p.topic_id = t.topic_id ' .
                            'where p.user_id = ' . $user->user_id . ' UNION ALL select t.topic_id from tbl_post_vote pv ' .
                            'join tbl_posts p on pv.post_id = p.post_id join tbl_topics t on t.topic_id ' .
                            '= p.topic_id where pv.user_id = ' . $user->user_id . ' UNION ALL select ' .
                            'topic_id from tbl_topics where creator_id = ' . $user->user_id . ' UNION ALL select ' .
                            'topic_id from tbl_topic_follower where user_id = ' . $user->user_id . ' UNION ALL select ' .
                            'topic_id from tbl_topic_moderator where user_id = ' . $user->user_id . ') result ' .
                            'group by result.topic_id;')->result();
        }

        return $users;
    }

    public function get_user_network($user_id) {
        $this->load->model('user_model', 'users');

        $user = $this->users->get_user(false, false, array('user_id' => $user_id));

        //get user replies
        $user->total_reply = $this->db->query("select count(*) as 'total_reply' from tbl_posts " .
                        'where post_id != root_id AND user_id = ' . $user_id)->row();

        $user->reply_map = $this->db->query("select u.user_id, u.first_name, u.last_name, count(*) as 'reply_count' from tbl_posts p1 join " .
                        'tbl_posts p2 on p1.parent_id = p2.post_id join tbl_users u on p2.user_id = u.user_id ' .
                        'where p1.user_id = ' . $user_id . ' group by u.user_id;')->result();

        //get user downvotes
        $user->total_downvote = $this->db->query("select count(*) as 'total_downvote' from tbl_post_vote " .
                        'where user_id = ' . $user_id . ' AND vote_type = -1')->row();
        $user->downvote_map = $this->db->query("select u.user_id, u.first_name, u.last_name, count(*) as 'downvote_count' from tbl_post_vote pv " .
                        'join tbl_posts p on pv.post_id = p.post_id ' .
                        'join tbl_users u on p.user_id = u.user_id ' .
                        'where pv.user_id = ' . $user_id . ' and vote_type = -1 ' .
                        'group by p.user_id')->result();
        
        //get user upvotes
        $user->total_upvote = $this->db->query("select count(*) as 'total_upvote' from tbl_post_vote " .
                        'where user_id = ' . $user_id . ' AND vote_type = 1')->row();
        $user->upvote_map = $this->db->query("select u.user_id, u.first_name, u.last_name, count(*) as 'upvote_count' from tbl_post_vote pv " .
                        'join tbl_posts p on pv.post_id = p.post_id ' .
                        'join tbl_users u on p.user_id = u.user_id ' .
                        'where pv.user_id = ' . $user_id . ' and vote_type = 1 ' .
                        'group by p.user_id')->result();

        return $user;
    }
}