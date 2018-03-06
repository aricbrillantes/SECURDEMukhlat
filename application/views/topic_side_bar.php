<?php
$logged_user = $_SESSION['logged_user'];
?>
    
<!-- Sidebar -->
<div class="col-md-3" style = "padding-left: 0px; margin-right:1%;margin-left: 3.5%;width:22.5%">
    <div class = "col-xs-12 home-sidebar content-container" style="border-radius:20px;">
        <!--Header-->
        <div class = "clearfix content-container" style="border-radius:20px;cursor: pointer;" id = "side-topics-followed-btn">

                        <a class="text1color" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                            <img class = "pull-left img-rounded btn btn-link home-prof-pic topictop" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>">
                        </a>
                        <div class = "col-sm-4 home-user-text">
                            <a class = "btn btn-link home-username text1color" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>"><strong><?php echo $logged_user->first_name . " " . $logged_user->last_name;?></strong></a>
<!--                            <i class = "fa fa-caret-right header-arrow"></i> 
                            <div class="home-dropdown dropdown">
                                <button class="btn btn-link dropdown-toggle home-username text1color" type="button" data-toggle="dropdown"><strong>Home</strong>
                                    <i class="caret"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="topic">Topic</a></li>
                                </ul>
                            </div>-->
                        </div>
 </div>
        <div id = "side-topics-followed">
        <!--<h3 class = "text-center text-info no-padding no-margin text1color" style = "margin-bottom: 10px;"><strong>Topic Shortcuts</strong></h3>-->
        <!--<a id = "side-topics-created-btn" class = "btn btn-sm btn-block no-padding sidebar-header-btn buttonsbgcolor">-->
            <h4>Your topics</h4>
        <!--</a>-->
        <div class = "sidebar-topic-div">
            <ul class="nav">
                <?php
                if(!empty($logged_user->topics)):
                foreach ($logged_user->topics as $topic):
                ?>
                <li>
                    <a href="topic/view/<?php echo $topic->topic_id; ?>">
                        <span class = "text-muted"><?php echo utf8_decode($topic->topic_name); ?></span>
                        <span class = "pull-right label label-info"><i class = "fa fa-group"></i> <?php echo $topic->followers ? count($topic->followers) : '0'; ?></span>
                    </a>
                </li>
                <?php
                endforeach;
                else:
                ?>
                <li><h5 class = "text-center text-warning">No Topics here!</h5></li>
                <?php endif; ?>
            </ul>
        </div>



        <!--<a id = "side-topics-followed-btn" class = "btn btn-block no-padding sidebar-header-btn buttonsbgcolor">-->
            <h4>Topics you Follow</h4>
        <!--</a>-->
        <div class = "sidebar-topic-div">
            <ul class="nav">
                <?php
                if(!empty($logged_user->followed_topics)):
                foreach ($logged_user->followed_topics as $topic):
                ?>
                <li>
                    <a href="topic/view/<?php echo $topic->topic_id; ?>">
                        <span class = "text-muted"><?php echo utf8_decode($topic->topic_name); ?></span>
                        <span class = "pull-right label label-info"><i class = "fa fa-group"></i> <?php echo $topic->followers ? count($topic->followers) : '0'; ?></span>
                    </a>
                </li>
                <?php
                endforeach;
                else:
                ?>
                <li><h5 class = "text-center text-warning">No Topics here!</h5></li>
                <?php endif; ?>
            </ul>
        </div>
        <div id="randtriv1">
        <?php
        $servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mukhlat";
	$conn = @new mysqli($servername, $username, $password, $dbname);
        
        $count = rand(1, 4);
        $sql = "SELECT Tquestion, Tanswer, Tcategory FROM tbl_trivias WHERE TriviaID = '$count'";
	$result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        echo '<div class="whitebg1"> '.$row['Tcategory'].' Trivia</div><br>';
        echo '<div class="whitebg">Q: '.$row['Tquestion'].'</div><br>';
        echo '<div class="whitebg">A: '.$row['Tanswer'].'</div>';
        $conn->close();
        }?>
        <img class = "pinwheel1" src = "<?php echo base_url('images/Picture1.png'); ?>"/></div>
    </div>
    </div>
</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url("/js/side_bar.js"); ?>"></script>
<!-- END SCRIPTS -->
<!-- End Sidebar -->