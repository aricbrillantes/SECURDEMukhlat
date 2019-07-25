<?php
$logged_user = $_SESSION['logged_user'];
$unanswered = $logged_user->unanswered_invites + $logged_user->unanswered_requests;
?>

<?php include(APPPATH . 'views/modals/afk_warning_modal.php');
?>

<p id="afktimer" style="float: right; display:none;">Time Left: 9999<p>

<script type="text/javascript">


    function getCookie(cname) 
    {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        
        for(var i = 0; i < ca.length; i++) 
        {
            var c = ca[i];
            
            while (c.charAt(0) === ' ') 
                c = c.substring(1);
            
            if (c.indexOf(name) === 0) 
                return c.substring(name.length, c.length);
            
        }
        return "";
    }

    

//    changing custom themes, pointers, effects based on the users choices
    document.write('<style type="text/css">.navbar-font {background:' + getCookie("NavbarColor") + ';}\n\
                     body {background:#e4e6e4;background-repeat: no-repeat;background-attachment: fixed;}\n\
                    .buttonsbgcolor {background:#1d8f15;}\n\
                    .buttonsbgcolor:hover{background:#14620f;}\n\
                    .text1color{color:#1d8f15;}\n\
                    .bar1color{background:#1d8f15;}\n\
                    .text1color:hover{color:#14620f;}\n\
                    .buttonsbgcolor:focus{background:#1d8f15;outline:0;}\n\
                    .buttonsbgcolor:active{background:#185729!important;}\n\
                    .modalbg{background:#d4f8d2;}\n\
                    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background: ' + getCookie("NavbarColor") + ';}\n\
                    .navbaricons:hover{background:#14620f;}\n\
                    .navbarprofileicon:hover{background:#14620f;}\n\
                    .navbaricons .tooltiptext{background-color:#14620f;}\n\
                    .camerapic .tooltiptext{background-color:#14620f;}\n\
                    .playpop .tooltiptext{background-color:#14620f;}\n\
                    .audiorec .tooltiptext{background-color:#14620f;}\n\
                    .navbarprofileicon .tooltiptext{background-color:#14620f;}\n\
                    .search-btn .tooltiptext1{background-color:#14620f;}\n\
                    #logom .bubbletooltip{background-color:#14620f;}\n\
                    .trail{background:#185729!important;}\n\
                    body::-webkit-scrollbar-thumb{background-color:#14620f;}\n\
                    body ::selection{background:#14620f;}\n\
                    .modal-header{background:#d4f8d2;;}\n\
                    .charLimitMessage{background:#14620f;}\n\
                    .ptopcolor{background:#1d8f15;}<\/style>');    
    


        
/*------------------------- AFK Timer Script -------------------------*/

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

/*------------------------- Night mode and usage restriction -------------------------*/

//      getting current time
        var now = new Date();
        var now2 = new Date();
        var time = now.getTime();
        var time2 = now.getTime()+(1800 * 1000);
        now.setTime(time);
        now2.setTime(time2);

        var nowH = now.getHours();
        var nowM = now.getMinutes();

//      if lasttimed (last time warned) cookie is earlier then current time, warn user and reset cookie
        if(Number(getCookie("nexttimed1"))<nowH && (Number(getCookie("nexttimed2"))-30)<=nowM)
        {
            document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
            document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
            $('#timepopup').modal({backdrop: 'static', keyboard: false});
        }

        if(Number(getCookie("nexttimed1"))===nowH && (Number(getCookie("nexttimed2")))<=nowM)
        {
            document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
            document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
            $('#timepopup').modal({backdrop: 'static', keyboard: false});
        }
        
</script>
<head>
    <script type="text/javascript" src="<?php echo base_url('sound-mouseover/sound-mouseover.js'); ?>"></script>




</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
<!--draggability script-->
<script src="<?php echo base_url('draggabilly-master/dist/draggabilly.pkgd.min.js'); ?>"></script>

<!-- Nav Bar -->
<!--------------------------------------------- Nav Bar --------------------------------------------->
<!--night mode overlay-->
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
                    <g id="maskGroup"></g>
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
                
                <a onmouseenter="playclip()" id ="logom" class = "draggable navbar-brand" href = "<?php echo base_url('home') ?>">
                    <img style="cursor: pointer" id = "nav-logo" src = "<?php echo base_url('images/logo/mukhlatlogo on the sideb.png'); ?>"/>
                </a>

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
                
                <!------------------------- voice search ------------------------->
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

                    
                </div>

                <div class="navbaricons2">
                    <a  onmouseenter="playclip()" id="logout-btn" class="navbaricons" href="<?php echo base_url('signin/logout'); ?>" style="margin-right:4%;"><i class = "glyphicon glyphicon-log-out iconin"></i>Bye!
                        <span class="tooltiptext">Log out of Mukhlat</span>
                    </a>

                    
                    <a onmouseenter="playclip()" class="navbarprofileicon" href="<?php echo base_url('user/profile/' . $logged_user->user_id); ?>" >
                        <img class = "img-circle nav-prof-pic iconin" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>"/> 
                        <?php echo $logged_user->first_name; ?><span class="tooltiptext">Check your profile!</span>
                    </a>
                    
                </div>
            </div>
        </div>
    </nav>

<!------------------------- Nav Bar Script ------------------------->
<script type="text/javascript" src="<?php echo base_url("/js/nav_bar.js"); ?>"></script>



<!------------------------- mouseover on a button audio ------------------------->
<audio>
    <source src="<?php echo base_url('sound-mouseover/click.mp3'); ?>">
    <source src="<?php echo base_url('sound-mouseover/click.ogg'); ?>">
</audio>
<div id="sounddiv"><bgsound id="sound"></div>





<!-- End Nav Bar -->


