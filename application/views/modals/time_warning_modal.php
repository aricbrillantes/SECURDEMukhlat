<?php $logged_user = $_SESSION['logged_user']; ?>
<!--Usage Time Warning Modal -->
<head>

<style>

</style>

</head>

<div id="timepopup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Usage Time Warning Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading modalbg">
                <h4 class="modal-title text-center"><strong><i class="glyphicon glyphicon-time"></i> Time to take a break</strong></h4>
            </div>
            <div class="modal-body">
                <div class = "row"><center>
                        <span style="font-size: 32px">It might be time to take a break, <?php echo $logged_user->first_name; ?>.<br> You have been on this site for a long time. </span><br><br>
                    <button type="button" class="btn buttonsbgcolor textoutliner" data-dismiss="modal" style="color: white;font-size: 24px;">Okay! I understand!</button>
                    
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
