<!-- Create Post Modal -->
<div id="edit-post-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Create Topic Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Edit your post in <?php echo "topic name" ?></strong></h4>
            </div>
            <form action = "<?php echo base_url('topic/edit_post'); ?>" id = "edit-post-form" method = "POST">
                <div class="col-md-12 modal-body">
                    <div class = "col-md-6">
                        <div class="form-group"><!-- check if title is already taken -->
                            <label for = "title">Enter a title for your post:</label>
                            <input type="text" required class="form-control" name = "post_title" id = "post-title" placeholder = "Title of your Post"/>
                        </div>
                        <div class="form-group"><!-- check if description exceeds n words-->
                            <label for = "content">Enter the content of your post:</label>
                            <textarea class = "form-control" required name = "post_content" id = "post-content" placeholder = "Tell something in your post!"></textarea>
                        </div>
                        <div class = "form-group">
                            Attach files: 
                            <button class = "btn btn-primary"><i class = "fa fa-file-image-o"></i></button>
                            <button class = "btn btn-primary"><i class = "fa fa-file-audio-o"></i></button>
                            <button class = "btn btn-primary"><i class = "fa fa-file-video-o"></i></button>
                            <button class = "btn btn-primary"><i class = "fa fa-file"></i></button>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        attachments:
                    </div>
                </div>
                <div class = "modal-footer" style = "padding: 5px; border-top: none; padding-bottom: 10px; padding-right: 10px;">
                    <a id = "create-post-btn" class ="btn btn-primary" data-toggle = "modal">Save Changes</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="post-edit-confirm" tabindex="-1" class="modal fade" role="dialog" style = "margin-top: 50px; margin-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Save changes to your post in topic?</strong></h4>
            </div>
            <div class="modal-body">
                <button id = "create-post-proceed" type = "submit" class = "btn btn-success">Proceed</button>
                <button class = "btn btn-Danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url("/js/topic.js"); ?>"></script>
<!-- END SCRIPTS -->