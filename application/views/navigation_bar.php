<?php
$logged_user = $_SESSION['logged_user'];
?>

<!-- Nav Bar -->
<nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
    <div class = "container-fluid">
        <div class = "navbar-header" style = "margin-left: 50px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class = "navbar-brand" href = "<?php echo base_url() ?>home"><i class = "fa fa-users"></i> <strong>GetTogether</strong></a>
        </div>
        <div class = "collapse navbar-collapse" id = "nav-collapse">
            <ul class = "nav navbar-nav">
                <li class="active"><a href="<?php echo base_url() ?>home"><strong>Home</strong></a></li>
                <li><a href="<?php echo base_url() ?>topic"><strong>Topics</strong></a></li>
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
                            <img class = "img-rounded nav-prof-pic" src = "<?php echo base_url('images/pic.jpg') ?>"/> <?php echo $logged_user->first_name . " " . $logged_user->last_name; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('user'); ?>">My Profile</a></li>
                            <li><a href="#nav-modal" data-toggle = "modal"><i class = "glyphicon glyphicon-exclamation-sign"></i> Notifications</a></li>
                            <li><a href="<?php echo base_url('signin/logout'); ?>"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Nav Modal -->
<div id="nav-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Nav Modal Content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">NOTIFICATIONS</h4>
            </div>
            <div class="modal-body">
                <p>HEHEHEHE</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Nav Bar -->