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
                <p class = "wrap" align = "center">
                    <?php echo $topic->topic_description ?>
                </p>
                <p class = "text-muted" align = "center">
                    <small><i>Created by <a class = "btn btn-link btn-xs no-padding no-margin" href = "<?php echo base_url('user/profile/' . $topic->user->user_id);?>"><?php echo $topic->user->first_name . " " . $topic->user->last_name; ?></a> on <?php echo date("M-d-y", strtotime($topic->date_created)); ?></i></small>
                </p>
            </div>
        </div>
    </div>
</div>