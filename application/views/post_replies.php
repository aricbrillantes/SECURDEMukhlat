<?php
$user = $post->user
?>
<hr>
<div class = "media">
    <div class = "media-left text-center no-margin no-padding">
        <img src="<?php echo $user->profile_url ? base_url($user->profile_url) : base_url('images/default.jpg'); ?>" class="media-object img-circle post-pic pull-left">

    </div>
    <div class="media-body">
        <button class = "reply-btn pull-right btn btn-sm btn-gray" value = "<?php echo $post->post_id; ?>">
            <i class = "fa fa-reply"></i>
        </button>
        <a class = "btn btn-primary btn-sm text-left pull-right" style = "margin-right: 5px;">
            <strong>View Attachments</strong>
        </a>
        <div class = "pull-left text-center">
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
        <a class = "btn btn-link no-padding btn-lg" href = "<?php echo base_url("user/profile/" . $user->user_id) ?>">
            <strong>
                <?php echo $user->first_name . " " . $user->last_name; ?>
            </strong>
        </a>
        <?php if ($post->post_title): ?>
            <h3 class = "post-content no-padding no-margin"><strong><?php echo $post->post_title; ?></strong></h3>
        <?php endif; ?>
        <p class = "post-content" style = "margin-top: 15px;"><?php echo $post->post_content; ?></p>
        <?php
        foreach ($post->replies as $child):
            $data['post'] = $child;
            $this->load->view('post_replies', $data);
        endforeach;
        ?>
    </div>
</div>