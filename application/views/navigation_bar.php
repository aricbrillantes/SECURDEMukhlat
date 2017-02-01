<?php
$logged_user = $_SESSION['logged_user'];
?>

<!-- Nav Bar -->
<nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
    <div class = "container-fluid">
        <div class = "navbar-header nav" style = "margin-left: 50px;">
            <a class = "navbar-brand" href = "#"><i class = "fa fa-users"></i> <strong>GetTogether</strong></a>
        </div>
        <ul class = "nav navbar-nav">
            <li class="active"><a href="#"><strong>Home</strong></a></li>
            <li><a href="#"><strong>Topics</strong></a></li>
        </ul>
        <div class = "search-div nav-right-end">
            <form class="navbar-form navbar-left" role = "search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default search-btn" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class = "nav navbar-nav navbar-right" style = "margin-right: 5px;">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img class = "img-rounded nav-prof-pic" src = "<?php echo base_url('images/pic.jpg') ?>"/> <?php echo $logged_user->first_name . " " . $logged_user->last_name ;?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#"><i class = "glyphicon glyphicon-exclamation-sign"></i> Notifications</a></li>
                        <li><a href="signin/logout"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Nav Bar -->