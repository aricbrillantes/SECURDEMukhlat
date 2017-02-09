<?php
include(APPPATH . 'views/header.php');
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    ?>

    <div class = "container page">
        <div class = "row">
            <div class = "col-md-12 content-container" style = "padding-top: 20px;">
                <div class = "col-md-6">
                    <!-- User Info -->
                    <div class = "col-md-12">
                        <img class = "pull-left img-circle user-profile-img"src = "images/pic.jpg" width = "100px"/>
                        <div class = "user-profile-info">
                            <h3 style = "margin-bottom: 0px;" class = "text-info"><strong>Juan Dela Cruz</strong></h3>
                            <p><i>Beep Boop Beep Boop</i></p>
                            <button class = "btn btn-success btn-sm"><i class = "fa fa-phone"></i></button>
                            <button class = "btn btn-success btn-sm"><i class = "fa fa-comment"></i></button>
                        </div>
                    </div>

                    <!-- User Topics -->
                    <div class = "col-md-12 user-topic-container">
                        <h3 class = "text-info text-center user-topic-header"><strong>Topics of Juan</strong></h3>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#user-topic-moderated">Moderated Topics</a></li>
                            <li><a data-toggle="pill" href="#user-topic-followed">Followed Topics</a></li>
                        </ul>
                        <br>
                        <div class="tab-content">
                            <div id="user-topic-moderated" class="tab-pane fade in active">
                                <div class = "user-header">
                                    <h4 class = "text-center"><strong>Topics Moderated by Juan</strong></h4>
                                </div>
                                <div class = "user-topic-div">
                                    <ul class="nav">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#">Link 1</a></li>
                                        <li><a href="#">Link 2</a></li>
                                        <li><a href="#">Link 3</a></li>
                                        <li><a href="#">Link 1</a></li>
                                        <li><a href="#">Link 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="user-topic-followed" class="tab-pane fade">
                                <div class = "col-sm-12 user-topic-list">
                                    <div class = "user-header">
                                        <h4 class = "text-center"><strong>Topics Followed by Juan</strong></h4>
                                    </div>
                                    <div class = "user-topic-div">
                                        <ul class="nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6">
                    <!-- User Stats -->
                    <div class = "col-md-12" style = "margin-bottom: 22px; padding-top: 20px;">
                        <div class = "col-sm-4 no-left-right-pad">
                            <div class = "col-xs-12 text-center no-left-right-pad">
                                <h2 class = "text-info no-margin"><strong>35</strong></h2>
                                <p>Posts</p>
                            </div>
                        </div>
                        <div class = "col-sm-4 no-left-right-pad"style = "border-right: 1px solid #E0E0E0; border-left: 1px solid #E0E0E0;">
                            <div class = "col-xs-12 text-center no-left-right-pad">
                                <h2 class = "text-info no-margin"><strong>3,005</strong></h2>
                                <p>Points</p>
                            </div>
                        </div>
                        <div class = "col-sm-4 no-left-right-pad">
                            <div class = "col-xs-12 text-center no-left-right-pad">
                                <h2 class = "text-info no-margin"><strong>35</strong></h2>
                                <p>Comments</p>
                            </div>
                        </div>
                    </div>

                    <!-- User Activities -->
                    <div class = "col-md-12 user-topic-container">
                        <h3 class = "text-info text-center user-activities-header"><strong>Activities of Juan</strong></h3>
                        <div class = "col-sm-12 user-activities-div">
                            <!-- Post Sample -->
                            <div class = "col-xs-12 no-padding" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content">
                                    <img class = "pull-left img-circle" style = "margin: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus mauris, rhoncus in maximus nec, ullamcorper id orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sit amet lacus elementum, imperdiet libero vel, cursus purus. Quisque eget dapibus urna. Integer faucibus urna eu sapien volutpat sagittis. Nam ipsum lorem, malesuada id odio eget, egestas bibendum enim. Morbi vitae semper turpis.</p>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post Sample -->
                            <div class = "col-xs-12 no-padding" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content">
                                    <img class = "pull-left img-circle" style = "margin: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus mauris, rhoncus in maximus nec, ullamcorper id orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sit amet lacus elementum, imperdiet libero vel, cursus purus. Quisque eget dapibus urna. Integer faucibus urna eu sapien volutpat sagittis. Nam ipsum lorem, malesuada id odio eget, egestas bibendum enim. Morbi vitae semper turpis.</p>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad">View Thread <i class = "fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post Sample -->
                            <div class = "col-xs-12 no-padding" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content">
                                    <img class = "pull-left img-circle" style = "margin: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus mauris, rhoncus in maximus nec, ullamcorper id orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sit amet lacus elementum, imperdiet libero vel, cursus purus. Quisque eget dapibus urna. Integer faucibus urna eu sapien volutpat sagittis. Nam ipsum lorem, malesuada id odio eget, egestas bibendum enim. Morbi vitae semper turpis.</p>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad">View Thread <i class = "fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post Sample -->
                            <div class = "col-xs-12 no-padding" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content">
                                    <img class = "pull-left img-circle" style = "margin: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus mauris, rhoncus in maximus nec, ullamcorper id orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sit amet lacus elementum, imperdiet libero vel, cursus purus. Quisque eget dapibus urna. Integer faucibus urna eu sapien volutpat sagittis. Nam ipsum lorem, malesuada id odio eget, egestas bibendum enim. Morbi vitae semper turpis.</p>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad">View Thread <i class = "fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post Sample -->
                            <div class = "col-xs-12 no-padding" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content">
                                    <img class = "pull-left img-circle" style = "margin: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus mauris, rhoncus in maximus nec, ullamcorper id orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sit amet lacus elementum, imperdiet libero vel, cursus purus. Quisque eget dapibus urna. Integer faucibus urna eu sapien volutpat sagittis. Nam ipsum lorem, malesuada id odio eget, egestas bibendum enim. Morbi vitae semper turpis.</p>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad">View Thread <i class = "fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post Sample -->
                            <div class = "col-xs-12 no-padding" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-user-post-heading no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content">
                                    <img class = "pull-left img-circle" style = "margin: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus mauris, rhoncus in maximus nec, ullamcorper id orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sit amet lacus elementum, imperdiet libero vel, cursus purus. Quisque eget dapibus urna. Integer faucibus urna eu sapien volutpat sagittis. Nam ipsum lorem, malesuada id odio eget, egestas bibendum enim. Morbi vitae semper turpis.</p>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad">View Thread <i class = "fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/footer.php');
    