<?php
$topic = $_SESSION['current_topic'];
?>
    <!--Voice Search Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Create Post Modal -->
<div id="create-post-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Create Topic Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading modalbg">
                <button type="button" class="close" style = "padding: 5px;" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Post to <?php echo utf8_decode($topic->topic_name); ?></strong></h4>
            </div>
            <form enctype = "multipart/form-data" action = "<?php echo base_url('topic/post'); ?>" id = "create-post-form" method = "POST">
                <div class="modal-body">
                    <div style="display: none">
                    <div class="form-group">
                        <label for = "title">Make a title for your post:</label>
                        
                        <input type="text" style="height: 50px;" maxlength = "100"  required class="form-control" name = "post_title" id = "post-title" placeholder = "Title of your Post" value=" "/>
                        <p id="charsRemaining3">Characters Left: 100</p>
                        <div class="charLimitMessage" id="charLimitMessage3"><center>Oops! You've used up all the letters and numbers for your title!</center></div>
                        
                    </div>
                    </div>
                    <div id="results" style="display: none" border="1px">
                        <span id="final_span2" class="final"></span>
                        <span id="interim_span2" class="interim"></span>
                    </div>
                    
                    <div class="form-group"><!-- check if description exceeds n words-->
                        <label for = "content">Make the content of your post:</label>
                        <textarea class = "form-control" style="height: 100px;" maxlength = "1000" required name = "post_content" id = "post-content" placeholder = "Tell something in your post!" ></textarea>
                        <p id="charsRemaining4">Characters Left: 1000</p>
                        <div class="charLimitMessage" id="charLimitMessage4"><center>Oops! You've used up all the letters and numbers for your post!</center></div>
                    </div>
                    
                   <div class="profanityWarning" id="profanityWarning"><center>Hey there! It looks like you used a bad word!</center></div>

                         
                         <br><br>
                         
                    <div id = "attachment-buttons" class = "form-group">
                        Attach a file:
                        <!--IMAGE-->
                        <label id = "img-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-img" accept = "image/*" type="file" name = "post_image" style = "display: none;">
                            <p id = "image-text" class = "attach-btn-text"><i class = "fa fa-file-image-o"></i> Add Image</p>
                        </label>

                        <!--AUDIO-->
                        <label id = "audio-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-audio" accept = "audio/*" type="file" name = "post_audio" style = "display: none;">
                            <p id = "audio-text" class = "attach-btn-text"><i class = "fa fa-file-audio-o"></i> Add Audio</p>
                        </label>

                        <!--VIDEO-->
                        <label id = "video-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-video" accept = "video/*" type="file" name = "post_video" style = "display: none;">
                            <p id = "video-text" class = "attach-btn-text"><i class = "fa fa-file-video-o"></i> Add Video</p>
                        </label>

                        <!--FILE-->
                        <label id = "file-label" class="btn btn-primary buttonsbgcolor">
                            <input id = "attach-file" type="file" name = "post_file" style = "display: none;">
                            <p id = "file-text" class = "attach-btn-text"><i class = "fa fa-file-o"></i> Add File</p>
                        </label>

                    </div>
                    <div id = "attachment-preview" class = "content-container">
                        <h5 id = "attachment-message" class = "text-warning text-center">No attachment yet.</h5>
                    </div>
                </div>
                <div class = "modal-footer" style = "padding: 5px; border-top: none; padding-bottom: 10px; padding-right: 10px;">
                    <a id = "create-post-btn" class ="btn btn-primary buttonsbgcolor" data-toggle = "modal">Post</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!--PROFANITY FILTER and character limit counter-->

<script type="text/javascript">
    var warningCount=0, count=0;
    var x = document.getElementById("profanityWarning");
    var charCount1=100, charCount2=1000;
    
    $('.modal-body').keyup(function(event) 
    {
        
        document.getElementById('charsRemaining4').innerHTML='Characters Left: '+(charCount2-document.getElementById('post-content').value.length);
        
        document.getElementById('post-content').value=document.getElementById('post-content').value.replace("❤","❤");
        document.getElementById('post-content').value=document.getElementById('post-content').value.replace("😞","☹");
        document.getElementById('post-content').value=document.getElementById('post-content').value.replace("🙂","🙂");
        document.getElementById('post-content').value=document.getElementById('post-content').value.replace("😀","😀");
        document.getElementById('post-content').value=document.getElementById('post-content').value.replace("XD","🤣");
        document.getElementById('post-content').value=document.getElementById('post-content').value.replace("😐","😐");

            if(
                document.getElementById('post-content').value.includes("fuck")||
                document.getElementById('post-content').value.includes("shit")
            )
            {  
                x.style.display = "block";
                document.getElementById('create-post-btn').style.background="red";
                document.getElementById('create-post-btn').innerHTML="You should remove bad words from your post!";
                document.getElementById('create-post-btn').style.pointerEvents="none";
            }  

            else
            {
                x.style.display = "none";
                document.getElementById('create-post-btn').style.background=getCookie("ButtonColor");
                document.getElementById('create-post-btn').innerHTML="Post";
                document.getElementById('create-post-btn').style.pointerEvents="auto";
            }

            if(document.getElementById('post-content').value.length>=1000)
            {  
                document.getElementById('charLimitMessage4').style.display = "block";
            }  
                
            else
                document.getElementById('charLimitMessage4').style.display = "none";

    });  
</script>
    
<script type="text/javascript" src="<?php echo base_url("/js/topic.js"); ?>"></script>
<!-- END SCRIPTS -->