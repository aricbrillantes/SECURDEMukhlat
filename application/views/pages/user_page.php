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
                        <img class = "pull-left img-circle user-profile-img"src = "<?php echo base_url('images/default.jpg'); ?>" width = "100px"/>
                        <div class = "user-profile-info">
                            <h3 style = "margin-bottom: 0px;" class = "text-info"><strong><?php echo $user->first_name . " " . $user->last_name ?></strong></h3>
                            <p><i>Beep Boop Beep Boop</i></p>
                            <button class = "btn btn-success btn-sm"><i class = "fa fa-phone"></i></button>
                            <button class = "btn btn-success btn-sm"><i class = "fa fa-comment"></i></button>
                        </div>
                    </div>

                    <!-- User Topics -->
                    <div class = "col-md-12 user-topic-container">
                        <h3 class = "text-info text-center user-topic-header"><strong>Topics of <?php echo $user->first_name ?></strong></h3>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#user-topic-moderated">Moderated Topics</a></li>
                            <li><a data-toggle="pill" href="#user-topic-followed">Followed Topics</a></li>
                        </ul>
                        <br>
                        <div class="tab-content">
                            <div id="user-topic-moderated" class="tab-pane fade in active">
                                <div class = "user-header">
                                    <h4 class = "text-center"><strong>Topics Moderated by <?php echo $user->first_name; ?></strong></h4>
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
                                <div class = "col-sm-12 no-padding">
                                    <div class = "user-header">
                                        <h4 class = "text-center"><strong>Topics Followed by <?php echo $user->first_name; ?></strong></h4>
                                    </div>
                                    <div class = "user-topic-div">
                                        <ul class="nav">
                                            <?php foreach ($user->followed_topics as $topic): ?>
                                                <li>
                                                    <a class = "user-topic-item" href="<?php echo base_url('topic/view/' . $topic->topic_id); ?>" style = "padding: 5px 30px;">
                                                        <h4 class = "no-padding no-margin" style = "display: inline-block;"><?php echo $topic->topic_name ?></h4>
                                                        <span class = "pull-right label label-info follower-label"><i class = "fa fa-group"></i> <?php echo $topic->followers ? count($topic->followers) : '0' ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
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
                                <h2 class = "text-info no-margin"><strong><?php echo count($logged_user->topics); ?></strong></h2>
                                <p>Topics</p>
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
                                <p>Posts</p>
                            </div>
                        </div>
                    </div>

                    <!-- User Activities -->
                    <div class = "col-md-12 user-topic-container">
                        <h3 class = "text-info text-center user-activities-header"><strong>Activities of Juan</strong></h3>
                        <div class = "col-sm-12 user-activities-div">
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- POST PREVIEW -->
                            <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                <div class = "user-post-heading no-margin">
                                    <a class = "btn btn-link no-padding">
                                        <strong>Juan Dela Cruz</strong>
                                    </a> 
                                    <span>posted in</span> 
                                    <a class = "btn btn-link no-padding">
                                        <strong>Dela Cruz Clan</strong>
                                    </a>:
                                </div>
                                <div class = "col-xs-12 user-post-content no-padding">
                                    <div class = "col-xs-2 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                    </div>
                                    <div class = "col-xs-10 no-padding">
                                        <p class = "home-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec.

                                            Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper.

                                            Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
                                    </div>
                                </div>
                                <div class = "user-post-footer no-margin text-right">
                                    <a class = "btn btn-user-post-footer no-up-down-pad" href = "topic/thread">View Thread <i class = "fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/chat.php');
    