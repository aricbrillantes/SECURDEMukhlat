<?php
    $topic = $_SESSION['current_topic'];
?>
<!-- Topic Modal -->
<div id="topic-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Topic Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><?php echo $topic->topic_name ?></h4>
            </div>
            <div class="modal-body">
                <p>
                    <?php echo $topic->topic_description ?>
                </p>
                <p>
                    Created by Juan Dela Cruz on Jan 2, 2017
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>