<?php
$topic = $_SESSION['current_topic'];
?>
<!-- Create Post Modal -->
<div id="create-post-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Create Topic Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Post to <?php echo $topic->topic_name; ?></strong></h4>
            </div>
            <form enctype = "multipart/form-data" action = "<?php echo base_url('topic/post'); ?>" id = "create-post-form" method = "POST">
                <div class="modal-body">
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
                        <!--IMAGE-->
                        <label class="btn btn-primary">
                            <input accept = "image/*" type="file" name = "post_image" style = "display: none;">
                            <i class = "fa fa-file-image-o"></i>
                        </label>

                        <!--AUDIO-->
                        <label class="btn btn-primary">
                            <input accept = "audio/*" type="file" name = "post_audio" style = "display: none;">
                            <i class = "fa fa-file-audio-o"></i>
                        </label>

                        <!--VIDEO-->
                        <label class="btn btn-primary">
                            <input accept = "video/*" type="file" name = "post_video" style = "display: none;">
                            <i class = "fa fa-file-video-o"></i>
                        </label>

                        <!--FILE-->
                        <label class="btn btn-primary">
                            <input type="file" name = "post_file" style = "display: none;">
                            <i class = "fa fa-file"></i>
                        </label>
                    </div>
                </div>
                <div class = "modal-footer" style = "padding: 5px; border-top: none; padding-bottom: 10px; padding-right: 10px;">
                    <a id = "create-post-btn" class ="btn btn-primary" data-toggle = "modal">Post</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="post-confirmation-modal" tabindex="-1" class="modal fade" role="dialog" style = "margin-top: 50px; margin-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Publish post to <?php echo $topic->topic_name; ?></strong></h4>
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