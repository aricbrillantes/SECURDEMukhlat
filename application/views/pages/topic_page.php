<?php
include(APPPATH . 'views/header.php');
$c_topic = $_SESSION['current_topic'];
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    ?>

    <div id = "topic-page" class = "container page" style = "min-height: 100%; height: 100%;">
        <!-- Topic Page Header -->
        <div class = "row">
            <div id = "topic-heading" class = "col-md-12 content-container no-padding">
                <a class = "btn btn-topic-header" href="<?php echo base_url('topic'); ?>">
                    <h4 class = "pull-left topic-header-title no-padding" style = "margin-top: 3px; margin-bottom: 0px;">
                        <strong class = "text-info"><i class = "fa fa-chevron-left"></i> 
                            Change Topic
                        </strong>
                    </h4>
                </a>
                <button class = "btn btn-link" data-toggle = "modal" data-target = "#topic-modal" style = "padding: 10px 0px;">
                    <i class = "fa fa-question-circle-o"></i><b> About <?php echo $c_topic->topic_name ?></b>
                </button>
                <?php if (!$is_followed): ?>
                    <button id = "topic-follow-btn" class = "btn btn-md pull-right btn-primary" style = "margin: 5px; margin-right: 20px; width: 20%" value = "<?php echo $c_topic->topic_id ?>">
                        <i class = "fa fa-plus-circle"></i> Follow Topic
                    <?php else: ?>
                        <button id = "topic-follow-btn" class = "btn btn-md pull-right btn-danger" style = "margin: 5px; margin-right: 20px; width: 20%" value = "<?php echo $c_topic->topic_id ?>">
                            <i class = "fa fa-minus-circle"></i> Unfollow Topic
                        <?php endif; ?>
                    </button>
                    <a class = "btn btn-success pull-right btn-md" style = "margin: 5px; width: 20%" href = "#topic-members-modal" data-toggle = "modal">
                        <i class = "fa fa-user"></i> Members
                    </a>
            </div>
        </div>
        <div class = "row">
            <!-- Topic Page Content -->
            <div class = "col-md-12 content-container">
                <!-- Topic Post Preview -->
                <div id = "preview-div" class = "col-sm-6 well topic-preview-div">
                    <div id = "no-preview"class = "topic-no-preview text-center">
                        <span><h3>Click a post to preview</h3></span>
                    </div>
                </div>
                <!-- Topic Post List -->
                <div class = "col-sm-6 topic-preview-div">
                    <div class = "col-xs-12">
                        <button class = "btn btn-primary btn-block" href="#create-post-modal" data-toggle = "modal">Post to <?php echo $c_topic->topic_name ?></button>
                    </div>
                    <div class = "col-xs-12 topic-post-list">
                        <div class = "list-group" style = "padding-top: 15px;">
                            <!-- List Entry -->
                            <?php
                            foreach ($c_topic->posts as $post):
                                $text_class = '';
                                if ($post->vote_count > 0) {
                                    $text_class = 'text-success';
                                } else if ($post->vote_count < 0) {
                                    $text_class = 'text-danger';
                                }
                                ?>
                                <a href = "javascript: void(0);" class = "btn btn-link list-group-item list-entry no-up-down-pad topic-post-entry" data-value = "<?php echo $post->post_id; ?>">
                                    <div class = "row">
                                        <div class = "col-xs-10">
                                            <h4 class = "ellipsis"><strong><?php echo $post->post_title; ?></strong> <small><i><?php echo $post->user->first_name . " " . $post->user->last_name; ?></i></small></h4>
                                            <p class = "ellipsis"><?php echo $post->post_content; ?></p>
                                        </div>
                                        <div class = "col-xs-2 text-center" style = "padding: 0px;">
                                            <p style = "padding-top: 10px; font-size: 11px;"><i><?php echo date("M-d-y", strtotime($post->date_posted)); ?></i></p>
                                            <span class = "vote-count <?php echo $text_class ?>"><?php echo $post->vote_count ? $post->vote_count : '0'; ?> <i class = "fa fa-trophy"></i></span>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include(APPPATH . 'views/modals/create_post_modal.php');
    include(APPPATH . 'views/modals/topic_description_modal.php');
    include(APPPATH . 'views/modals/topic_members_modal.php');
    include(APPPATH . 'views/modals/cancel_topic_modal.php');
    include(APPPATH . 'views/chat/chat.php');
    