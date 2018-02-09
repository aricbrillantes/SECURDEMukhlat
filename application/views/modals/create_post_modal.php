<?php
$topic = $_SESSION['current_topic'];
?>
<!--<script src="/intl/en/chrome/assets/common/js/chrome.min.js"></script>-->     
    <!--Voice Search Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>-->
    <script type="text/javascript">
        var recognition2 = new webkitSpeechRecognition();
        recognition2.lang = 'fil-PH';
        recognition2.continuous = true;
        recognition2.interimResults = true;

        recognition2.onstart = function() {
            recognizing = true;
//            document.getElementById("recording").innerText = 'RECORDING';
          };

          recognition2.onerror = function(event) {
            console.log(event.error);
          };

          recognition2.onend = function() {
            recognizing = false;
            document.getElementById("post-title").value=final_span2.innerHTML;
        };
//
        recognition2.onresult = function(event) {
            var interim_transcript = '';
            for (var i = event.resultIndex; i < event.results.length; ++i) {
              if (event.results[i].isFinal) {
                final_transcript += event.results[i][0].transcript;
              } else {
                  
                if(interim_span2.innerHTML.includes("stop"))
                {  
                    recognition2.stop();
//                    document.getElementById("post-title").value=final_span2.innerHTML;
                    return;
                    
                }  
                
                if(interim_span2.innerHTML.includes("go to topics"))
                {  
                    location.href = 'http://localhost/MukhlatBeta/topic';
                }  
                interim_transcript += event.results[i][0].transcript;
              }
            }
            final_span2.innerHTML = linebreak(final_transcript);
            interim_span2.innerHTML = linebreak(interim_transcript);
            document.getElementById("post-title").value=interim_span2.innerHTML;
            
            
          };

        function startDictation2(event) {
            recognition2.lang = 'en-US';
            final_transcript = '';
            final_span2.innerHTML = '';
            interim_span2.innerHTML = '';
            recognition2.start();
        }
                                
    </script>
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
                    <div class="form-group"><!-- check if title is already taken -->
                        <label for = "title">Enter a title for your post:</label>
                        <input type="text" maxlength = "100" required class="form-control" name = "post_title" id = "post-title" placeholder = "Title of your Post"/>
                    <span id="start_button" onclick="startDictation2(event)" style="display: inline-block;"><img border="0" alt="Start" id="start_img" src="https://www.google.com/intl/en/chrome/assets/common/images/content/mic.gif"></span>
                            <!--<a href="#" class="voicesearch" id="voicesearch" onclick="stopDictation2(event)"><img border="0" id="voicesearchicon" class="voicesearchicon" alt="START" src="images/microphone_start.png" height="50" width="50"></a>-->
                            <!--<button onclick="startDictation2(event)">Try it</button>-->
                    </div>
                    
                    <div id="results" style="display: none" border="1px">
                        <span id="final_span2" class="final"></span>
                        <span id="interim_span2" class="interim"></span>
                    </div>
                    <!--<div id="profanityWarning"></div>-->
                    
                    <div class="form-group"><!-- check if description exceeds n words-->
                        <label for = "content">Enter the content of your post:</label>
                        <textarea class = "form-control" maxlength = "16000" required name = "post_content" id = "post-content" placeholder = "Tell something in your post!"></textarea>
                    </div>
                    
                    
                    <div data-toggle="collapse" data-target="#camera" class="dropbtn" style = "background: #D7eadd; cursor: pointer;"><center><div>Take Picture</div>
                            <div id="camera" class="collapse">
                                <div class="camera">
                                <video id="video" style="width:95%;height:90%;"></video>
                                </div>
                                <canvas id="canvas"></canvas>
                                <div class="output"></div>
                                <div id = "img-label" class="btn btn-primary">
                                    <input id = "attach-img" accept = "image/*" type="file" name = "post_image" style = "display: none;">
                                    <p id="startbutton" class = "attach-btn-text"><i class = "fa fa-file-image-o" onclick="takepicture();"></i> Take Photo</p>
                                </div>
                            </div></center>
                        </div>
                         
                         <br><br>
                         
                    <div id = "attachment-buttons" class = "form-group">
                        Attach a file:
                        <!--IMAGE-->
                        <label id = "img-label" class="btn btn-primary">
                            <input id = "attach-img" accept = "image/*" type="file" name = "post_image" style = "display: none;">
                            <p id = "image-text" class = "attach-btn-text"><i class = "fa fa-file-image-o"></i> Add Image</p>
                        </label>

                        <!--AUDIO-->
                        <label id = "audio-label" class="btn btn-primary">
                            <input id = "attach-audio" accept = "audio/*" type="file" name = "post_audio" style = "display: none;">
                            <p id = "audio-text" class = "attach-btn-text"><i class = "fa fa-file-audio-o"></i> Add Audio</p>
                        </label>

                        <!--VIDEO-->
                        <label id = "video-label" class="btn btn-primary">
                            <input id = "attach-video" accept = "video/*" type="file" name = "post_video" style = "display: none;">
                            <p id = "video-text" class = "attach-btn-text"><i class = "fa fa-file-video-o"></i> Add Video</p>
                        </label>

                        <!--FILE-->
                        <label id = "file-label" class="btn btn-primary">
                            <input id = "attach-file" type="file" name = "post_file" style = "display: none;">
                            <p id = "file-text" class = "attach-btn-text"><i class = "fa fa-file-o"></i> Add File</p>
                        </label>

                    </div>
                    <div id = "attachment-preview" class = "content-container">
                        <h5 id = "attachment-message" class = "text-warning text-center">No attachment yet.</h5>
                    </div>
                </div>
                <div class = "modal-footer" style = "padding: 5px; border-top: none; padding-bottom: 10px; padding-right: 10px;">
                    <a id = "create-post-btn" class ="btn btn-primary" data-toggle = "modal">Post</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!--PROFANITY FILTER-->
 <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
                        <script type="text/javascript">
                        $('.form-control').keydown(function(event) {
                            if(event.keyCode!==18||event.keyCode!==16)
                            {
                                if(event.keyCode>=65 && event.keyCode<=90 || event.keyCode===32)
                                {
                                  if(
                                        event.target.value.includes("fuck ")||
                                        event.target.value.includes(" fuck")||
                                        event.target.value.includes(" fuck ")||
                                        event.target.value.includes(" shit ")||
                                        event.target.value.includes("cunt")||
                                        event.target.value.includes("ass ")||
                                        event.target.value.includes(" ass")||
                                        event.target.value.includes(" ass ")||
                                        event.target.value.includes("dick")||
                                        event.target.value.includes("semen")||             
                                        event.target.value.includes("nigger")||
                                        event.target.value.includes("logan paul")||
                                        event.target.value.includes("jake paul")
                                    )
                                    {  
                                        
        //                                document.getElementById("profanityWarning").innerText = 'NO SWEARING!';
                                        responsiveVoice.speak("No swearing on my bloody server","UK English Male",{rate: 1, pitch: 1.5});
//                                        alert('No swearing on my bloody server');
                                    }  
                                }  
                            }
                                
                             
                            else
                                document.getElementById("profanityWarning").innerText = '';
                        });  
                    </script>
                    
                    <!--camera-->
                    
