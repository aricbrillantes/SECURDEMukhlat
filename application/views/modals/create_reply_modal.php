<?php
    $topic = $_SESSION['current_topic'];
?>

<!-- Create Post Modal -->
<div id="create-reply-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Create reply Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading  modalbg">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 id = "reply-user" class="modal-title"></h4>
            </div>
            <form enctype = "multipart/form-data" id = "create-reply-form" action = "<?php echo base_url('topic/reply');?>" method = "POST">
                <div class="modal-body">
                    <div class="form-group"><!-- check if description exceeds n words-->
                        <label for = "content">Make the content of your reply:</label>

                        <textarea class = "form-control" style="height: 100px;" maxlength = "1000" required name = "reply_content" id = "reply-content" placeholder = "Tell something in your post!"></textarea>

                        <p id="charsRemaining5">Characters Left: 1000</p>
                        <div class="charLimitMessage" id="charLimitMessage5"><center>Oops! You've used up all the letters and numbers for your post!</center></div>
                    </div>
                    <div class="profanityWarning" id="profanityWarning"><center>Hey there! It looks like you used a bad word!</center></div>
                    <div id = "attachment-buttons" class = "form-group">
                        Attach a file:
                        <!--IMAGE-->
                        <label id = "img-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-img" accept = "image/*" type="file" name = "reply_image" style = "display: none;">
                            <p id = "image-text" class = "attach-btn-text"><i class = "fa fa-file-image-o"></i> Add Image</p>
                        </label>

                        <!--AUDIO-->
                        <label id = "audio-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-audio" accept = "audio/*" type="file" name = "reply_audio" style = "display: none;">
                            <p id = "audio-text" class = "attach-btn-text"><i class = "fa fa-file-audio-o"></i> Add Audio</p>
                        </label>

                        <!--VIDEO-->
                        <label id = "video-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-video" accept = "video/*" type="file" name = "reply_video" style = "display: none;">
                            <p id = "video-text" class = "attach-btn-text"><i class = "fa fa-file-video-o"></i> Add Video</p>
                        </label>

                        <!--FILE-->
                        <label id = "file-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-file" type="file" name = "reply_file" style = "display: none;">
                            <p id = "file-text" class = "attach-btn-text"><i class = "fa fa-file-o"></i> Add File</p>
                        </label>
                    </div>
                    <div id = "attachment-preview" class = "content-container">
                        <h5 id = "attachment-message" class = "text-warning text-center">No attachment yet.</h5>
                    </div>
                </div>
                <div class = "modal-footer" style = "padding: 5px; border-top: none; padding-bottom: 10px; padding-right: 10px;">
                    <a id = "create-reply-btn" class ="btn btn-primary buttonsbgcolor" data-toggle = "modal">Reply</a>
                </div>
            </form>
        </div>
    </div>
</div>


    <!--Profanity Filter and character limit counter-->
<script type="text/javascript">
    var warningCount=0, count=0;
    var x = document.getElementById("profanityWarning");
    var charCount1=100, charCount2=1000;
    
    $('.form-control').keyup(function(event) 
    {
        document.getElementById('charsRemaining5').innerHTML='Characters Left: '+(charCount2-document.getElementById('reply-content').value.length);

        document.getElementById('reply-content').value=document.getElementById('reply-content').value.replace("❤","❤");
        document.getElementById('reply-content').value=document.getElementById('reply-content').value.replace("😞","☹");
        document.getElementById('reply-content').value=document.getElementById('reply-content').value.replace("🙂","🙂");
        document.getElementById('reply-content').value=document.getElementById('reply-content').value.replace("😀","😀");
        document.getElementById('reply-content').value=document.getElementById('reply-content').value.replace("XD","🤣");
        document.getElementById('reply-content').value=document.getElementById('reply-content').value.replace("😐","😐");

            if(
                document.getElementById('reply-content').value.includes("fuck")||
                document.getElementById('reply-content').value.includes("shit")
            )
            {  
                x.style.display = "block";
                document.getElementById('create-reply-btn').style.background="red";
                document.getElementById('create-reply-btn').innerHTML="You should remove bad words from your reply!";
                document.getElementById('create-reply-btn').style.pointerEvents="none";
            }  

            else
            {
                x.style.display = "none";
                document.getElementById('create-reply-btn').style.background=getCookie("ButtonColor");
                document.getElementById('create-reply-btn').innerHTML="Reply";
                document.getElementById('create-reply-btn').style.pointerEvents="auto";
            }


            if(document.getElementById('reply-content').value.length>=1000)
            {  
                document.getElementById('charLimitMessage5').style.display = "block";
            }  
                
            else
                document.getElementById('charLimitMessage5').style.display = "none";

    });  
</script>