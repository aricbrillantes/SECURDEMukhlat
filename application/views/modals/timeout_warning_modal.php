<?php $logged_user = $_SESSION['logged_user']; ?>
<!-- Notification Modal -->
<head>

<style>
.selected{ 
   box-shadow:0px 0px 0px 5px #000;
}

</style>

</head>

<div id="timeoutpopup" class="modal fade" role="dialog">
    <canvas style="position:fixed;" id="canvas5"></canvas>
    <div class="modal-dialog">
        <!-- Notification Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading modalbg">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><strong><i class="glyphicon glyphicon-time"></i> Time to take a break</strong></h4>
            </div>
            <div class="modal-body">
                <div class = "row"><center>
                    <span style="font-size: 32px">yo, <?php echo $logged_user->first_name; ?>.<br> timeout by 8pm. </span>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
