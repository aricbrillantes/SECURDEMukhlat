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
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    document.write('<style type="text/css">.navbar-font {background:' + getCookie("NavbarColor") + ';}\n\
                    .soundbg {display:' + getCookie("soundbg1") + ';}\n\
                     body {background' + getCookie("backgroundColor") + ';background-repeat: no-repeat;background-attachment: fixed;}\n\
                    .buttonsbgcolor {background:' + getCookie("ButtonColor") + ';}\n\
                    .buttonsbgcolor:hover{background:' + getCookie("ButtonHColor") + ';}\n\
                    .text1color{color:' + getCookie("ButtonColor") + ';}\n\
                    .bar1color{background:' + getCookie("ButtonColor") + ';}\n\
                    .text1color:hover{color:' + getCookie("ButtonHColor") + ';}\n\
                    .buttonsbgcolor:focus{background:' + getCookie("ButtonColor") + ';outline:0;}\n\
                    .buttonsbgcolor:active{background:' + getCookie("ButtonAColor")  + '!important;}\n\
                    .modalbg{background:' + getCookie("NavbarColor") + ';}\n\
                    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background-color: ' + getCookie("NavbarColor") + ';}\n\
                    .snowflakebg{display:' + getCookie("snowflakebg1") + ';}\n\
                    .sparklesbg{display:' + getCookie("sparklebg1") + ';}\n\
                    .navbaricons:hover{background:' + getCookie("ButtonHColor") + ';}\n\
                    .navbarprofileicon:hover{background:' + getCookie("ButtonHColor") + ';}\n\
                    .bubblesbg{display:' + getCookie("bubblesbg1") + ';}\n\
                    .profanityWarning{background-color:' + getCookie("ButtonColor") + ';}\n\
                    .navbaricons .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .navbarprofileicon .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .trail{background:' + getCookie("ButtonAColor") + '!important;}<\/style>');
    
    if(getCookie("sparklebg1")==="block"){
        document.write('<canvas id="world" class="sparklesbg"></canvas>'); 
               
    }
    
    var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
//        alert(hours);

//      night mode script
        if(hours > 19){
            document.write('<style type="text/css">\n\
                html {background' + getCookie("backgroundColor") + ';}\n\
                html {filter:brightness(0.87) sepia(0.25);}<\/style>');
        } 
</script>
<script type="text/javascript" src="https://panzi.github.io/Browser-Ponies/basecfg.js" id="browser-ponies-config"></script>
<script type="text/javascript" src="https://panzi.github.io/Browser-Ponies/browserponies.js" id="browser-ponies-script"></script>
<!--<script type="text/javascript">/* <![CDATA[ */ (function (cfg) {BrowserPonies.setBaseUrl(cfg.baseurl);BrowserPonies.loadConfig(BrowserPoniesBaseConfig);BrowserPonies.loadConfig(cfg);})({"baseurl":"https://panzi.github.io/Browser-Ponies/","fadeDuration":500,"volume":1,"fps":25,"speed":3,"audioEnabled":false,"showFps":false,"showLoadProgress":true,"speakProbability":0.1,"spawn":{"winona":1},"autostart":true}); /* ]]> */</script>-->
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
        
        #world{
            position: fixed;
        }
        
        #peek {
        position: fixed;
        z-index: 99999;
        float: left;
        bottom:-500px;
        right:-500px;
        }
    </style>
<!--        <style>/*******************************
* MODAL AS LEFT/RIGHT SIDEBAR
* Add "left" or "right" in modal parent div, after class="modal".
* Get free snippets on bootpen.com
*******************************/

	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 320px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}

	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}


        
/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}
</style>-->
<div class="snowflakebg">    
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake" style="font-size: 30px">
  ❄
  </div>
  <div class="snowflake" style="font-size: 25px">
  ❅
  </div>
  <div class="snowflake" style="font-size: 31px">
  ❆
  </div>
  <div class="snowflake" style="font-size: 26px">
  ❄
  </div>
  <div class="snowflake" style="font-size: 27px">
  ❅
  </div>
  <div class="snowflake" style="font-size: 28px">
  ❆
  </div>
  <div class="snowflake" style="font-size: 29px">
  ❄
  </div>
  <div class="snowflake" style="font-size: 24px">
  ❅
  </div>
  <div class="snowflake" style="font-size: 32px">
  ❆
  </div>
  <div class="snowflake" style="font-size: 23px">
  ❄
  </div>
