<?php
$logged_user = $_SESSION['logged_user'];
$unanswered = $logged_user->unanswered_invites + $logged_user->unanswered_requests;
?>

<?php include(APPPATH . 'views/modals/birthday_modal.php'); 
      include(APPPATH . 'views/modals/time_warning_modal.php');
      include(APPPATH . 'views/modals/timeout_warning_modal.php');
      include(APPPATH . 'views/modals/afk_warning_modal.php');
?>

<p id="afktimer" style="float: right; display:none;">Time Left: 9999<p>

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
    
    var randomColor = Math.floor(Math.random()*16777215).toString(16);
    var randomColor2 = Math.floor(Math.random()*16777215).toString(16);
    var randomColor3 = Math.floor(Math.random()*16777215).toString(16);
    var randomColor4 = Math.floor(Math.random()*16777215).toString(16);
    
    if(getCookie("activaterain")==='1'){  
        document.cookie = "NavbarColor=#" + randomColor + ";" + ";path=/"; 
        document.cookie = "ButtonColor=#" + randomColor4 + ";" + ";path=/"; 
        document.cookie = "ButtonHColor=#" + randomColor2 + ";" + ";path=/";
        document.cookie = "ButtonAColor=#" + randomColor3 + ";" + ";path=/";
    }
    
     if(getCookie("ButtonColor")==='')
    {
        document.cookie = "ButtonColor=#1d8f15;" + ";path=/"; 
        document.cookie = "ButtonHColor=#14620f;" + ";path=/"; 
        document.cookie = "ButtonAColor=#185729;" + ";path=/"; 
    }
