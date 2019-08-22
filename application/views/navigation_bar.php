<?php
include(APPPATH . 'views/modals/afk_warning_modal.php');

$logged_user = $_SESSION['logged_user'];
$unanswered = $logged_user->unanswered_invites + $logged_user->unanswered_requests;

//if user is admin, deny access and redirect them to normal home page
if($logged_user->role_id != 2 || $logged_user == null)
{
    header("Location: http://localhost/SECURDEMukhlat/home");
}
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
                location.href="http://localhost/SECURDEMukhlat/signin/logout";
            }
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


