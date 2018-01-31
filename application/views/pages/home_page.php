
<?php
include(APPPATH . 'views/header.php');
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
</head>
    <script>
    
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

    //    function checkCookie() {
    //        var user = getCookie("username");
    //        if (user != "") {
    //            alert("Welcome again " + user);
    //        } else {
    //            user = prompt("Please enter your name:", "");
    //            if (user != "" && user != null) {
    //                setCookie("username", user, 365);
    //            }
    //        }
    //    }
        document.write('<style type="text/css">body {background: ' + getCookie("backgroundColor") + ';}\n\
                        #crettop {background-color: ' + getCookie("ButtonColor") + ';}<\/style>');
    
    </script>

<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    $logged_user = $_SESSION['logged_user'];
    ?>
    
    <div class = "container page">
        <div class = "row">
            <div class = "col-md-9 home-container">
                <div class = "col-sm-12 home-container">
                    <!-- HEADER -->
                    <div class = "clearfix content-container">

                        <a href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                            <img class = "pull-left img-rounded btn btn-link home-prof-pic" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>">
                        </a>
                        <div class = "col-sm-4 home-user-text">
                            <a class = "btn btn-link home-username" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>"><strong><?php echo $logged_user->first_name; ?></strong></a>
                            <i class = "fa fa-caret-right header-arrow"></i> 
                            <div class="home-dropdown dropdown">
                                <button class="btn btn-link dropdown-toggle home-username" type="button" data-toggle="dropdown"><strong>Home</strong>
                                    <i class="caret"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="topic">Topic</a></li>
                                </ul>
                            </div>
                        </div>
                        <a id="crettop" class ="btn btn-primary home-create-btn" href="#create-topic-modal" data-toggle = "modal">Create Topic</a>
                        <input onclick='responsiveVoice.speak("okay");' type='button' value='🔊 Play' />
                    </div>

                    <!-- CONTENT -->
                    <div class = "col-sm-12 content-container">
                        <div class = "col-sm-12">
                            <!-- POST PREVIEW -->
                            <?php
                            if (!empty($posts)):
                                foreach ($posts as $post):
                                    ?>
                                    <div class = "col-xs-12 no-padding post-container" style = "margin-bottom: 10px;">
                                        <div class = "user-post-heading no-margin">
                                            <a class = "btn btn-link no-padding" href = "<?php echo base_url('user/profile/' . $post->user_id); ?>">
                                                <strong><?php echo $post->first_name . " " . $post->last_name; ?></strong>
                                            </a> 
                                            <span>posted in</span> 
                                            <a class = "btn btn-link no-padding" href = "<?php echo base_url('topic/view/' . $post->topic_id); ?>">
                                                <strong><?php echo utf8_decode($post->topic_name); ?></strong>
                                            </a>:
                                        </div>

                                        <div class = "col-xs-12 user-post-content no-padding">
                                            <!-- Left -->
                                            <div class = "col-xs-1 text-center no-padding" style = "padding-left: 10px;">
                                                <a class = "btn btn-link no-padding" href = "<?php echo base_url('user/profile/' . $post->user_id); ?>">
                                                    <img class = "img-circle" style = "margin: 10px 0px;" width = "65px" height = "65px" src = "<?php echo $post->profile_url ? base_url($post->profile_url) : base_url('images/default.jpg'); ?>"/>
                                                </a>
                                                <button class = "upvote-btn btn btn-link btn-xs" style = "margin-left: 3px;" value = "<?php echo $post->post_id; ?>">
                                                    <span class = "<?php echo $post->vote_type === '1' ? 'upvote-text' : '' ?> fa fa-chevron-up vote-text"></span>
                                                </button>
                                                <br>
                                                <span class = "vote-count text-muted" style = "margin-left: 3px;"><?php echo $post->vote_count ? $post->vote_count : '0'; ?></span>
                                                <br>
                                                <button class = "downvote-btn btn btn-link btn-xs" value = "<?php echo $post->post_id; ?>">
                                                    <span class = "<?php echo $post->vote_type === '-1' ? 'downvote-text' : '' ?> fa fa-chevron-down vote-text"></span>
                                                </button>
                                            </div>

                                            <!-- Right -->
                                            <div class = "col-xs-11" style = "margin-top: 5px;">
                                                <h4 class = "no-padding no-margin text-muted wrap"><strong><?php echo utf8_decode($post->post_title); ?></strong></h4>
                                                <i class = "text-muted">
                                                    <small>by 
                                                        <a class = "btn btn-link btn-xs no-padding" href = "<?php echo base_url('user/profile/' . $post->user_id); ?>">
                                                            <?php echo $post->first_name . " " . $post->last_name ?>
                                                        </a>
                                                    </small>
                                                </i>
                                                <span class = "text-muted"> <i style = "font-size: 11px"><?php echo date("M-d-y", strtotime($post->date_posted)); ?></i></span>
                                                <p class = "home-content-body" style = "border-right: none;"><?php echo utf8_decode($post->post_content); ?></p>
                                            </div>
                                        </div>
                                        <div class = "user-post-footer no-margin text-right">
                                            <a class = "btn btn-user-post-footer no-up-down-pad" href = "<?php echo base_url('topic/thread/' . $post->post_id); ?>">View Thread <i class = "fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            else:
                                ?>
                                <h4 class = "text-center text-warning">Your home page looks empty. Try following or creating more topics!</h4>
                            <?php endif; ?>
                        </div>
                        
                        <script type="text/javascript">
                            var final_transcript = '';
                            var recognizing = false;

                            if ('webkitSpeechRecognition' in window) {

                              var recognition = new webkitSpeechRecognition();

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
                                document.getElementById("recording").innerText = '';
                                document.getElementById("search").innerText = 'NO SWEARING!';
                                interim_span.innerHTML = linebreak(interim_transcript);
                                search.value = linebreak(interim_transcript);
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
                                final_transcript = capitalize(final_transcript);
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
                                final_transcript = '';
                                recognition.lang = 'en-US';
                                recognition.start();
                                final_span.innerHTML = '';
                                interim_span.innerHTML = '';
                            }
                            
                            function stopDictation(event) {
                                recognition.stop();
                                search.value = linebreak(interim_transcript);
                            }
                            
                        </script>
                        <div id="recording"></div><br>
                        <div>
                            <a href="#" id="start_button" onclick="startDictation(event)">START</a><br>
                            <a href="#" id="start_button" onclick="stopDictation(event)">STOP</a><br>
                        </div>

                        <div id="results" border="1px">
                            <span id="final_span" class="final"></span>
                            <span id="interim_span" class="interim"></span>
                        </div>


                    </div>
                </div>
            </div>

            <?php
            include(APPPATH . 'views/topic_side_bar.php');
            include(APPPATH . 'views/modals/create_topic_modal.php');
            ?>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("/js/post.js"); ?>"></script>
    
    <?php
//    include(APPPATH . 'views/chat/chat.php');
