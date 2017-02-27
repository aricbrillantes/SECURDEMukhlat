<?php
    $topic = $_SESSION['current_topic'];
?>
<!-- Create Post Modal -->
<div id="create-reply-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Create reply Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 id = "reply-user" class="modal-title"></h4>
            </div>
            <form id = "create-reply-form" action = "<?php echo base_url('topic/reply');?>" method = "POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for = "title">Enter a title for your reply (Optional):</label>
                        <input type="text" class="form-control" name = "reply_title" id = "reply-title" placeholder = "Title of your post"/>
                    </div>
                    <div class="form-group"><!-- check if description exceeds n words-->
                        <label for = "content">Enter the content of your reply:</label>
                        <textarea class = "form-control" required name = "reply_content" id = "reply-content" placeholder = "Tell something in your post!"></textarea>
                    </div>
                    <div class = "form-group">
                        Attach files: 
                        <button class = "btn btn-primary"><i class = "fa fa-file-image-o"></i></button>
                        <button class = "btn btn-primary"><i class = "fa fa-file-audio-o"></i></button>
                        <button class = "btn btn-primary"><i class = "fa fa-file-video-o"></i></button>
                        <button class = "btn btn-primary"><i class = "fa fa-file"></i></button>
                    </div>
                </div>
                <div class = "modal-footer" style = "padding: 5px; border-top: none; padding-bottom: 10px; padding-right: 10px;">
                    <a id = "create-reply-btn" class ="btn btn-primary" data-toggle = "modal">Reply</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="reply-confirmation-modal" tabindex="-1" class="modal fade" role="dialog" style = "margin-top: 50px; margin-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 id = "send-reply-user" class="modal-title"><strong>Send reply to <?php echo $post->user->first_name;?></strong></h4>
            </div>
            <div class="modal-body">
                <button id = "create-reply-proceed" type = "submit" class = "btn btn-success">Proceed</button>
                <button class = "btn btn-Danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url("/js/topic.js"); ?>"></script>
<!-- END SCRIPTS -->