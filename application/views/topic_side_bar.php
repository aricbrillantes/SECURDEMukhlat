<?php
$logged_user = $_SESSION['logged_user'];
?>
    
<!-- Sidebar -->
<div class="col-md-3" style = "padding-left: 0px; margin-right:1%;margin-left: 3.5%;width:22.5%">
    <div class = "col-xs-12 home-sidebar content-container" style="border-radius:20px;">
        <!--Header-->
        <div class = "clearfix content-container" style="border-radius:20px;cursor: pointer;position: relative" id = "side-topics-followed-btn"  onclick="tpsidebar()">
            <i class="fa fa-chevron-down pull-left" style="display: inline;position: absolute;top:40%;cursor: pointer;"></i>
                        <a class="text1color" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                            <img style="cursor:pointer;" class = "pull-left img-rounded btn btn-link home-prof-pic topictop" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>">
                        </a>
                        <div class = "col-sm-4 home-user-text">
                            <a class = "btn btn-link home-username text1color" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>"><strong style="cursor:pointer;"><?php echo $logged_user->first_name . " " . $logged_user->last_name;?></strong></a>

                        </div>
 </div>
        <div id = "side-topics-followed">

            <h4 class="ptopcolor textoutliner" style="border-radius: 2px;color: white">Your topics</h4>
        <div class = "sidebar-topic-div">
            <ul class="nav">
                <?php
                if(!empty($logged_user->followed_topics)):
                foreach ($logged_user->followed_topics as $topic):
                ?>
                <li onmouseenter="playclip()">
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
        </div>
        <!--random trivia-->
        
    
    </div>
</div>

<!-- SCRIPTS -->
<!--topic sidebar collapsed or expanded script-->
<script>
function tpsidebar(){
    if($("#side-topics-followed").is(":visible"))
        document.cookie='tpsidebar=0;path=/;';
    else
        document.cookie='tpsidebar=1;path=/;';
}

</script>
<script>var $draggable = $('.draggable').draggabilly();</script>
<script type="text/javascript" src="<?php echo base_url("/js/side_bar.js"); ?>"></script>
<!-- END SCRIPTS -->
<!-- End Sidebar -->