//    changing custom themes, pointers, effects based on the users choices
    document.write('<style type="text/css">.navbar-font {background:' + getCookie("NavbarColor") + ';}\n\
                    #randtriv1{background: #'+ randomColor2 +';}\n\
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
                    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background: ' + getCookie("NavbarColor") + ';}\n\
                    .snowflakebg{display:' + getCookie("snowflakebg1") + '!important;}\n\
                    .sparklesbg{display:' + getCookie("sparklebg1") + ';}\n\
                    .fireworkbg{display:' + getCookie("fireworkbg1") + ';}\n\
                    .navbaricons:hover{background:' + getCookie("ButtonHColor") + ';}\n\
                    .navbarprofileicon:hover{background:' + getCookie("ButtonHColor") + ';}\n\
                    .bubblesbg{display:' + getCookie("bubblesbg1") + ';}\n\
                    .navbaricons .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .camerapic .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .playpop .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .audiorec .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .navbarprofileicon .tooltiptext{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .search-btn .tooltiptext1{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    #logom .bubbletooltip{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    .trail{background:' + getCookie("ButtonAColor") + '!important;}\n\
                    body::-webkit-scrollbar-thumb{background-color:' + getCookie("ButtonHColor") + ';}\n\
                    body ::selection{background:' + getCookie("ButtonHColor") + ';}\n\
                    body{cursor:url(' + getCookie("MousePointer") + '),auto;}\n\
                    :hover{cursor:url(' + getCookie("MousePointer") + '),auto;}\n\
                    .modal-header{background:' + getCookie("NavbarColor") + ';}\n\
                    .charLimitMessage{background:' + getCookie("ButtonHColor") + ';}\n\
                    .topic-grid1{background-color: #'+ randomColor +';}\n\
                    .ptopcolor{background:' + getCookie("ButtonColor") + ';}<\/style>');    
    
//    mouse trail effect
    if(getCookie("MouseTrail")==='0')
            document.write('<style type="text/css">.trail{display:none;}<\/style>');
        
//    bubbles background   
    if(getCookie("bubblesbg1")==='block')
        document.write('<style type="text/css"> #logom .bubbletooltip{visibility:visible;}<\/style>');
        
   else
        document.write('<style type="text/css"> #logom .bubbletooltip{visibility:hidden;}<\/style>');
        
//     random colors   
    if(getCookie("randomcolors")==='1')
    {
        document.write('<style type="text/css">\n\
                    #randtriv1{background: #'+ randomColor2 +';}\n\
                .topic-grid1{background-color: #'+ randomColor +';}<\/style>');
    }
        
    else
    {
        document.write('<style type="text/css">\n\
                    #randtriv1{background:'+ getCookie("ButtonColor") +';}\n\
                    .topic-grid1{background-color:'+ getCookie("ButtonColor") +';}<\/style>');
    }    
    
//    sparkles background
    if(getCookie("sparklebg1")==="block"){
        document.write('<canvas id="world" class="sparklesbg"></canvas>'); 
    }
    if(getCookie("fireworkbg1")==="block"){
        document.write('<canvas id="firework" class="fireworkbg"></canvas>'); 
    }
    
//    dancing buttons
    if(getCookie("dance")==='1')
    {
        document.write('<style type="text/css">\n\
                        .btn{animation: dance 3s infinite;}\n\
                        .navbaricons{animation: dance 3s infinite;}\n\
                        .navbarprofileicon{animation: dance 3s infinite;}\n\
                        #logout-btn{animation: dance 3s infinite;}\n\
                        button{animation: dance 3s infinite;}\n\
                        a{animation: dance 3s infinite;}\n\
                        <\/style>');
    }
       
 
//      getting current date
        var currentDate = new Date();
        var curMonth = currentDate.getMonth()+1;
        var curDay = currentDate.getDate();
        
        
//      getting current time for night mode script
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();

//      screen blur after usage time warning
/*     
 *      Developers' note: 
 *          Blurring the screen is not the best way to make the user/child log out.
 *          We simply added 
*/
        document.write('<style type="text/css">\n\
                html {filter:blur(' + getCookie("blur") + 'px);}<\/style>');

//darker screen depending on time (night mode); see actual function below
/*     
 *      Developers' note: 
 *          Blurring the screen is not the best way to make the user/child log out.
 *          We simply added 
*/
        switch(hours)
        {   
            case 6:document.write('<style type="text/css">#overlay{background-color: rgba(0,0,0,0.1);}<\/style>');break;     
            case 16:document.write('<style type="text/css">#overlay{background-color: rgba(0,0,0,0.1.5);}<\/style>');break;
            case 17:document.write('<style type="text/css">#overlay{background-color: rgba(0,0,0,0.2);}#logout-btn {animation: emphasize 2s infinite;}<\/style>');break;
            case 18:document.write('<style type="text/css">#overlay{background-color: rgba(0,0,0,0.2.5);}#logout-btn {animation: emphasize 1s infinite;}<\/style>');break;
            case 19:document.write('<style type="text/css">#overlay{background-color: rgba(0,0,0,0.4);}#logout-btn {animation: emphasize 0.5s infinite;}<\/style>');break;
            default:document.write('<style type="text/css">#overlay{background-color: rgba(0,0,0,0);}<\/style>');break;
        }

//  displays a different Mukhlat logo on nightmode
        if(hours >= 18 || hours < 6)
        {
            document.write('<style type="text/css">\n\
            #nav-logo{display:none}\n\
            #home2{display:none}\n\
            <\/style>');
        }
        
        else
        {
            document.write('<style type="text/css">\n\
                #nav-logo2{display:none}\n\
                #bed2{display:none}<\/style>');
        }
        //force logout by 8pm to 6am
        if(hours >= 20 || hours < 6)
        {
            location.href="http://localhost/MukhlatBeta/signin/logout";
        }
        
//  Warning before curfew's forced logout
        if(hours === 19 && getCookie("warned")==='0')
        {
            $('#timeoutpopup').modal({backdrop: 'static', keyboard: false});
            document.cookie = "warned=1;path=/"; 
            
        }
        
//      getting user's birthday
        var birthDate = new Date('<?php echo $logged_user->birthdate; ?>');
        var birthMonth = birthDate.getMonth()+1;
        var birthDay = birthDate.getDate(); 
       
//      greet the user if it's their birthday
        if(birthMonth===curMonth && birthDay===curDay)
        {
            if(getCookie("birthday")==='0')
                birthdayPopup();
        }
        
//      greet the user if it's their birthday
        function birthdayPopup()
        {
            document.cookie = "birthday=1;" + ";path=/"; 
            $('#birthdaypopup').modal('show');
            
        }
        
//      AFK Timer Script

        var start = document.getElementById("start");
        var dis = document.getElementById("afktimer");
        var finishTime;
        var timerLength = 600; // 600 seconds or 10 minutes
        var timeoutID;
        dis.innerHTML = "Time Left: " + timerLength;
        
        document.onmousemove = function(){ //reset timer and hide AFK popup
            StartTimer();
            $('#afkpopup').modal('hide'); 
        };
        
        StartTimer();

        function StartTimer() {
            localStorage.setItem('myTime', ((new Date()).getTime() + timerLength * 1000));
            if (timeoutID !== undefined) window.clearTimeout(timeoutID);
            Update();
        };

        function Update() {
            finishTime = localStorage.getItem('myTime');
            var timeLeft = (finishTime - new Date());
            dis.innerHTML = "Time Left: " + Math.max(timeLeft/1000,0);
            timeoutID = window.setTimeout(Update, 100);

            if(timeLeft<=300*1000) //display AFK popup after 5 minutes
            {
                $('#afkpopup').modal('show');
            }
            
            if(dis.innerHTML==='Time Left: 0') // logout user if AFK
            {
                location.href="http://localhost/MukhlatBeta/signin/logout";
            }
            
            if(hours >= 20) // force logout of user
            {
                location.href="http://localhost/MukhlatBeta/signin/logout";
            }
        }
        
//      getting current time for night mode and usage restriction
        var now = new Date();
        var now2 = new Date();
        var time = now.getTime();
        var time2 = now.getTime()+(1800 * 1000);
        now.setTime(time);
        now2.setTime(time2);

        var nowH = now.getHours();
        var nowM = now.getMinutes();

        var blur = Number(getCookie("blur"));
    
//      if lasttimed (last time warned) cookie is earlier then current time, warn user and reset cookie
        if(Number(getCookie("nexttimed1"))<nowH && (Number(getCookie("nexttimed2"))-30)<=nowM)
        {
            blur = blur+1;
            document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
            document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
            document.cookie = "blur=" + blur + ";path=/"; 
            $('#timepopup').modal({backdrop: 'static', keyboard: false});
        }

        if(Number(getCookie("nexttimed1"))===nowH && (Number(getCookie("nexttimed2")))<=nowM)
        {
            blur = blur+1;
            document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
            document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
            document.cookie = "blur=" + blur + ";path=/"; 
            $('#timepopup').modal({backdrop: 'static', keyboard: false});
        }
        
</script>
<head>
    
    <script type="text/javascript" src="<?php echo base_url('sound-mouseover/sound-mouseover.js'); ?>"></script>
    
  
    <!--snowflakes falling effect-->
<div class="snowflakebg" style="display: none;">    
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
        
<!--Voice Search Script-->
<script type="text/javascript" src="<?php echo base_url('js/voicesearch.js'); ?>"> </script>

<!--draggability script-->
<script src="<?php echo base_url('draggabilly-master/dist/draggabilly.pkgd.min.js'); ?>"></script>

<!-- Nav Bar -->

    <!--night mode-->
<div id="overlay"></div>

<!--bubbles effect-->
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

<!--voice command easter egg-->
<div id ="peek" style="display:none;"><img src = "<?php echo base_url('images/green m cat.png'); ?>"/></div>

<!--frequency bar effect-->
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

	
    <nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
        <div class = "container-fluid"  style="margin:0.5%;">
            <div class = "navbar-header" style = "margin-left: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a onmouseenter="playclip()" id ="logom" class = "draggable navbar-brand" href = "<?php echo base_url('home') ?>"><img style="cursor: pointer" id = "nav-logo" src = "<?php echo base_url('images/logo/mukhlatlogo on the sideb.png'); ?>"/><img style="cursor: pointer" id = "nav-logo2" src = "<?php echo base_url('images/logo/bed mukhlat.png'); ?>"/><span class="bubbletooltip" id="bubblegame"style="">Score: </span></a>

            <span id="results" border="1px">
                <span id="final_span3" class="final"></span>
                <span id="interim_span3" class="interim"></span>
            </span>

            </div>
            <div class = "collapse navbar-collapse" id = "nav-collapse">
                <div class = "nav-left-end">
                    <form action = "<?php echo base_url('search'); ?>" class="navbar-left" role = "search" method = "GET" style="width:30%; margin-top:0.555%; margin-left:1%; margin-right:4%;">
                        <span class="input-group">
                            <div class="input-group-btn" style="display: inline-block;">
                                <input required type="text" name = "search-key" class="form-control" placeholder="Search for topics/users" id="search" style="width: 400px; font-size: 22px">
                                <button class="btn btn-default search-btn tooltip1" type="submit">
                                    <i class="glyphicon glyphicon-search buttonsgo" style="cursor: pointer"></i><span class="tooltiptext1" style="width:150px;">Start search</span>
                                </button>
                                <span class="btn btn-default search-btn tooltip1" onclick="voiceDropdown()" id="voice-search-button" style="cursor: pointer"><i class = "fa fa-microphone buttonsgo"style="font-size:16px;cursor: pointer"></i><span class="tooltiptext1" style="width:150px;">Search by voice</span></span>
                            </div>
                            
                            <!--Hidden DIV for voice search-->
                            <span id="results" border="1px" style="display:none;">
                                <span id="final_span" class="final"></span>
                                <span id="interim_span" class="interim"></span>
                            </span>
                            <span id="results" border="1px">
                                <span id="final_span3" class="final"></span>
                                <span id="interim_span3" class="interim"></span>
                            </span>
                        </span>
                            
                        
                    </form>
                </div>
        <!--voice search-->
            <div id="voicedropdown" class="voice-dropdown-content navbarvoice" style="display:none;">
                                <div class="compact marquee" id="div_language" style="display: inline-block;font-size: 22px">
                                    <select id="select_language">
                                        <option value="0" onclick="resetDictation(event)">English</option>
                                        <option value="1" onclick="resetDictation(event)">Filipino</option>
                                        <option value="2" onclick="resetDictation(event)">French</option>
                                        <option value="3" onclick="resetDictation(event)">Korean</option>
                                        <option value="4" onclick="resetDictation(event)">Italian</option>
                                        <option value="5" onclick="resetDictation(event)">Spanish</option>
                                        <option value="6" onclick="resetDictation(event)">Japanese</option>
                                    </select>
                                </div>                         
                                <div style="display: inline-block;">
                                    <a href="#" class="voicesearch voicesearchtext tooltip1" id="voicesearch" onclick="startDictation(event);" style="color:white;background:green;margin-left:5px;"><i style="font-size: 22px" class = "fa fa-microphone"></i><span class="tooltiptext1">Start</span></a>

                                    <span id="snackbar">Speak to type is on now</span>
                                    <a href="#" class="voicesearch voicesearchtext tooltip1" id="voicesearch" onclick="stopDictation(event)" style="color:white;background: red;margin-left:5px;"><i style="font-size: 22px" class = "fa fa-microphone-slash"></i><span class="tooltiptext1" style="background:red;">Stop</span></a>
                                    <a href="#" class="voicesearch voicesearchtext tooltip1" id="voicesearch" onclick="resetDictation(event);" style="color:black;background:yellow;margin-left:5px;"><i style="font-size: 22px" class = "fa fa-refresh"></i><span class="tooltiptext1" style="background:yellow;color:black">Reset</span></a>
                                </div>
                            </div>
                            <div class="navbaricons2">
                            <a onclick="window.speechSynthesis.cancel();" onmouseenter="playclip()" id="logout-btn" class="navbaricons" href="<?php echo base_url('signin/logout'); ?>" style="margin-right:4%;"><i class = "glyphicon glyphicon-log-out iconin"></i>Bye!
                                <span class="tooltiptext">Log out of Mukhlat</span></a>

                            <a onmouseenter="playclip()" class="navbaricons" href="#customize-theme" data-toggle = "modal">
                                        <i class = "fa fa-paint-brush iconin"></i>Colors
                                <span class="tooltiptext">Change the colors of the site!</span>
                            </a>
                                    </a>
                            
                            <a onmouseenter="playclip()" class="navbaricons" id = "notif-btn" href="#notif-modal" data-toggle = "modal" <?php echo (int) $logged_user->unread_notifs > 0 ? "data-value = \"" . $logged_user->unread_notifs . "\"" : "" ?>>
                                    <?php if ((int) $logged_user->unread_notifs > 0): ?>
                                    <span id = "notif-badge" class = "badge" style="float:right;background: red;"><?php echo $logged_user->unread_notifs ?></span>
                                    <?php endif; ?>    
                                    <i class = "glyphicon glyphicon-exclamation-sign iconin"></i>News    
                                <span class="tooltiptext">You can check your notifications here!</span>  
                            </a>
                            <div class="vl"  style="margin-right:0.3%;"></div>
 
                                <a onmouseenter="playclip()" class="navbaricons" href="<?php echo base_url('topic') ?>"><strong class="iconin"><i class = "glyphicon glyphicon-list iconin"></i>Topics</strong><span class="tooltiptext">You can browse others' topics here!</span></a>
                                <a onmouseenter="playclip()" class="navbaricons" href="<?php echo base_url('home') ?>"><strong class="iconin"><i id="home2" class = "glyphicon glyphicon-home iconin"></i><i id="bed2" class = "glyphicon glyphicon-bed iconin"></i>Home</strong><span class="tooltiptext">Go back to the homepage</span></a>
                               
                                <a onmouseenter="playclip()" class="navbarprofileicon" href="<?php echo base_url('user/profile/' . $logged_user->user_id); ?>" >
                                <img class = "img-circle nav-prof-pic iconin" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>"/> 
                                <?php echo $logged_user->first_name; ?><span class="tooltiptext">Check your profile!</span></a>

                </div>
            </div>
        </div>
    </nav>

<!-- Nav Bar Script -->
<script type="text/javascript" src="<?php echo base_url("/js/nav_bar.js"); ?>"></script>
<!--voice search indicator script-->
<script>
function voiceIndicatorON() {
    var VInd = document.getElementById("snackbar");
    VInd.className = "show";
}

function voiceIndicatorOFF() {
    var VInd = document.getElementById("snackbar");
    VInd.className = "hide";
}

</script>

<!--voice commands script-->
<script type="text/javascript">
    var final_transcript3 = '';
    var recognizing3 = true;
    var meow = new Audio('<?php echo base_url('images/catmeow.mp3'); ?>');

    if ('webkitSpeechRecognition' in window) {

      var recognition3 = new webkitSpeechRecognition();
      recognition3.lang = 'en-US';
      recognition3.continuous = true;
      recognition3.interimResults = true;

      recognition3.onstart = function() {
        recognizing3 = true;
      };

      recognition3.onerror = function(event) {
        console.log(event.error);
      };

      recognition3.onend = function() {
        recognizing3 = false;
    };

       recognition3.onresult = function(event) {
                      
            var interim_transcript3 = '';
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                if (event.results[i].isFinal) {
                    final_transcript3 += event.results[i][0].transcript;
                } 
                
                else{
                    interim_transcript3 += event.results[i][0].transcript;
                }
            }
            final_span3.innerHTML = linebreak(final_transcript3);
            interim_span3.innerHTML = linebreak(interim_transcript3);

            if(interim_span3.innerHTML.includes("sawa na ako") || interim_span3.innerHTML.includes("time out")){
                forceTimeout();
            }

            if(interim_span3.innerHTML.includes("go to home") || interim_span3.innerHTML.includes("sa home po")){
                location.href="http://localhost/MukhlatBeta/home";
            }

            if(interim_span3.innerHTML.includes("go to topics") || interim_span3.innerHTML.includes("sa topics po")){
                location.href="http://localhost/MukhlatBeta/topic";
            }

            if(interim_span3.innerHTML.includes("go to profile") || interim_span3.innerHTML.includes("sa profile po")){
                location.href="<?php echo base_url('user/profile/' . $logged_user->user_id); ?>";
            }

            if(interim_span3.innerHTML.includes("activate camera")){
                $('#camerapopup').modal('show');
            }

    //            if(interim_span3.innerHTML.includes("selfie")){
    //                takephoto();
    //                interim_span3.innerHTML = interim_span3.innerHTML.replace("selfie","");
    //            }

            if(interim_span3.innerHTML.includes("voice search")){
                var x = document.getElementById("voicedropdown");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                startDictation(event);
            }

            if(interim_span3.innerHTML.includes("meow")){
                meow.play();
                catpeek();
            }

          };
        }

        var two_line = /\n\n/g;
        var one_line = /\n/g;
        recognition3.lang = 'fil-PH';
        
        function linebreak(s) {
            return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
        }

        function capitalize(s) {
            return s.replace(s.substr(0,1), function(m) { return m.toUpperCase(); });
        }

        function startDictation3(event) {
            recognition3.lang = 'fil-PH';
            final_transcript3 = '';
            final_span3.innerHTML = '';
            interim_span3.innerHTML = '';
            recognition3.start();
        }

        function stopDictation3(event) {
            recognition3.stop();
        }

        startDictation3(event);
        
    </script>
    
<script src="<?php echo base_url('js/eastereggs.js'); ?>"></script>
<script src="<?php echo base_url('js/usagetimer.js'); ?>"></script>
<script>var $draggable = $('.draggable').draggabilly();</script>
<script src="<?php echo base_url('js/frequencybars.js'); ?>"></script>
<script src="<?php echo base_url('js/sparkles.js'); ?>"></script>

<!--bubble popping and popped bubbles counter script-->
<script>
    var bubpop = new Audio('<?php echo base_url('images/pop.mp3'); ?>');
    var bubbles = document.querySelectorAll('.bubble');
    var poppedClass = 'bubble--popped';
    var score = Number(getCookie("score"));
    
    document.getElementById("bubblegame").innerHTML='Bubbles Popped: ' + score;
    
    function scoreBubble() {
        score++;
        document.cookie = "score=" + score +";path=/"; 
        document.getElementById("bubblegame").innerHTML='Bubbles Popped: ' + score;
    }
    
    function popBubble(e, bubble) {
       bubble.style.top = e.clientY - e.offsetY + 'px';
       bubble.style.left = e.clientX - e.offsetX + 'px';
       bubble.style.pointerEvents="none";
       bubble.classList.add(poppedClass);
       scoreBubble();
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
    });
</script>

<!--mouseover on a button audio-->
<audio>
<source src="<?php echo base_url('sound-mouseover/click.mp3'); ?>">
<source src="<?php echo base_url('sound-mouseover/click.ogg'); ?>">
</audio>
<div id="sounddiv"><bgsound id="sound"></div>

<!--highlighted text reader script-->
<script>
var synth = window.speechSynthesis;
var voices90 = synth.getVoices();

function getSelectionText() { //highlight desired text to read
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type !== "Control") {
        text = document.selection.createRange().text;
    }
    return text;
}

document.addEventListener('keydown', function(e) {
  if (e.keyCode === 16) { //press shift to read higlighted text
    var msg = new SpeechSynthesisUtterance(getSelectionText());
    msg.voice = voices90[2];
    synth.speak(msg);
  }
  if(e.keyCode === 17){ //press ctrl to stop reading
     window.speechSynthesis.cancel();
  }
});

</script>

<!--read post content reader script-->
        <script>
function readcontent(value) {
    if(!(speechSynthesis.speaking)){
    var value2 = value.replace(/`/g, "'");
    var reader = new SpeechSynthesisUtterance(value2);
    window.speechSynthesis.speak(reader);
    }
    else{
        window.speechSynthesis.cancel();
    }
  }

</script>
<!-- End Nav Bar -->



<?php include(APPPATH . 'views/modals/notifications_modal.php'); ?>
<?php include(APPPATH . 'views/modals/customize_modal.php'); ?>