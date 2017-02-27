$(document).ready(function() {
    $(".upvote-btn").on("click", function() {
        vote($(this), 1);
    });

    $(".downvote-btn").on("click", function() {
        vote($(this), -1);
    });
});

function vote(vote_btn, vote_type) {
    var data = {vote_type: vote_type};
    var post_id = vote_btn.val();
    var count = vote_btn.siblings(".vote-count");
    var trophy = "<i class = \"fa fa-trophy\"></i>";
    $.ajax({
        url: window.location.origin + "/GetTogetherBeta/topic/vote/" + post_id,
        type: "POST",
        data: data,
        success: function(data) {
            //optimize
            if (vote_type === 1) {
                count.html(data);
                vote_btn.siblings('.downvote-btn').find('span').removeClass("downvote-text");
                vote_btn.find('span').addClass("upvote-text");
                $(".topic-post-entry").each(function() {
                    if (post_id.toString() === $(this).data("value").toString()) {
                        $(this).find(".vote-count").html(data + " " + trophy);
                        $(this).find(".vote-count").removeClass("text-success");
                        $(this).find(".vote-count").removeClass("text-danger");
                        if (parseInt(data) > 0) {
                            $(this).find(".vote-count").addClass("text-success");
                        } else if (parseInt(data) < 0) {
                            $(this).find(".vote-count").addClass("text-danger");
                        }
                        return false;
                    }
                });
            } else if (vote_type === -1) {
                count.html(data);
                vote_btn.siblings('.upvote-btn').find('span').removeClass("upvote-text");
                vote_btn.find('span').addClass("downvote-text");
                $(".topic-post-entry").each(function() {
                    if (post_id.toString() === $(this).data("value").toString()) {
                        $(this).find(".vote-count").html(data + " " + trophy);
                        $(this).find(".vote-count").removeClass("text-success");
                        $(this).find(".vote-count").removeClass("text-danger");
                        if (parseInt(data) < 0) {
                            $(this).find(".vote-count").addClass("text-danger");
                        } else if (parseInt(data) > 0) {
                            $(this).find(".vote-count").addClass("text-success");
                        }
                        return false;
                    }
                });
            }
        }
    });
}