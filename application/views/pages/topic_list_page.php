<?php
include(APPPATH . 'views/header.php');
?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <a href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                            <img class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>">
                        </a>

                        <div class = "col-sm-4 home-user-text">
                            <a href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>" class = "btn btn-link home-username"><strong><?php echo $logged_user->first_name; ?></strong></a>
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
                        <a id="crettop" class ="btn btn-primary home-create-btn buttonsbgcolor" href="#create-topic-modal" data-toggle = "modal">Create Topic</a>
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
                    <div id = "sort-dropdown" class = "dropdown text-muted">
                        Sort Topics by: 
                        <button id = "chosen-sort" class="btn btn-gray dropdown-toggle" type="button" data-toggle="dropdown"><strong><i class = "fa fa-clock-o"></i> Date Created</strong>
                            <i class="caret"></i></button>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-value = "1"><i class = "fa fa-clock-o"></i> Date Created</a></li>
                            <li><a href="#" data-value = "2"><i class = "fa fa-group"></i> Follower Count</a></li>
                            <li><a href="#" data-value = "3"><i class = "fa fa-comments"></i> Post Count</a></li>
                        </ul>
                    </div>
                    <div id = "topic-list" class = "list-group">
                        <?php foreach ($topics as $topic): ?>
                            <a class="topic-grid1" href = "<?php echo base_url('topic/view/' . $topic->topic_id); ?>">
                                <h4 class = "text-info no-padding no-margin" style = "display: inline-block;"><?php echo utf8_decode($topic->topic_name); ?></h4><br>
                                <small><i>by <?php echo $topic->user->first_name . " " . $topic->user->last_name; ?></i></small>
                                <div class="topic-grid-icons">
                                    <span class = "label label-info follower-label"><i class = "fa fa-group"></i> 
                                        <?php echo $topic->followers ? count($topic->followers) : '0' ?> <i class = "fa fa-comments"></i> 
                                            <?php echo $topic->post_count; ?></span>
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

        
        <script>
            var amountScrolled = 50;

            $(window).scroll(function() {
                if ( $(window).scrollTop() > amountScrolled ) {
                    $('a.sf-back-to-top').fadeIn('slow');
                } else {
                    $('a.sf-back-to-top').fadeOut('slow');
                }
            });

            $('a.sf-back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 700);
                return false;
            });
            
            window.onscroll = function() {scrollFunction();};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script>
        
        <script type="text/javascript" src="<?php echo base_url("/js/search.js"); ?>"></script>
        <button onclick="topFunction()" id="myBtn" title="Go to top">^<br>Back to Top</button>
        
        <!--
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture1.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture5.png'); ?>"/></span>
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture2.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture6.png'); ?>"/></span>
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture3.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture7.png'); ?>"/></span>
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture4.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture8.png'); ?>"/></span>
-->   
 <?php
  //  include(APPPATH . 'views/chat/chat.php');
    