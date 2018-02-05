<?php
$logged_user = $_SESSION['logged_user'];
$unanswered = $logged_user->unanswered_invites + $logged_user->unanswered_requests;
?>


<script type="text/javascript">
    
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        document.write('<style type="text/css">.navbar-font {background:' + getCookie("NavbarColor") + ';}\n\
                        .soundbg {display:' + getCookie("soundbg1") + ';}\n\
                        body {background' + getCookie("backgroundColor") + ';background-repeat: no-repeat;background-attachment: fixed;}\n\
                        #crettop {background:' + getCookie("ButtonColor") + ';}<\/style>');
    
    </script>
<head>
    <style>
        svg{
            display: block;
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            position: fixed;
        }

        path{
            stroke-linecap: square;
            stroke: white;
            stroke-width: 0.5px;
        }
    </style>
</head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="/intl/en/chrome/assets/common/js/chrome.min.js"></script>     
    
    <!--Voice Search Script-->
    <script type="text/javascript">
        var final_transcript = '';
        var recognizing = false;

        if ('webkitSpeechRecognition' in window) {

          var recognition = new webkitSpeechRecognition();
          recognition.lang = 'en-US';
          recognition.continuous = true;
          recognition.interimResults = true;

          recognition.onstart = function() {
            recognizing = true;
            document.getElementById("recording").innerText = 'RECORDING';
          };

          recognition.onerror = function(event) {
            console.log(event.error);
          };

          recognition.onend = function() {
            recognizing = false;
            search.value = final_span.innerHTML;
        };

       recognition.onresult = function(event) {
            var interim_transcript = '';
            for (var i = event.resultIndex; i < event.results.length; ++i) {
              if (event.results[i].isFinal) {
                final_transcript += event.results[i][0].transcript;
              } else {
                interim_transcript += event.results[i][0].transcript;
              }
            }
            final_span.innerHTML = linebreak(final_transcript);
            interim_span.innerHTML = linebreak(interim_transcript);
            search.value = linebreak(interim_transcript);
          };
        }

        var two_line = /\n\n/g;
        var one_line = /\n/g;
        function linebreak(s) {
          return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
        }

        function capitalize(s) {
          return s.replace(s.substr(0,1), function(m) { return m.toUpperCase(); });
        }

        function startDictation(event) {
            recognition.lang = languages[select_language.selectedIndex];
            final_transcript = '';
            final_span.innerHTML = '';
            interim_span.innerHTML = '';
            recognition.start();
        }

        function stopDictation(event) {
            recognition.stop();
        }

        function resetDictation(event) {
            recognition.stop();
            recognition.lang = languages[select_language.selectedIndex];
            final_transcript = '';
            final_span.innerHTML = '';
            interim_span.innerHTML = '';
            search.value = '';
        }
        
//        array of languages
        var languages = new Array(
            'en-US',
            'fil-PH',
            'fr-FR',
            'ko-KR'
        );

</script>

