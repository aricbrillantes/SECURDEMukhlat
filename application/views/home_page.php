<?php
include('header.php');
?>
<body>
    <?php
    include('navigation_bar.php');
    $logged_user = $_SESSION['logged_user'];
    ?>

    <div class = "container home-page">
        <div class = "row">
            <div class = "col-md-9 home-container">
                <div class = "col-md-12 home-container">
                    <div class = "clearfix home-user-div">
                        <form action = "" style = "margin-right: 0px;">
                            <input type = "image" alt = "" class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo base_url('images/pic.jpg') ?>"></a>
                        </form>
                        <div class = "col-sm-4 home-user-text">
                            <a class = "btn btn-link home-username"><strong><?php echo $logged_user->first_name . " " . $logged_user->last_name;?></strong></a>
                            <i class = "fa fa-caret-right header-arrow"></i> 
                            <div class="home-dropdown dropdown">
                                <button class="btn btn-link dropdown-toggle home-username" type="button" data-toggle="dropdown"><strong>Home</strong>
                                    <i class="caret"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Topic</a></li>
                                </ul>
                            </div>
                        </div>
                        <button class ="btn btn-primary home-create-btn">Create Topic</button>
                    </div>
                    <div class = "home-content">
                        <marquee><i class = "fa fa-ambulance"></i></marquee>
                        <marquee><i class = "fa fa-ambulance"></i></marquee>
                        <marquee><i class = "fa fa-ambulance"></i></marquee>
                        <marquee><i class = "fa fa-ambulance"></i></marquee>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-sm-3" style = "padding-left: 0px;">
                <div class = "col-md-12 home-sidebar">
                    <div class = "sidebar-header">
                        <h4>Topics you Manage</h4>
                    </div>
                    <div class = "sidebar-topic-div">
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
                    <div class = "sidebar-header">
                        <h4>Topics you Follow</h4>
                    </div>
                    <div class = "sidebar-topic-div">
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
            <!-- End Sidebar -->
        </div>
    </div>

    <?php
    include('footer.php');
    