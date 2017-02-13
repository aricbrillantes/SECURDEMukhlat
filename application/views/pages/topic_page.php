<?php
include(APPPATH . 'views/header.php');
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    ?>

    <div class = "container page" style = "min-height: 100%; height: 100%;">
        <!-- Topic Page Header -->
        <div class = "row">
            <div class = "col-md-12 content-container" style = "padding: 0px;">
                <a class = "btn btn-topic-header" href="<?php echo base_url('topic') ?>"><h3 class = "pull-left topic-header-title" style = "margin-top: 3px; margin-bottom: 0px; padding: 0px;"><strong class = "text-info"><i class = "fa fa-chevron-left"></i> Dela Cruz Clan</strong></h3></a>
                <button class = "btn btn-link btn-sm" data-toggle = "modal" data-target = "#topic-modal" style = "padding-left: 0px; padding-right: 0px;">
                    <i class = "fa fa-question-circle-o"></i> <i><b>About Dela Cruz Clan</b></i>
                </button>
                <button class = "btn btn-md pull-right btn-primary" style = "margin: 5px; margin-right: 20px; width: 20%"><i class = "fa fa-plus-circle"></i> Follow Topic</button>
                <button class = "btn btn-success pull-right btn-md" style = "margin: 5px; width: 20%">
                    <i class = "fa fa-user"></i> Members
                </button>
            </div>
        </div>
        <div class = "row">
            <!-- Topic Page Content -->
            <div class = "col-md-12 content-container">
                <!-- Topic Post Preview -->
                <div class = "col-sm-6 content-container topic-preview-div">
                    <div class = "well topic-no-preview text-center">
                        <span><h3>Click a post to preview</h3></span>
                    </div>
                    <!-- PREVIEW 
                    <img alt = "" class = "pull-left img-circle home-content-pic" src = "<?php echo base_url('images/pic.jpg') ?>">
                    <span><a class = "btn btn-link home-content-body-username">Juan Dela Cruz</a> <i class = "home-content-body-date">Jan 20, 2017</i></span>
                    <p class = "post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices tellus nisi, non cursus urna suscipit id. Donec euismod vehicula elit at ullamcorper. Nam non feugiat libero. Vestibulum porttitor dolor in est sagittis pharetra. Maecenas non molestie dui, in posuere tortor. Pellentesque quis rhoncus leo. Etiam sit amet aliquam elit, et pharetra ipsum. Curabitur vestibulum velit vel est tempus tristique. Ut porttitor felis eu leo luctus, eu tristique velit bibendum. Proin vitae faucibus justo.
                        Curabitur dictum arcu felis, et pellentesque elit bibendum vitae. Nam eget euismod elit. Ut quis tempus nisi, quis elementum diam. Phasellus commodo, sapien vel efficitur pulvinar, magna nisl dignissim metus, in tempor mi ligula at diam. Mauris eu ipsum nec neque condimentum elementum id convallis nisl. Nam ut tortor nisl. Nulla et eleifend odio, at posuere urna. Integer a elit cursus, ultricies leo ut, facilisis ipsum. Suspendisse non nunc non purus auctor iaculis eu eget nunc. Morbi consequat arcu a nulla lobortis, sed rhoncus nunc scelerisque.
                    </p>
                    <button class = "btn btn-block btn-primary">View Post Thread</button>
                    -->
                </div>
                <!-- Topic Post List -->
                <div class = "col-sm-6 topic-preview-div">
                    <div class = "col-xs-12">
                        <button class = "btn btn-primary btn-block">Create Post</button>
                    </div>
                    <div class = "col-xs-12 topic-post-list">
                        <div class = "list-group" style = "padding-top: 15px;">
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-xs-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-xs-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">Jan 2, 2017</p>
                                    </div>
                                </div>
                            </a>
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-xs-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-xs-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">Jan 2, 2017</p>
                                    </div>
                                </div>
                            </a>
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-xs-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-xs-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">Jan 2, 2017</p>
                                    </div>
                                </div>
                            </a>
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-xs-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-xs-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">Jan 2, 2017</p>
                                    </div>
                                </div>
                            </a>
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-xs-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-xs-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">Jan 2, 2017</p>
                                    </div>
                                </div>
                            </a>
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-xs-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-xs-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">Jan 2, 2017</p>
                                    </div>
                                </div>
                            </a>
                            <!-- List Entry -->
                            <a class = "btn btn-link list-group-item list-entry" style = "padding-top: 0px; padding-bottom: 0px;">
                                <div class = "row">
                                    <div class = "col-sm-10">
                                        <h4>Post Title</h4>
                                        <p>content content content content </p>
                                    </div>
                                    <div class = "col-sm-2" style = "padding: 0px;">
                                        <p style = "padding-top: 20px;">01/02/17</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/modals/topic_description_modal.php');
    include(APPPATH . 'views/footer.php');
    