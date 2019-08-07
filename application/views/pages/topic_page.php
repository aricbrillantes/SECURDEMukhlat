<?php
include(APPPATH . 'views/header.php');
  $logged_user = $_SESSION['logged_user'];  
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
                <a onmouseenter="playclip()" class = "btn btn-topic-header" href="<?php echo base_url('home'); ?>">
                    <h4 class = "pull-left topic-header-title no-padding" style = "margin-top: 3px; margin-bottom: 0px;">
                        <strong class = "text-info text1color" style="cursor:pointer;"><i class = "fa fa-chevron-left" style="cursor:pointer;"></i> 
                            Back to Home
                        </strong>
                    </h4>
                </a>
                
            </div>
        </div>
        <div class = "row">
            <!-- Topic Page Content -->
            <div class = "col-md-12 content-container">
                <!-- Topic Post Preview -->
                <div class = "col-sm-6">
                    <div class = "col-sm-12 topic-description-div no-padding">
                        <h4 class = "no-margin text-center user-topic-header topic-intro-header bar1color">
                            <strong class="textoutliner"><?php echo utf8_decode($c_topic->topic_name); ?></strong>

                            <?php if ($is_moderated): ?>
                            <br>
                            <button onmouseenter="playclip()" id = "edit-topic-btn" class = "btn btn-default"><i class = "fa fa-pencil"></i> Edit Description</button>

                            <?php if ($c_topic->creator_id === $logged_user->user_id): ?>
                                <button onmouseenter="playclip()" type = "button" id = "cancel-topic-btn" class = "btn btn-danger" style = "margin-left: 5px;"><i class = "fa fa-trash"></i> Cancel Topic</button>
                            <?php endif; 
                            endif;?>
                        </h4>
                        <div class = "content-container topic-intro-content">
                            <p id = "desc-creator" class = "no-margin text-muted" align = "center">
                                <small><i>by <a class = "btn btn-link btn-xs no-padding no-margin text1color" href = "<?php echo base_url('user/profile/' . $c_topic->user->user_id); ?>"><?php echo $c_topic->user->first_name . " " . $c_topic->user->last_name; ?></a></i></small>
                            </p>
                            <?php if ($is_moderated): ?>
                                <div id = "desc-edit" class = "col-md-12 hidden">
                                    <div class = "form-group" style = "margin-bottom: 5px;">
                                            <textarea id = "edit-topic-text" style="height:100px;" maxlength = "180" class = "form-control" ><?php echo $c_topic->topic_description ?></textarea>
                                        
                                    </div>
                                    <div class = "form-group pull-right" style = "margin-top: 0px;">
                                        <button onmouseenter="playclip()" value = "<?php echo $c_topic->topic_id ?>" id = "edit-topic-save" class = "btn btn-primary btn-sm">Save</button>
                                        <button onmouseenter="playclip()" id = "edit-topic-cancel" type = "button" class = "btn btn-gray btn-sm">Cancel</button>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <p id = "desc-container" class = "no-margin wrap text-center">
                                <?php echo utf8_decode($c_topic->topic_description); ?>
                            </p>
                        </div>
                    </div>
                    <div id = "preview-div" class = "col-sm-12 well topic-preview-div">
                        <div id = "no-preview"class = "topic-no-preview text-center">
                            <span><h3>Click a post to preview</h3></span>
                        </div>
                    </div>
                </div>
                <!-- Topic Post List -->
                <div class = "col-sm-6 topic-preview-div">
                    <div class = "col-xs-12">
                        <button onmouseenter="playclip()" id="crettop" class = "btn btn-primary btn-block buttonsbgcolor textoutliner" href="#create-post-modal" data-toggle = "modal" style="font-size:22px">Post to <?php echo utf8_decode($c_topic->topic_name); ?></button>
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
                                        <div class = "col-xs-9 fadebelow">
                                            <!--<h4 class = "ellipsis"><strong><?php echo utf8_decode($post->post_title); ?></strong> <small><i><?php echo $post->user->first_name . " " . $post->user->last_name; ?></i></small></h4>-->
                                            <p class = "ellipsis" style="white-space: pre-wrap;"><?php echo utf8_decode($post->post_content); ?></p>
                                        </div>
                                        <div class = "col-xs-3 text-center" style = "padding: 0px;">
                                            <p style = "padding-top: 10px; font-size: 13px !important;color: #78909C;"><i><?php echo date("F d, Y", strtotime($post->date_posted)); ?></i></p>
                                            <!--<span class = "vote-count <?php echo $text_class ?>"><?php echo $post->vote_count ? $post->vote_count : '0'; ?> <i class = "glyphicon glyphicon-star"></i></span>-->
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
    include(APPPATH . 'views/side_navbar.php');
    include(APPPATH . 'views/modals/create_post_modal.php');
    include(APPPATH . 'views/modals/topic_members_modal.php');
    include(APPPATH . 'views/modals/cancel_topic_modal.php');
 //   include(APPPATH . 'views/chat/chat.php');
    