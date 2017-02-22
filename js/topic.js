//from stackoverflow
$(document).on('show.bs.modal', '.modal', function() {
    var zIndex = 1040 + (10 * $('.modal:visible').length);
    $(this).css('z-index', zIndex);
    setTimeout(function() {
        $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
    }, 0);
});
$(document).on('hidden.bs.modal', '.modal', function() {
    $('.modal:visible').length && $(document.body).addClass('modal-open');
});

$(document).ready(function() {
    $("#create-topic-btn").on("click", function() {
        if ($("#topic-title").val() && $("#topic-description").val()) {
            $("#create-confirmation-modal").modal('show');
            $("#topic-title").parent().removeClass("has-error");
            $("#topic-description").parent().removeClass("has-error");
        } else {
            if (!$("#topic-title").val())
                $("#topic-title").parent().addClass("has-error");
            else
                $("#topic-title").parent().removeClass("has-error");

            if (!$("#topic-description").val())
                $("#topic-description").parent().addClass("has-error");
            else
                $("#topic-description").parent().removeClass("has-error");
        }
    });

    $("#create-post-btn").on("click", function() {
        if ($("#post-title").val() && $("#post-content").val()) {
            $("#post-confirmation-modal").modal('show');
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

    $("#create-topic-proceed").on("click", function() {
        $("#create-topic-form").submit();
    });

    $("#create-post-proceed").on("click", function() {
        $("#create-post-form").submit();
    });

    $(".topic-post-entry").on("click", function() {
        var post_id = $(this).data("value")
        //remove div
        $("#post-preview").remove();

        $("#no-preview").hide('slow', function() {
            $(this).remove();
        });

        //get post preview
        $.post(window.location.origin + "/GetTogetherBeta/topic/preview/" + post_id,
                function(html) {
                    $(html).hide().prependTo("#preview-div").show("slow");
                }
        );

    });

    $("#topic-follow-btn").on("click", function() {
        var follow_btn = $(this);
        var topic_id = follow_btn.val();
        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/topic/follow/" + topic_id,
            type: "POST",
            success: function(name) {
                if (follow_btn.hasClass("btn-primary")) {
                    //follow
                    follow_btn.removeClass("btn-primary");
                    follow_btn.addClass("btn-danger");
                    follow_btn.html("<i class = \"fa fa-minus-circle\"></i> Unfollow Topic");
                    $("<span class = \"pull-right label label-info\" style = \"margin-top: 10px; font-size: 16px;\"><i>You have followed "
                            + name + "!</i></span>").hide().appendTo("#topic-heading").fadeIn('slow').delay(2000).fadeOut('slow');
                } else if (follow_btn.hasClass("btn-danger")) {
                    //unfollow
                    follow_btn.addClass("btn-primary");
                    follow_btn.removeClass("btn-danger");
                    follow_btn.html("<i class = \"fa fa-plus-circle\"></i> Follow Topic");
                    $("<span class = \"pull-right label label-danger\" style = \"margin-top: 10px; font-size: 16px;\"><i>You have unfollowed "
                            + name + "!</i></span>").hide().appendTo("#topic-heading").fadeIn('slow').delay(2000).fadeOut('slow');
                }
            }
        });
    });
});