<body>
<!-- Nav Bar -->
    <div class="soundbg">
        <svg preserveAspectRatio="none" id="visualizer" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <mask id="mask">
                    <g id="maskGroup">
                  </g>
                </mask>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#ff0a0a;stop-opacity:1" />
                    <stop offset="20%" style="stop-color:#f1ff0a;stop-opacity:1" />
                    <stop offset="90%" style="stop-color:#d923b9;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#050d61;stop-opacity:1" />
                </linearGradient>
            </defs>
            <rect x="0" y="0" width="100%" height="100%" fill="url(#gradient)" mask="url(#mask)"></rect>
        </svg>
        <h1>please allow the use of your microphone</h1>
    </div>

    <nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
        <div class = "container-fluid">
            <div class = "navbar-header" style = "margin-left: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a id ="logom" class = "navbar-brand" href = "<?php echo base_url('home') ?>"><img id = "nav-logo" src = "<?php echo base_url('images/logo/mukhlatlogo on the sideb.png'); ?>"/></a>
            </div>
            <div class = "collapse navbar-collapse" id = "nav-collapse">
                <ul class = "nav navbar-nav">
                    <li><a href="<?php echo base_url('home') ?>"><strong>Home</strong></a></li>
                    <li><a href="<?php echo base_url('topic') ?>"><strong>Topics</strong></a></li>
                </ul>
                <div class = "nav-left-end">
                    <form action = "<?php echo base_url('search'); ?>" class="navbar-left" role = "search" method = "GET" style="width:30%; margin-top:0.555%; margin-left:1%; margin-right:4%;">
                        <div class="input-group">
                            
                            
                            <input required type="text" name = "search-key" class="form-control" placeholder="Search" id="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default search-btn" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                                
                            <!--Voice search buttons-->
                            <div>
                                <a href="#" class="voicesearch" id="voicesearch" onclick="startDictation(event)"><img border="0" id="voicesearchicon" class="voicesearchicon" alt="START" src="images/microphone_start.png" height="50" width="50"></a>
                                <a href="#" class="voicesearch" id="voicesearch" onclick="stopDictation(event)"><img border="0" id="voicesearchicon" class="voicesearchicon" alt="STOP" src="images/microphone_stop.png"height="50" width="50"></a>
                                <a href="#" class="voicesearch" id="voicesearch" onclick="resetDictation(event)"><img border="0" id="voicesearchicon" class="voicesearchicon" alt="RESET" src="images/microphone_reset.png"height="50" width="50"</a>
                            </div>
                                
                            <!--Hidden DIV for voice search-->
                            <div id="results" style="display: none" border="1px">
                                <span id="final_span" class="final"></span>
                                <span id="interim_span" class="interim"></span>
                            </div>
                            <br>
                                
                            <!--language options-->
                            <div class="compact marquee" id="div_language">
                                <select id="select_language">
                                    <option value="0" onclick="resetDictation(event)">English</option>
                                    <option value="1" onclick="resetDictation(event)">Filipino</option>
                                    <option value="2" onclick="resetDictation(event)">French</option>
                                    <option value="3" onclick="resetDictation(event)">Korean</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
        <div style="margin:1%;">
                            <a class="navbaricons" href="<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                                <img class = "img-rounded nav-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>"/> 
                                <?php echo $logged_user->first_name . " " . $logged_user->last_name; ?></a>

                                <a  class="navbaricons" id = "notif-btn" href="#notif-modal" data-toggle = "modal" <?php echo (int) $logged_user->unread_notifs > 0 ? "data-value = \"" . $logged_user->unread_notifs . "\"" : "" ?>>
                                        <i class = "glyphicon glyphicon-exclamation-sign"></i> Notifications 
                                        <?php if ((int) $logged_user->unread_notifs > 0): ?>
                                            <span id = "notif-badge" class = "badge"><?php echo $logged_user->unread_notifs ?></span>
                                        <?php endif; ?>
                                </a>
                                <a  class="navbaricons" href="#customize-theme" data-toggle = "modal">
                                        <i class = "fa fa-users"></i> Customize Theme
                                    </a>
                                <a  class="navbaricons" href="<?php echo base_url('signin/logout'); ?>"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav>
</body>

<!-- Nav Bar Script -->
<script type="text/javascript" src="<?php echo base_url("/js/nav_bar.js"); ?>"></script>
<script>
    window.onload = function () {
    "use strict";
    var paths = document.getElementsByTagName('path');
    var visualizer = document.getElementById('visualizer');
    var mask = visualizer.getElementById('mask');
    var h = document.getElementsByTagName('h1')[0];
    var path;
    var report = 0;
    
    var soundAllowed = function (stream) {
        //Audio stops listening in FF without // window.persistAudioStream = stream;
        //https://bugzilla.mozilla.org/show_bug.cgi?id=965483
        //https://support.mozilla.org/en-US/questions/984179
        window.persistAudioStream = stream;
        h.innerHTML = "Thanks";
        h.setAttribute('style', 'opacity: 0;');
        var audioContent = new AudioContext();
        var audioStream = audioContent.createMediaStreamSource( stream );
        var analyser = audioContent.createAnalyser();
        audioStream.connect(analyser);
        analyser.fftSize = 1024;

        var frequencyArray = new Uint8Array(analyser.frequencyBinCount);
        visualizer.setAttribute('viewBox', '0 0 255 255');
      
				//Through the frequencyArray has a length longer than 255, there seems to be no
        //significant data after this point. Not worth visualizing.
        for (var i = 0 ; i < 255; i++) {
            path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            path.setAttribute('stroke-dasharray', '4,1');
            mask.appendChild(path);
        }
        var doDraw = function () {
            requestAnimationFrame(doDraw);
            analyser.getByteFrequencyData(frequencyArray);
          	var adjustedLength;
            for (var i = 0 ; i < 255; i++) {
              	adjustedLength = Math.floor(frequencyArray[i]) - (Math.floor(frequencyArray[i]) % 5);
                paths[i].setAttribute('d', 'M '+ (i) +',255 l 0,-' + adjustedLength);
            }
        };
        doDraw();
    };

    var soundNotAllowed = function (error) {
        h.innerHTML = "You must allow your microphone.";
        console.log(error);
    };

    /*window.navigator = window.navigator || {};
    /*navigator.getUserMedia =  navigator.getUserMedia       ||
                              navigator.webkitGetUserMedia ||
                              navigator.mozGetUserMedia    ||
                              null;*/
    navigator.getUserMedia({audio:true}, soundAllowed, soundNotAllowed);

};
</script>
    
<!-- End Nav Bar -->

</div>

<?php include(APPPATH . 'views/modals/notifications_modal.php'); ?>
<?php include(APPPATH . 'views/modals/invites_modal.php'); ?>