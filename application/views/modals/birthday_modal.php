<?php $logged_user = $_SESSION['logged_user']; ?>
<!-- Notification Modal -->
<head>

<style>
.selected{ 
   box-shadow:0px 0px 0px 5px #000;
}

</style>

</head>

<div id="birthdaypopup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Notification Modal Content-->
        <div class="modal-content" style="background-image: url(<?php echo base_url('images/galaxy.jpg'); ?>)">
            <div class="modal-header modal-heading" style="background-image: url(<?php echo base_url('images/galaxy.jpg'); ?>)">
                <button type="button" class="close close12" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><strong>Happy Fucking Birthday!</strong></h4>
            </div>
            <div class="modal-body">
                <div class = "row">
                    <span style="color:white;">Go, go, go, go go, go, go, <?php echo $logged_user->first_name; ?><br> It's your birthday <br>We gon' party like it's yo birthday <br>We gon' sip Bacardi like it's your birthday <br>And you know we don't give a fuck cause its your birthday!</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>