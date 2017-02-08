<?php
include(APPPATH . 'views/header.php');
?>
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
                        <form action = "" style = "margin-right: 0px;">
                            <input type = "image" alt = "" class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo base_url('images/pic.jpg') ?>"></a>
                        </form>
                        <div class = "col-sm-4 home-user-text">
                            <a class = "btn btn-link home-username"><strong><?php echo $logged_user->first_name . " " . $logged_user->last_name; ?></strong></a>
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
                        <button class ="btn btn-primary home-create-btn">Create Topic</button>
                    </div>
                </div>

                <div class = "col-md-12 content-container">
                    <form class="" role="search">
                        <div class="input-group" style = "width: 100%">
                            <input type="text" class="form-control search-text" placeholder="&#xF002; Search for Topic" name="srch-term" id="srch-term">
                        </div>
                    </form>
                </div>

                <div class = "col-md-12 content-container">
                    <div class = "list-group">
                        <a class = "list-group-item btn btn-link list-entry" href = "topic/view"><strong>HEHE</strong></a>
                        <a class = "list-group-item btn btn-link list-entry"><strong>HEHE</strong></a>
                        <a class = "list-group-item btn btn-link list-entry"><strong>HEHE</strong></a>
                        <a class = "list-group-item btn btn-link list-entry"><strong>HEHE</strong></a>
                        <a class = "list-group-item btn btn-link list-entry"><strong>HEHE</strong></a>
                        <a class = "list-group-item btn btn-link list-entry"><strong>HEHE</strong></a>
                        <a class = "list-group-item btn btn-link list-entry"><strong>HEHE</strong></a>
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
    