<script>(function() {
  // The width and height of the captured photo. We will set the
  // width to the value defined here, but the height will be
  // calculated based on the aspect ratio of the input stream.

  var width = 320;    // We will scale the photo width to this
  var height = 0;     // This will be computed based on the input stream

  // |streaming| indicates whether or not we're currently streaming
  // video from the camera. Obviously, we start at false.

  var streaming = false;

  // The various HTML elements we need to configure or control. These
  // will be set by the startup() function.

  var video = null;
  var canvas = null;
  var photo = null;
  var startbutton = null;
  

  function startup() {
    video = document.getElementById('video');
    canvas = document.getElementById('canvas');
    photo = document.getElementById('photo');
    startbutton = document.getElementById('startbutton');

    navigator.getMedia = ( navigator.getUserMedia ||
                           navigator.webkitGetUserMedia ||
                           navigator.mozGetUserMedia ||
                           navigator.msGetUserMedia);

    navigator.getMedia(
      {
        video: true,
        audio: false
      },
      function(stream) {
        if (navigator.mozGetUserMedia) {
          video.mozSrcObject = stream;
        } else {
          var vendorURL = window.URL || window.webkitURL;
          video.src = vendorURL.createObjectURL(stream);
        }
        video.play();
      },
      function(err) {
        console.log("An error occured! " + err);
      }
    );
    
    video.addEventListener('canplay', function(ev){
      if (!streaming) {
        height = video.videoHeight / (video.videoWidth/width);
      
        // Firefox currently has a bug where the height can't be read from
        // the video, so we will make assumptions if this happens.
      
        if (isNaN(height)) {
          height = width / (4/3);
        }
      
        video.setAttribute('width', width);
        video.setAttribute('height', height);
        canvas.setAttribute('width', width);
        canvas.setAttribute('height', height);
        streaming = true;
      }
    }, false);

    startbutton.addEventListener('click', function(ev){
      takepicture();
      ev.preventDefault();
    }, false);
    
    clearphoto();
  }

  // Fill the photo with an indication that none has been
  // captured.

  function clearphoto() {
    var context = canvas.getContext('2d');
    context.fillStyle = "#AAA";
    context.fillRect(0, 0, canvas.width, canvas.height);

    var data = canvas.toDataURL('image/png');
    
  }
  
  // Capture a photo by fetching the current contents of the video
  // and drawing it into a canvas, then converting that to a PNG
  // format data URL. By drawing it on an offscreen canvas and then
  // drawing that to the screen, we can change its size and/or apply
  // other changes before drawing it.

  function takepicture() {
    var context = canvas.getContext('2d');
    if (width && height) {
      canvas.width = width;
      canvas.height = height;
      context.drawImage(video, 0, 0, width, height);
    
      var data = canvas.toDataURL('image/png');
      
    } else {
      clearphoto();
    }
  }

  // Set up our event listener to run the startup process
  // once loading is complete.
  window.addEventListener('load', startup, false);
})();</script>

<script type="text/javascript" src="<?php echo base_url("/js/topic.js"); ?>"></script>
<!-- END SCRIPTS -->