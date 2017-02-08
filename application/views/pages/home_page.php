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
                            <input type = "image" alt = "" class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo base_url('images/pic.jpg') ?>"></a>
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
                        <button class ="btn btn-primary home-create-btn">Create Topic</button>
                    </div>

                    <!-- CONTENT -->
                    <div class = "col-sm-12 content-container">
                        <div class = "col-sm-12 home-content">
                            <!-- CONTENT HEADER -->
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>

                            <!-- CONTENT BODY -->

                            <!-- PROFILE PICTURE -->
                            <div class = "col-sm-2" style = "padding-right: 0px;">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "col-xs-12 text-center" style = "margin-bottom: 5px;">
                                    <i class = "text-muted">3 points</i>
                                </div>
                                
                                <div class = "col-xs-6 text-center" style = "margin: 0px; padding: 0px;">
                                    <button class = "btn btn-xs btn-success" style = "width: 90%"><i class = "fa fa-thumbs-o-up vote-button"></i></button>
                                </div>
                                <div class = "col-xs-6 text-center" style = "margin: 0px; padding: 0px;">
                                    <a class = "btn btn-xs btn-danger" style = "width: 90%"><i class = "fa fa-thumbs-o-down vote-button"></i></a>
                                </div>
                            </div>

                            <!-- CONTENT TEXT -->
                            <div class = "col-sm-6" style = "padding-right: 0px;">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;  text-overflow: ellipsis;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>

                            <!-- ATTACHMENTS -->
                            <div class = "col-sm-4">
                                <div class = "list-group" style = "margin-top: 10px;">
                                    <a class = "list-group-item btn btn-link" style=" border-radius: 0px;"><i class = "fa fa-image"></i> File Link 1</a>
                                    <a class = "list-group-item btn btn-link"><i class = "fa fa-image"></i> File Link 2</a>
                                    <a class = "list-group-item btn btn-link"><i class = "fa fa-music"></i> File Link 3</a>
                                    <a class = "list-group-item btn btn-link"><i class = "fa fa-file"></i> File Link 4</a>
                                    <a class = "list-group-item btn btn-link"> <i class = "fa fa-video-camera"></i> File Link 5</a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p class = "post-content">Hello World!World!World!World!World!World!World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 home-content">
                            <div class = "home-content-header">
                                <a class = "btn btn-link home-content-header-link">Juan Dela Cruz</a> posted in 
                                <a class = "btn btn-link home-content-header-link">Dela Cruz Clan</a>:
                            </div>
                            <div class = "col-sm-8">
                                <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                                <div class = "home-content-body">
                                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                                    <p style = "text-align: justify; text-justify: inter-word;">Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World!</p>
                                </div>
                            </div>
                            <div class = "col-sm-4 home-content-attachments">
                                <div>
                                    HEHEHE
                                </div>
                                <div>
                                    HEHEHE
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include(APPPATH . 'views/topic_side_bar.php');
            ?>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/footer.php');
    