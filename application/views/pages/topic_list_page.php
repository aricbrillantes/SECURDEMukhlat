<?php
include(APPPATH . 'views/header.php');
?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    include(APPPATH . 'views/topic_side_bar.php');
    ?>
    
    <!-- CODE HERE -->
<!--    <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>-->
    </div>

    <div class = "container page">
        <div class = "row">
            <div class = "col-md-9 home-container">
                <div class = "col-md-12 home-container">
                    <!-- HEADER -->
                    <div class = "clearfix content-container" style="border-radius:20px;">
<!--                        <a class="text1color" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                            <img class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>">
                        </a>-->

<!--                        <div class = "col-sm-4 home-user-text">
                            <a href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>" class = "btn btn-link home-username text1color"><strong><?php echo $logged_user->first_name; ?></strong></a>
                            <i class = "fa fa-caret-right header-arrow"></i> 
                            <div class="home-dropdown dropdown">
                                <button class="btn btn-link dropdown-toggle home-username text1color" type="button" data-toggle="dropdown"><strong>Topic</strong>
                                    <i class="caret"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="topic">Topic</a></li>
                                </ul>
                            </div>
                        </div>-->
<center><a onmouseenter="playclip()" id="crettop" class ="btn btn-primary buttonsbgcolor" href="#create-topic-modal" data-toggle = "modal"><i class = "fa fa-pencil"></i> Create Topic</a>
</center>
                    </div>
                </div>

                <div class = "col-md-12 content-container" style="border-radius:20px;">
                    <form action = "javascript:void(0);" role="search">
                        <div class="input-group" style = "width: 100%">
                            <input type="text" class="form-control search-text" placeholder="&#xF002; Search for a topic" id = "search-topic-list">
                        </div>
                    </form>
                </div>

                <div class = "col-md-12 content-container" style="border-radius:20px;">
                    <div id = "sort-dropdown" class = "dropdown text-muted">
                        Sort Topics by: <br>
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
                        
                    <a class="topic-grid1" id="topicGcolor" href = "<?php echo base_url('topic/view/' . $topic->topic_id); ?>">
                        <?php

                        $conn = @new mysqli($servername, $username, $password, $dbname);

                        $sql = "SELECT file_url FROM tbl_covers WHERE topic_id = '$topic->topic_id'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        echo '<img src=" '.$row['file_url'].' " width = "100%" height="150px" style="position:relative;" />';
                        echo '<span>'. $topic->topic_name .'<img src=" '.$row['file_url'].' " /></span>';
                        $conn->close();
                        }?>

                                <h4 class = "text-info no-padding no-margin text1color topicheader"><?php echo utf8_decode($topic->topic_name); ?></h4><br>
                                <small class="topicheader2"><i>by <?php echo $topic->user->first_name . " " . $topic->user->last_name; ?></i></small>
                                <div class="topic-grid-icons">
                                    <div class = "label label-info follower-label draggable"><i class = "fa fa-group"></i> 
                                        <?php echo $topic->followers ? count($topic->followers) : '0' ?> <i class = "fa fa-comments"></i> 
                                            <?php echo $topic->post_count; ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php
            include(APPPATH . 'views/modals/create_topic_modal.php');
            ?>
        </div>
    </div>
        <script>
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                var whistleup = new Audio('<?php echo base_url('images/Slide Whistle up1.mp3'); ?>');
                window.scroll({
                  top: 0,
                  behavior: 'smooth' 
                });
                whistleup.play();
            }
            function botFunction() {                
                var fallrock = new Audio('<?php echo base_url('images/falling rocks.mp3'); ?>');
                window.scroll({
                  top: 100000000,
                  behavior: 'smooth' 
                });
                fallrock.play();
            }
        </script>
        
        <script type="text/javascript" src="<?php echo base_url("/js/search.js"); ?>"></script>
        <div onclick="topFunction()" class="balloon" style="text-align:center;"><p style="padding-top:50%;cursor:pointer;">Up!</p></div>
        <div  onclick="botFunction()"><img class="rock1 goingdown" src = "<?php echo base_url('images/rock bottom.png'); ?>"/><p class="centeredbot">Bottom!</p></div>
        <!--
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture1.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture5.png'); ?>"/></span>
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture2.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture6.png'); ?>"/></span>
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture3.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture7.png'); ?>"/></span>
        <span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture4.png'); ?>"/></span><span> <img class = "pinwheel" src = "<?php echo base_url('images/Picture8.png'); ?>"/></span>
-->   
 <?php
  //  include(APPPATH . 'views/chat/chat.php');
    