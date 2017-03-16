$(document).ready(function() {
    $(".upvote-btn").on("click", function() {
        vote($(this), 1);
    });

    $(".downvote-btn").on("click", function() {
        vote($(this), -1);
    });

    $(".edit-btn").on("click", function() {
        var post_id = $(this).val();

        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/topic/load_post/edit",
            type: "POST",
            dataType: "json",
            data: {post_id: post_id},
            success: function(data) {
                $("#post-title").val(data.post_title);
                $("#post-content").val(data.post_content);
                $("#edit-post-topic").html("<strong>Edit your post in " + data.topic_name + "</strong>");
                $("#edit-confirm-topic").html("<strong>Save changes made to your post in " + data.topic_name + "</strong>");
                $("#edit-post-form").attr("action", window.location.origin + "/GetTogetherBeta/topic/edit_post/" + data.post_id);
                $("#edit-post-modal").modal("show");
            }
        });
    });

    $("#save-post-btn").on("click", function() {
        if ($("#post-title").val() && $("#post-content").val()) {
            $("#post-edit-confirm").modal('show');
            $("#post-title").parent().removeClass("has-error");
            $("#post-content").parent().removeClass("has-error");
        } else {
            if (!$("#post-title").val())
                $("#post-title").parent().addClass("has-error");
            else
                $("#post-title").parent().removeClass("has-error");

            if (!$("#post-content").val())
                $("#post-content").parent().addClass("has-error");
            else
                $("#post-content").parent().removeClass("has-error");
        }
    });

    $("#edit-post-proceed").on("click", function() {
        $("#edit-post-form").submit();
    });

    $(".delete-btn").on("click", function() {
        var val = $(this).val();
        $("#delete-post-form").attr("action", window.location.origin + "/GetTogetherBeta/topic/delete_post/" + val);
                
        $("#post-delete-confirm").modal("show");
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