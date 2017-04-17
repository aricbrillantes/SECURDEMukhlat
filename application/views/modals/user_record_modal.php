<!-- User Record Modal -->
<div id = "record-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-heading text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"style = "display: inline-block;">Record of <?php echo $user->first_name . " " . $user->last_name ?></h4>
            </div>
            <div class="modal-body text-center">
                <div class = "row">
                    <img src = "<?php echo $user->profile_url ? base_url($user->profile_url) : base_url("images/default.jpg"); ?>" class = "img-circle" width = "100px" height = "100px" />
                    <h5 class = "text-info no-margin"><strong><?php echo $user->first_name . " " . $user->last_name ?></strong></h5>
                    <p class = "text-muted"><i><?php echo $user->email; ?></i></p>
                </div>
                <div class = "row">
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->topic_count ?></strong></h4>
                        <p>Topics Created</p>
                    </div>
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->followed_topic_count ?></strong></h4>
                        <p>Topics Followed</p>
                    </div>
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->moderated_topic_count ?></strong></h4>
                        <p>Topics Moderated</p>
                    </div>
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->post_count ?></strong></h4>
                        <p>Posts</p>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->reply_count ?></strong></h4>
                        <p>Replies</p>
                    </div>
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->upvote_count ?></strong></h4>
                        <p>Upvotes Given</p>
                    </div>
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->downvote_count ?></strong></h4>
                        <p>Downvotes Given</p>
                    </div>
                    <div class = "col-sm-3">
                        <h4 class = "text-info"><strong><?php echo $record->points ?></strong></h4>
                        <p>Vote Points</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>