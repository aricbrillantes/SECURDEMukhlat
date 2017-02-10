<?php
include(APPPATH . 'views/header.php');
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    ?>

    <div class = "container page">
        <div class = "row">
            <div class = "col-md-12 content-container no-padding">
                <a class = "pull-left btn btn-topic-header" style = "display: block;" href="<?php echo base_url('topic/view') ?>">
                    <h3 class = "pull-left topic-header-title" style = "margin-top: 3px; margin-bottom: 0px; padding: 0px;">
                        <strong class = "text-info"><i class = "fa fa-chevron-left"></i> 
                            Dela Cruz Clan:
                        </strong>
                    </h3>
                </a>
                <h3 style = "display: block; margin-top: 10px; color: #757575;"><strong>This is a post topic</strong> <small><i>Juan Dela Cruz</i></small></h3> 
            </div>
            <div class = "col-md-8 content-container">
                <div class = "col-md-12 content-container">
                    <div class="media">
                        <div class="media-left text-center">
                            <img src="<?php echo base_url('images/pic.jpg'); ?>" class="media-object img-circle post-pic">
                            <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-chevron-up vote-text"></i></button>
                            <br>
                            <span class = "text-muted" style = "margin-left: 3px;">3</span>
                            <br>
                            <button class = "btn btn-link btn-xs"><i class = "fa fa-chevron-down vote-text"></i></button>
                        </div>
                        <div class="media-body">
                            <!-- Reply Button -->
                            <button class = "pull-right btn btn-sm btn-gray"><i class = "fa fa-reply"></i></button>
                            <a class = "btn btn-primary btn-sm text-left pull-right" style = "margin-right: 5px;"><strong>View Attachments</strong></a>
                            <!-- Post Heading -->
                            <div class="media-heading">
                                <a class = "btn btn-link no-padding btn-lg"><strong>John Doe</strong></a>
                                <span class = "text-muted"><i style = "font-size: 11px;">Jan 23, 2017</i></span>
                            </div>
                            <p class = "post-content" style = "margin-top: 15px;">Lorem ipsum dolor sit amet adipiscing elit. Fusce nulla metus, sodales sit amet mattis eget, gravida sed nulla. Nunc at rutrum enim. Mauris a eros quis eros pellentesque dapibus. Curabitur vel tincidunt dui, non venenatis nunc. Ut purus nunc, aliquet non dapibus sit amet, lobortis id nulla. Sed egestas justo sed pulvinar hendrerit. Aenean a risus ultrices, fringilla ante sit amet, commodo quam. Etiam sapien lorem, ornare at posuere in, accumsan at lacus.</p>
                        </div>
                    </div>
                </div>
                <div class = "col-md-12 content-container">
                    <div class="media">
                        <div class="media-left text-center">
                            <img src="<?php echo base_url('images/pic.jpg'); ?>" class="media-object img-circle comment-pic">
                            <button class = "btn btn-link btn-xs" style = "margin-left: 3px;"><i class = "fa fa-arrow-circle-up vote-text"></i></button>
                            <br>
                            <span class = "text-muted" style = "margin-left: 3px;">3</span>
                            <br>
                            <button class = "btn btn-link btn-xs"><i class = "fa fa-arrow-circle-down vote-text"></i></button>
                        </div>
                        <div class="media-body">
                            <!-- Reply Button -->
                            <button class = "pull-right btn btn-sm btn-gray"><i class = "fa fa-reply"></i></button>
                            <a class = "btn btn-primary btn-sm text-left pull-right" style = "margin-right: 5px;"><strong>View Attachments</strong></a>
                            <h4 class="media-heading">John Doe</h4>

                            <p class = "post-content" style = "margin-top: 15px;">Lorem ipsum dolor sit amet adipiscing elit. Fusce nulla metus, sodales sit amet mattis eget, gravida sed nulla. Nunc at rutrum enim. Mauris a eros quis eros pellentesque dapibus. Curabitur vel tincidunt dui, non venenatis nunc. Ut purus nunc, aliquet non dapibus sit amet, lobortis id nulla. Sed egestas justo sed pulvinar hendrerit. Aenean a risus ultrices, fringilla ante sit amet, commodo quam. Etiam sapien lorem, ornare at posuere in, accumsan at lacus.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ATTACHMENTS -->
            <div class = "col-md-4" style = "padding-left: 5px; padding-right: 0px;">
                <div class = "col-md-12 content-container no-padding">
                    <!-- HEADER -->
                    <h4 class = "user-topic-header text-center thread-attachment-header">
                        <strong>Thread Attachments</strong>
                    </h4>

                    <!-- PILLS -->
                    <div class = "col-xs-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#thread-images">Images</a></li>
                            <li><a data-toggle="pill" href="#thread-videos">Videos</a></li>
                            <li><a data-toggle="pill" href="#thread-audio">Audio</a></li>
                            <li><a data-toggle="pill" href="#thread-files">Files</a></li>
                        </ul>
                    </div>

                    <div class = "col-xs-12">
                        <div class="tab-content">

                            <!-- IMAGES -->
                            <div id="thread-images" class="tab-pane fade in active user-topic-div">
                                <div class = "user-topic-div">
                                    <ul class="nav">
                                        <li class="active"><a href="#">Image</a></li>
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Image</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- VIDEO -->
                            <div id="thread-videos" class="tab-pane fade user-topic-div">
                                <div class = "col-sm-12 user-topic-list">
                                    <div class = "user-topic-div">
                                        <ul class="nav">
                                            <li class="active"><a href="#">Video</a></li>
                                            <li><a href="#">Video</a></li>
                                            <li><a href="#">Video</a></li>
                                            <li><a href="#">Video</a></li>
                                            <li><a href="#">Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- AUDIO -->
                            <div id="thread-audio" class="tab-pane fade user-topic-div">
                                <div class = "col-sm-12 user-topic-list">
                                    <div class = "user-topic-div">
                                        <ul class="nav">
                                            <li class="active"><a href="#">Audio</a></li>
                                            <li><a href="#">Audio</a></li>
                                            <li><a href="#">Audio</a></li>
                                            <li><a href="#">Audio</a></li>
                                            <li><a href="#">Audio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- FILES -->
                            <div id="thread-files" class="tab-pane fade user-topic-div">
                                <div class = "col-sm-12 user-topic-list">
                                    <div class = "user-topic-div">
                                        <ul class="nav">
                                            <li class="active"><a href="#">File</a></li>
                                            <li><a href="#">File</a></li>
                                            <li><a href="#">File</a></li>
                                            <li><a href="#">File</a></li>
                                            <li><a href="#">File</a></li>
                                        </ul>
                                    </div>
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
    