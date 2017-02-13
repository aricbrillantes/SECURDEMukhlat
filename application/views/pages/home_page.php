<?php
include(APPPATH . 'views/header.php');
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    $logged_user = $_SESSION['logged_user'];
    ?>

    <div class = "container page">
        <div class = "row">
            <div class = "col-md-9 home-container">
                <div class = "col-sm-12 home-container">
                    <!-- HEADER -->
                    <div class = "clearfix content-container">
                        <form action = "" style = "margin-right: 0px;">
                            <input type = "image" alt = "" class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                        </form>
                        <div class = "col-sm-4 home-user-text">
                            <a class = "btn btn-link home-username"><strong><?php echo $logged_user->first_name . " " . $logged_user->last_name; ?></strong></a>
                            <i class = "fa fa-caret-right header-arrow"></i> 
                            <div class="home-dropdown dropdown">
                                <button class="btn btn-link dropdown-toggle home-username" type="button" data-toggle="dropdown"><strong>Home</strong>
                                    <i class="caret"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="topic">Topic</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class ="btn btn-primary home-create-btn" href="#create-topic-modal" data-toggle = "modal">Create Topic</a>
                    </div>

                    <!-- CONTENT -->
                    <div class = "col-sm-12 content-container">
                        <div class = "col-sm-12">
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
                                    <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px; margin-bottom: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                        <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                                        <br>
                                        <span class = "text-muted" style = "margin-left: 3px;">3</span>
                                        <br>
                                        <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                                    </div>
                                    <div class = "col-xs-11" style = "margin-top: 5px;">
                                        <div><a class = "btn btn-lg btn-link no-padding"><strong>Juan Dela Cruz</strong></a><span class = "text-muted"> <i style = "font-size: 11px">Jan 23, 2017</i></span></div>
                                        <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec. Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper. Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
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
                                    <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px; margin-bottom: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                        <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                                        <br>
                                        <span class = "text-muted" style = "margin-left: 3px;">3</span>
                                        <br>
                                        <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                                    </div>
                                    <div class = "col-xs-11" style = "margin-top: 5px;">
                                        <div><a class = "btn btn-lg btn-link no-padding"><strong>Juan Dela Cruz</strong></a><span class = "text-muted"> <i style = "font-size: 11px">Jan 23, 2017</i></span></div>
                                        <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec. Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper. Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
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
                                    <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px; margin-bottom: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                        <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                                        <br>
                                        <span class = "text-muted" style = "margin-left: 3px;">3</span>
                                        <br>
                                        <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                                    </div>
                                    <div class = "col-xs-11" style = "margin-top: 5px;">
                                        <div><a class = "btn btn-lg btn-link no-padding"><strong>Juan Dela Cruz</strong></a><span class = "text-muted"> <i style = "font-size: 11px">Jan 23, 2017</i></span></div>
                                        <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec. Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper. Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
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
                                    <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px; margin-bottom: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                        <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                                        <br>
                                        <span class = "text-muted" style = "margin-left: 3px;">3</span>
                                        <br>
                                        <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                                    </div>
                                    <div class = "col-xs-11" style = "margin-top: 5px;">
                                        <div><a class = "btn btn-lg btn-link no-padding"><strong>Juan Dela Cruz</strong></a><span class = "text-muted"> <i style = "font-size: 11px">Jan 23, 2017</i></span></div>
                                        <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec. Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper. Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
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
                                    <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px; margin-bottom: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                        <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                                        <br>
                                        <span class = "text-muted" style = "margin-left: 3px;">3</span>
                                        <br>
                                        <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                                    </div>
                                    <div class = "col-xs-11" style = "margin-top: 5px;">
                                        <div><a class = "btn btn-lg btn-link no-padding"><strong>Juan Dela Cruz</strong></a><span class = "text-muted"> <i style = "font-size: 11px">Jan 23, 2017</i></span></div>
                                        <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec. Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper. Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
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
                                    <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                        <img class = "img-circle" style = "margin-top: 10px; margin-bottom: 10px;" src = "<?php echo base_url('images/pic.jpg'); ?>"/>
                                        <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                                        <br>
                                        <span class = "text-muted" style = "margin-left: 3px;">3</span>
                                        <br>
                                        <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                                    </div>
                                    <div class = "col-xs-11" style = "margin-top: 5px;">
                                        <div><a class = "btn btn-lg btn-link no-padding"><strong>Juan Dela Cruz</strong></a><span class = "text-muted"> <i style = "font-size: 11px">Jan 23, 2017</i></span></div>
                                        <p class = "home-content-body" style = "border-right: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae velit vitae nisl consequat fermentum. Curabitur lectus tellus, pulvinar ut dictum ac, ullamcorper a leo. Nunc feugiat justo eu metus ultrices pharetra. Donec pharetra lobortis ex aliquet feugiat. Nunc sit amet nisl vehicula, condimentum turpis vitae, accumsan tortor. In quis nibh vel lacus lacinia venenatis. Ut accumsan magna vel quam finibus varius. Quisque ornare, quam a suscipit imperdiet, orci justo porttitor enim, nec facilisis purus leo sit amet sem. Maecenas blandit risus id sodales dapibus. Nulla vehicula lobortis neque, at hendrerit tortor dignissim nec. Etiam mi dui, tempus a vehicula a, euismod et urna. Vivamus eu fermentum odio. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed condimentum lectus. Maecenas vitae rhoncus sem. Sed placerat interdum ante, at sagittis ante aliquet sit amet. Sed posuere pretium neque quis ullamcorper. Cras scelerisque, nulla a posuere vehicula, ante libero interdum augue, a feugiat arcu ex posuere ante. Aenean ac orci sit amet odio lacinia dignissim ac eu diam. Fusce a iaculis leo. Donec euismod nisl tortor, ac lacinia libero vulputate id. Aliquam erat volutpat. Proin at quam a nibh eleifend commodo nec sit amet diam. Phasellus massa arcu, finibus in turpis vitae, mollis scelerisque ex.</p>
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

            <?php
            include(APPPATH . 'views/topic_side_bar.php');
            include(APPPATH . 'views/modals/create_topic_modal.php');
            include(APPPATH . 'views/modals/topic_description_modal.php');
            ?>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/footer.php');
    