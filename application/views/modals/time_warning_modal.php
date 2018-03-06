<?php $logged_user = $_SESSION['logged_user']; ?>
<!-- Notification Modal -->
<head>

<style>
.selected{ 
   box-shadow:0px 0px 0px 5px #000;
}

</style>

</head>

<div id="timepopup" class="modal fade" role="dialog">
    <canvas style="position:fixed;" id="canvas5"></canvas>
    <div class="modal-dialog">
        <!-- Notification Modal Content-->
        <div class="modal-content" style="background-image: url(<?php echo base_url('images/galaxy.jpg'); ?>)">
            <div class="modal-header modal-heading" style="background-image: url(<?php echo base_url('images/galaxy.jpg'); ?>)">
<<<<<<< HEAD
                <button type="button" class="close" data-dismiss="modal">&times;</button>
=======
                <button type="button" class="close close12" data-dismiss="modal">&times;</button>
>>>>>>> 4c35d4c29132c99779e19640dc97af481b6057d5
                <h4 class="modal-title text-center"><strong>timeout</strong></h4>
            </div>
            <div class="modal-body">
                <div class = "row">
                    <span style="color:white;">yo <?php echo $logged_user->first_name; ?><br> you been on this site for a little too long </span>
                </div>
            </div>
        </div>
    </div>
</div>
