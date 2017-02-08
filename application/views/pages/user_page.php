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
                    <div class = "col-md-12" style = "margin-bottom: 15px;">
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
                            <li class="active"><a data-toggle="pill" href="#user-topic-managed">Managed Topics</a></li>
                            <li><a data-toggle="pill" href="#user-topic-followed">Followed Topics</a></li>
                        </ul>
                        <br>
                        <div class="tab-content">
                            <div id="user-topic-managed" class="tab-pane fade in active">
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

                <div class = "col-md-6 content-container">
                    <!-- User Stats -->
                    <div class = "col-md-12">
                        <div class = "col-sm-4 content-container">
                            1
                        </div>
                        <div class = "col-sm-4 content-container">
                            2
                        </div>
                        <div class = "col-sm-4 content-container">
                            3
                        </div>
                    </div>
                    <!-- User Activities -->
                    <div class = "col-md-12 content-container">
                        4
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/footer.php');
    