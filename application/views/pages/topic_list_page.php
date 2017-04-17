<?php
include(APPPATH . 'views/header.php');
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    ?>

    <!-- CODE HERE -->
    <div class = "container page">
        <div class = "row">
            <div class = "col-md-9 home-container">
                <div class = "col-md-12 home-container">
                    <!-- HEADER -->
                    <div class = "clearfix content-container">
                        <a href = "<?php echo base_url('user/profile/' . $logged_user->user_id);?>">
                            <img class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>">
                        </a>

                        <div class = "col-sm-4 home-user-text">
                            <a href = "<?php echo base_url('user/profile/' . $logged_user->user_id);?>" class = "btn btn-link home-username"><strong><?php echo $logged_user->first_name; ?></strong></a>
                            <i class = "fa fa-caret-right header-arrow"></i> 
                            <div class="home-dropdown dropdown">
                                <button class="btn btn-link dropdown-toggle home-username" type="button" data-toggle="dropdown"><strong>Topic</strong>
                                    <i class="caret"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="topic">Topic</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class ="btn btn-primary home-create-btn" href="#create-topic-modal" data-toggle = "modal">Create Topic</a>
                    </div>
                </div>

                <div class = "col-md-12 content-container">
                    <form action = "javascript:void(0);" role="search">
                        <div class="input-group" style = "width: 100%">
                            <input type="text" class="form-control search-text" placeholder="&#xF002; Search for a topic" id = "search-topic-list">
                        </div>
                    </form>
                </div>

                <div class = "col-md-12 content-container">
                    <div id = "topic-list" class = "list-group">
                        <?php foreach ($topics as $topic): ?>
                            <a class = "list-group-item btn btn-link list-entry" href = "<?php echo base_url('topic/view/' . $topic->topic_id); ?>">
                                <h4 class = "text-info no-padding no-margin" style = "display: inline-block;"><?php echo $topic->topic_name ?></h4>
                                <small><i>by <?php echo $topic->user->first_name . " " . $topic->user->last_name; ?></i></small>
                                <div class = "pull-right">
                                    <span class = "label label-info follower-label"><i class = "fa fa-group"></i> <?php echo $topic->followers ? count($topic->followers) : '0' ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php
            include(APPPATH . 'views/topic_side_bar.php');
            include(APPPATH . 'views/modals/create_topic_modal.php');
            ?>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("/js/search.js"); ?>"></script>
    <?php
    include(APPPATH . 'views/chat/chat.php');
    