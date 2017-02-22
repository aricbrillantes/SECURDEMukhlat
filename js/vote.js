$(document).ready(function() {
    $(".upvote-btn").on("click", function() {
        var data = {vote_type: 1};
        var vote_btn = $(this);
        var post_id = vote_btn.val();
        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/topic/vote/" + post_id,
            type: "POST",
            data: data,
            success: function() {
                vote_btn.siblings(".vote-count").html("up");
            }
        });
    });

    $(".downvote-btn").on("click", function() {
        var data = {vote_type: -1};
        var vote_btn = $(this);
        var post_id = vote_btn.val();
        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/topic/vote/" + post_id,
            type: "POST",
            data: data,
            success: function() {
                vote_btn.siblings(".vote-count").html("down");
            }
        });
    });
});