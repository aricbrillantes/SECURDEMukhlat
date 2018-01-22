<?php
$logged_user = $_SESSION['logged_user'];
$unanswered = $logged_user->unanswered_invites + $logged_user->unanswered_requests;
?>
<head>

<script type="text/javascript" src="custombg/js/custombg-loader.js">
    
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        document.write('<style type="text/css">.navbar-font {background-color: ' + getCookie("NavbarColor") + ';}<\/style>');
    
    </script>
    
<style>
/* The Modal (background) */
.customtheme {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    overflow-y: hidden;
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.customtheme-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.selected{ 
   box-shadow:0px 12px 22px 1px #333;
}
</style>

</head>
<body>
<!-- Nav Bar -->
<div id="options-window" class="fg-creamy bg-lightgrey"></div>
    <nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
        <div class = "container-fluid">
            <div class = "navbar-header" style = "margin-left: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class = "navbar-brand" href = "<?php echo base_url('home') ?>"><img id = "nav-logo" src = "<?php echo base_url('images/logo/mukhlatlogo on the sideb.png'); ?>"/></a>
            </div>
            <div class = "collapse navbar-collapse" id = "nav-collapse">
                <ul class = "nav navbar-nav">
                    <li><a href="<?php echo base_url('home') ?>"><strong>Home</strong></a></li>
                    <li><a href="<?php echo base_url('topic') ?>"><strong>Topics</strong></a></li>
                </ul>
                <div class = "search-div nav-right-end">
                    <form action = "<?php echo base_url('search'); ?>" class="navbar-form navbar-left" role = "search" method = "GET">
                        <div class="input-group">
                            <input required type="text" name = "search-key" class="form-control" placeholder="Search">
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
                                <img class = "img-rounded nav-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>"/> 
                                <?php echo $logged_user->first_name . " " . $logged_user->last_name; ?>
                                <?php if ((int) $logged_user->unread_notifs + $unanswered > 0): ?>
                                    <span id = "notif-label" class = "label label-info label-badge"><?php echo $logged_user->unread_notifs + $unanswered ?></span>
                                <?php endif; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('user/profile/' . $logged_user->user_id); ?>"><i class = "fa fa-user"></i> My Profile</a></li>
                                <li><a href="#invites-modal" data-toggle = "modal">
                                        <i class = "fa fa-users"></i> Invites 
                                        <?php if ((int) $unanswered > 0): ?>
                                            <span class = "badge"><?php echo $unanswered ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <li><a id = "notif-btn" href="#notif-modal" data-toggle = "modal" <?php echo (int) $logged_user->unread_notifs > 0 ? "data-value = \"" . $logged_user->unread_notifs . "\"" : "" ?>>
                                        <i class = "glyphicon glyphicon-exclamation-sign"></i> Notifications 
                                        <?php if ((int) $logged_user->unread_notifs > 0): ?>
                                            <span id = "notif-badge" class = "badge"><?php echo $logged_user->unread_notifs ?></span>
                                        <?php endif; ?>
                                    </a>
                                    <li><a id="customthemebtn" style="cursor: pointer;">Customize Theme</a></li>
                                </li>
                                <li><a href="<?php echo base_url('signin/logout'); ?>"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

<!-- Nav Bar Script -->
<script type="text/javascript" src="<?php echo base_url("/js/nav_bar.js"); ?>"></script>

<!-- End Nav Bar -->
<div id="mycustomthemeModal" class="customtheme">

  <!-- Modal content -->
  <div class="customtheme-content">
      <span class="close1">&times;</span><table><tr>
              <td><div class="blocks" onClick="changeBGColor('linear-gradient(to top, #f96868, #ffe3e3);', 'green','#d13030');">Peach</div></td>
              <td><div id="watermelon" class="blocks" onClick="changeBGColor('#f96868', 'green','#d13030');">Watermelon</div></td>
    </tr></table>
  <input type="button" value="Refresh Page" onClick="window.location.reload()">

  </div>

</div>
<script>
   $('.blocks').click(function(){
   $('.selected').removeClass('selected'); // removes the previous selected class
   $(this).addClass('selected'); // adds the class to the clicked image
});
    
                    function changeBGColor(value, value2, value3)
                    {
                        //var d = new Date();
                        //d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
                        //var expires = "expires="+d.toUTCString();
                        document.cookie = "backgroundColor=" + value + ";" + ";path=/";   
                        document.cookie = "NavbarColor=" + value2 + ";" + ";path=/"; 
                        document.cookie = "ButtonColor=" + value3 + ";" + ";path=/"; 
                        
                    }
</script>

<script>
// Get the modal
var modal = document.getElementById('mycustomthemeModal');

// Get the button that opens the modal
var btn = document.getElementById("customthemebtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php include(APPPATH . 'views/modals/notifications_modal.php'); ?>
<?php include(APPPATH . 'views/modals/invites_modal.php'); ?>