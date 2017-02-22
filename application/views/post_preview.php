<div id = "post-preview">
    <div class = "col-md-12 content-container" style = "height: 430px; overflow-y: auto;">
        <div class = "col-sm-2 no-padding">
            <img class = "pull-left img-circle" width = "85px" src = "<?php echo $post->user->profile_url ? base_url($post->user->profile_url) : base_url('images/default.jpg') ?>">
        </div>
        <div class = "col-sm-10" style = "text-overflow: ellipsis;">
            <h4 class = "text-muted no-margin wrap"><strong><?php echo $post->post_title ?></strong></h4>
            <span class = "text-muted" style = "font-size: 12px;">by </span>
            <a class = "btn btn-link home-content-body-username" href = "<?php echo base_url('user'); ?>"><i><?php echo $post->user->first_name . " " . $post->user->last_name; ?></i></a>
            <i class = "home-content-body-date"><?php echo date("M-d-y", strtotime($post->date_posted)); ?></i>
            <p class = "post-content text-muted" style = "font-weight: lighter;"><?php echo $post->post_content; ?></p>
        </div>
    </div>
    <form action = "<?php echo base_url('topic/thread/' . $post->post_id); ?>">
        <button type = "submit" class = "btn btn-block btn-primary"> View Post Thread </button>
    </form>
</div>