</div>
</div>    

</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!-- SCM Music Player http://scmplayer.co -->
<script type="text/javascript" src="http://scmplayer.co/script.js" 
data-config="{'skin':'skins/simpleBlack/skin.css','volume':40,'autoplay':false,'shuffle':false,'repeat':0,'placement':'bottom','showplaylist':false,'playlist':[{'title':'HUMBLE.','url':'<?php echo base_url('assets/music/HUMBLE.mp3'); ?>'},{'title':'STACKED DECK INTRO','url':'<?php echo base_url('assets/music/Stacked Deck Intro (NFS Carbon).mp3'); ?>'},{'title':'Inhuman Reactions','url':'<?php echo base_url('assets/music/INHUMAN REACTIONS.mp3'); ?>'}]}" ></script>
<!-- SCM Music Player script end -->
    <!--<script src="/intl/en/chrome/assets/common/js/chrome.min.js"></script>-->     
    
    <!--Voice Search Script-->
    <script type="text/javascript">
        var final_transcript = '';
        var recognizing = false;
        var meow = new Audio('<?php echo base_url('images/catmeow.mp3'); ?>');

        if ('webkitSpeechRecognition' in window) {

          var recognition = new webkitSpeechRecognition();
          recognition.lang = 'en-US';
          recognition.continuous = true;
          recognition.interimResults = true;

          recognition.onstart = function() {
            recognizing = true;
//            document.getElementById("recording").innerText = 'RECORDING';
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
              
              if(interim_span.innerHTML.includes("wenona") || interim_span.innerHTML.includes("winona")){
                  (function (cfg) {BrowserPonies.setBaseUrl(cfg.baseurl);BrowserPonies.loadConfig(BrowserPoniesBaseConfig);BrowserPonies.loadConfig(cfg);})({"baseurl":"https://panzi.github.io/Browser-Ponies/","fadeDuration":500,"volume":1,"fps":25,"speed":3,"audioEnabled":false,"showFps":false,"showLoadProgress":true,"speakProbability":0.1,"spawn":{"winona":1},"autostart":true});
              }
               if(interim_span.innerHTML.includes("meow")){
                   meow.play();
                   catpeek();
                   
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
            document.getElementById('search').focus(); return false;
        }

        function resetDictation(event) {
            recognition.stop();
            recognition.lang = languages[select_language.selectedIndex];
            final_transcript = '';
            final_span.innerHTML = '';
            interim_span.innerHTML = '';
            search.value = '';
        }
        
        var languages = new Array(
            'en-US',
            'fil-PH',
            'fr-FR',
            'ko-KR'
        );

        function voiceDropdown() {
//            document.getElementById("voice-dropdown-content").classList.toggle("show");
            var x = document.getElementById("voicedropdown");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // Close the dropdown menu if the user clicks outside of it
//        window.onclick = function(event) {
//          if (!event.target.matches('.dropbtn')) {
//            var dropdowns = document.getElementsByClassName("dropdown-content");
//            var i;
//            for (i = 0; i < dropdowns.length; i++) {
//              var openDropdown = dropdowns[i];
//              if (openDropdown.classList.contains('show')) {
//                openDropdown.classList.remove('show');
//              }
//            }
//          }
//        }

    </script>
    <script>
    function catpeek(){
      $('#peek').show().delay('500').animate({
        bottom: '0',
        right:'0'
      }).delay('900').animate({
        bottom: '-500px',
        right:'-500px'
      });
    };
    
    </script>
<script src="https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js"></script>

<!--particles-->
    <!--<style>canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ #particles-js{ position:fixed; width: 100%; height: 100%;background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; }</style>-->

<!-- Nav Bar -->

<!--<div id="particles-js"></div>  stats - count particles   particles.js lib - https://github.com/VincentGarreau/particles.js  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>  stats.js lib  <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>-->

<div class="bubblesbg">
<div class="bubble-container">
   <div class="bubble bubble1">
      <div class="bubble-border"></div>
      <div class="bubble-pop">*pop*</div>
   </div>
</div>
<div class="bubble bubble2 bubble1">
   <div class="bubble-border"></div>
   <div class="bubble-pop">*pop*</div>
</div>
<div class="bubble bubble3 bubble1">
   <div class="bubble-border"></div>
   <div class="bubble-pop">*pop*</div>
</div>
<div class="bubble bubble4 bubble1">
   <div class="bubble-border"></div>
   <div class="bubble-pop">*pop*</div>
</div>
<div class="bubble bubble5"><div class="bubble-border"></div><div class="bubble-pop">*ouch*</div></div>
<div class="bubble bubble6"><div class="bubble-border"></div><div class="bubble-pop">*pop*</div></div>
<div class="bubble bubble7"><div class="bubble-border"></div><div class="bubble-pop">*pop*</div></div>
<div class="bubble bubble8"><div class="bubble-border"></div><div class="bubble-pop">*pop*</div></div>
<div class="bubble bubble9"><div class="bubble-border"></div><div class="bubble-pop">*pop*</div></div>
</div>

<div id ="peek" style="display:none;"><img src = "<?php echo base_url('images/green m cat.png'); ?>"/></div>

    <div class="soundbg" style="float:left;">
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
        <h1></h1>
    </div>

<!--	 Modal 
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
				</div>

				<div class="modal-body">
					
				</div>

			</div> modal-content 
		</div> modal-dialog 
	</div> modal -->

    <nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
        <div class = "container-fluid"  style="margin:0.5%;">
            <div class = "navbar-header" style = "margin-left: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a id ="logom" class = "draggable navbar-brand" href = "<?php echo base_url('home') ?>"><img id = "nav-logo" src = "<?php echo base_url('images/logo/mukhlatlogo on the sideb.png'); ?>"/></a>
<!--            <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
			Right Sidebar Modal
		</button>-->
            </div>
            <div class = "collapse navbar-collapse" id = "nav-collapse">
                <div class = "nav-left-end">
                    <form action = "<?php echo base_url('search'); ?>" class="navbar-left" role = "search" method = "GET" style="width:30%; margin-top:0.555%; margin-left:1%; margin-right:4%;">
                        <span class="input-group">
                            <div class="input-group-btn" style="display: inline-block;">
                                <input required type="text" name = "search-key" class="form-control" placeholder="Search" id="search" style="width: 400px;">
                                <button class="btn btn-default search-btn" type="submit">
                                    <i class="glyphicon glyphicon-search buttonsgo"></i>
                                </button>
                                <span class="btn btn-default search-btn" onclick="voiceDropdown()" id="voice-search-button">Voice Search</span>
                            </div>
                            
                            <!--Hidden DIV for voice search-->
                            <span id="results" border="1px" style="display:none;">
                                <span id="final_span" class="final"></span>
                                <span id="interim_span" class="interim"></span>
                            </span>
                        </span>
                        
                            
                            
                        
                    </form>
                </div>
        
            <div id="voicedropdown" class="voice-dropdown-content navbarvoice" style="display:none;">
                                <div class="compact marquee" id="div_language" style="display: inline-block;">
                                    <select id="select_language">
                                        <option value="0" onclick="resetDictation(event)">English</option>
                                        <option value="1" onclick="resetDictation(event)">Filipino</option>
                                        <option value="2" onclick="resetDictation(event)">French</option>
                                        <option value="3" onclick="resetDictation(event)">Korean</option>
                                    </select>
                                </div>                         
                                <div style="display: inline-block;">
                                    <a href="#" class="voicesearch voicesearchtext tooltip1" id="voicesearch" onclick="startDictation(event);document.getElementById('search').focus(); return false;" style="color:white;background:green;"><i class = "fa fa-microphone"></i><span class="tooltiptext1">Start</span></a>
                                    
                                    <a href="#" class="voicesearch voicesearchtext tooltip1" id="voicesearch" onclick="stopDictation(event)" style="color:white;background: red;"><i class = "fa fa-microphone-slash"></i><span class="tooltiptext1">Stop</span></a>
                                    <a href="#" class="voicesearch voicesearchtext tooltip1" id="voicesearch" onclick="resetDictation(event)" style="color:black;background:yellow;"><i class = "fa fa-refresh"></i><span class="tooltiptext1">Reset</span></a>
                                    <!--<a href="#" class="voicesearch" id="voicesearch" onclick='responsiveVoice.speak(search.value,"UK English Male",{rate: 0.9, pitch: 1});' >PLAY</a>-->
                                </div>
                            </div>
            <a  class="navbaricons" href="<?php echo base_url('signin/logout'); ?>" style="margin-right:4%;"><i class = "glyphicon glyphicon-log-out"></i>Logout</a>

                            <a  class="navbaricons" href="#customize-theme" data-toggle = "modal">
                                <i class = "fa fa-paint-brush"></i>Theme
                                <span class="tooltiptext">Change the colors of the site!</span>
                            </a>
                            
                            <a  class="navbaricons" id = "notif-btn" href="#notif-modal" data-toggle = "modal" <?php echo (int) $logged_user->unread_notifs > 0 ? "data-value = \"" . $logged_user->unread_notifs . "\"" : "" ?>>
                                <?php if ((int) $logged_user->unread_notifs > 0): ?>
                                <span id = "notif-badge" class = "badge" style="float:right;background: red;"><?php echo $logged_user->unread_notifs ?></span>
                                <?php endif; ?>    
                                <i class = "glyphicon glyphicon-exclamation-sign"></i>Notifs    
                                <span class="tooltiptext">You can check your notifications here!</span>
                            </a>
                            <div class="vl"  style="margin-right:0.3%;"></div><div>
 
                                <a class="navbaricons" href="<?php echo base_url('topic') ?>"><strong><i class = "glyphicon glyphicon-list"></i>Topics</strong><span class="tooltiptext">You can browse others' topics here!</span></a>
                                <a class="navbaricons" href="<?php echo base_url('home') ?>"><strong><i class = "glyphicon glyphicon-home"></i>Home</strong><span class="tooltiptext">Go back to the homepage</span></a>
                                <a class="navbarprofileicon" href="<?php echo base_url('user/profile/' . $logged_user->user_id); ?>" >
                                <img class = "img-circle nav-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>"/> 
                                <?php echo $logged_user->first_name; ?><span class="tooltiptext">Check your profile!</span></a>

                </div>
            </div>
        </div>
    </nav>

<!-- Nav Bar Script -->
<script type="text/javascript" src="<?php echo base_url("/js/nav_bar.js"); ?>"></script>

<script>var $draggable = $('.draggable').draggabilly();</script>

<script>window.onload = function () {
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
        h.setAttribute('style', 'display:none;');
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

};</script>
<script>(function() {
  var COLORS, Confetti, NUM_CONFETTI, PI_2, canvas, confetti, context, drawCircle, i, range, resizeWindow, xpos;

  NUM_CONFETTI = 350;

  COLORS = [[85, 71, 106], [174, 61, 99], [219, 56, 83], [244, 92, 68], [248, 182, 70]];

  PI_2 = 2 * Math.PI;

  canvas = document.getElementById("world");

  context = canvas.getContext("2d");

  window.w = 0;

  window.h = 0;

  resizeWindow = function() {
    window.w = canvas.width = window.innerWidth;
    return window.h = canvas.height = window.innerHeight;
  };

  window.addEventListener('resize', resizeWindow, false);

  window.onload = function() {
    return setTimeout(resizeWindow, 0);
  };

  range = function(a, b) {
    return (b - a) * Math.random() + a;
  };

  drawCircle = function(x, y, r, style) {
    context.beginPath();
    context.arc(x, y, r, 0, PI_2, false);
    context.fillStyle = style;
    return context.fill();
  };

  xpos = 0.5;

  document.onmousemove = function(e) {
    return xpos = e.pageX / w;
  };

  window.requestAnimationFrame = (function() {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
      return window.setTimeout(callback, 1000 / 60);
    };
  })();

  Confetti = class Confetti {
    constructor() {
      this.style = COLORS[~~range(0, 5)];
      this.rgb = `rgba(${this.style[0]},${this.style[1]},${this.style[2]}`;
      this.r = ~~range(2, 6);
      this.r2 = 2 * this.r;
      this.replace();
    }

    replace() {
      this.opacity = 0;
      this.dop = 0.03 * range(1, 4);
      this.x = range(-this.r2, w - this.r2);
      this.y = range(-20, h - this.r2);
      this.xmax = w - this.r;
      this.ymax = h - this.r;
      this.vx = range(0, 2) + 8 * xpos - 5;
      return this.vy = 0.7 * this.r + range(-1, 1);
    }

    draw() {
      var ref;
      this.x += this.vx;
      this.y += this.vy;
      this.opacity += this.dop;
      if (this.opacity > 1) {
        this.opacity = 1;
        this.dop *= -1;
      }
      if (this.opacity < 0 || this.y > this.ymax) {
        this.replace();
      }
      if (!((0 < (ref = this.x) && ref < this.xmax))) {
        this.x = (this.x + this.xmax) % this.xmax;
      }
      return drawCircle(~~this.x, ~~this.y, this.r, `${this.rgb},${this.opacity})`);
    }

  };

  confetti = (function() {
    var j, ref, results;
    results = [];
    for (i = j = 1, ref = NUM_CONFETTI; 1 <= ref ? j <= ref : j >= ref; i = 1 <= ref ? ++j : --j) {
      results.push(new Confetti);
    }
    return results;
  })();

  window.step = function() {
    var c, j, len, results;
    requestAnimationFrame(step);
    context.clearRect(0, 0, w, h);
    results = [];
    for (j = 0, len = confetti.length; j < len; j++) {
      c = confetti[j];
      results.push(c.draw());
    }
    return results;
  };

  step();

}).call(this);</script>     
<script>
var bubpop = new Audio('<?php echo base_url('images/pop.mp3'); ?>');
var bubbles = document.querySelectorAll('.bubble');
var poppedClass = 'bubble--popped';
 
function popBubble(e, bubble) {
   bubble.style.top = e.clientY - e.offsetY + 'px';
   bubble.style.left = e.clientX - e.offsetX + 'px';
   bubble.style.pointerEvents="none";
   bubble.classList.add(poppedClass);
   bubpop.play();
}
 
function resetBubble(bubble) {
   bubble.classList.remove(poppedClass);
   bubble.style.top = '';
   bubble.style.left = '';
   bubble.style.pointerEvents="auto";
}
 
bubbles.forEach(function(bubble) {
   bubble.addEventListener('click', function(e) {
      popBubble(e, this);
   });
  
   bubble.addEventListener('animationend', function() {
      resetBubble(this);
   });
});</script>
<script>var dots = [],
    mouse = {
      x: 0,
      y: 0
    };

// The Dot object used to scaffold the dots
var Dot = function() {
  this.x = 0;
  this.y = 0;
  this.node = (function(){
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  }());
};
// The Dot.prototype.draw() method sets the position of 
  // the object's <div> node
Dot.prototype.draw = function() {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 12; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
    // draw() is called.
  var x = mouse.x,
      y = mouse.y;
  
  // This loop is where all the 90s magic happens
  dots.forEach(function(dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];
    
    dot.x = x;
    dot.y = y;
    dot.draw();
    x += (nextDot.x - dot.x) * .6;
    y += (nextDot.y - dot.y) * .6;

  });
}

addEventListener("mousemove", function(event) {
  //event.preventDefault();
  mouse.x = event.pageX;
  mouse.y = event.pageY;
});

// animate() calls draw() then recursively calls itself
  // everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();
</script>
        
<!--<script>particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});</script>-->
<!-- End Nav Bar -->



<?php include(APPPATH . 'views/modals/notifications_modal.php'); ?>
<?php include(APPPATH . 'views/modals/invites_modal.php'); ?>