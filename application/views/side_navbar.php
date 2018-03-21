<?php
$logged_user = $_SESSION['logged_user'];
include(APPPATH . 'views/modals/camera_modal.php');
include(APPPATH . 'views/modals/recorder_modal.php');
?>
    
<!-- Sidebar -->
<div style = "margin-left: 3.5%;float: right;right: 0;position: fixed;top:40%;">
    <div class = "home-sidebar content-container" style="background:darkgray;">
        <!--Header-->

        <div onclick="$('#camerapopup').modal('show');" class="camerapic"><i class="glyphicon glyphicon-camera" style="font-size: 38px;"></i><span style="font-size: 22px;" class="tooltiptext">Take a photo</span></div>
        <!--<center><div onclick="$('#recorderpopup').modal('show');" class="audiorec"><i class="fa fa-microphone" style="font-size: 38px;"></i><span style="font-size: 22px;" class="tooltiptext">Record your voice</span></div></center>-->
    </div>
</div>

<!-- SCRIPTS -->

<!-- END SCRIPTS -->
<!-- End Sidebar -->