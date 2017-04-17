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

    $("#create-topic-proceed").on("click", function() {
        $("#create-topic-form").submit();
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

    $("#create-post-proceed").on("click", function() {
        $("#create-post-form").submit();
    });

    $("#edit-post-btn").on("click", function() {
        if ($("#post-content").val()) {
            $("#post-edit-confirm").modal('show');
            $("#post-title").parent().removeClass("has-error");
            $("#post-content").parent().removeClass("has-error");
        } else {
            if (!$("#post-content").val())
                $("#post-content").parent().addClass("has-error");
            else
                $("#post-content").parent().removeClass("has-error");
        }
    });

    $("#edit-post-proceed").on("click", function() {
        $("#edit-post-form").submit();
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
        $(".follow-label").remove();
        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/topic/follow/" + topic_id,
            type: "POST",
            success: function() {
                if (follow_btn.hasClass("btn-primary")) {
                    //follow
                    follow_btn.removeClass("btn-primary");
                    follow_btn.addClass("btn-danger");
                    follow_btn.html("<i class = \"fa fa-minus-circle\"></i> Unfollow Topic");
                } else if (follow_btn.hasClass("btn-danger")) {
                    //unfollow
                    follow_btn.addClass("btn-primary");
                    follow_btn.removeClass("btn-danger");
                    follow_btn.html("<i class = \"fa fa-plus-circle\"></i> Follow Topic");
                }
            }
        });
    });


    $(".reply-btn").on("click", function() {
        var post_id = $(this).val();
        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/topic/load_post/reply",
            type: "POST",
            dataType: "json",
            data: {post_id: post_id},
            success: function(data) {
                $("#reply-user").html("<strong>Reply to " + data.first_name + "</strong>");
                $("#send-reply-user").html("<strong>Send reply to " + data.first_name + "</strong>");
                $("#create-reply-form").attr("action", window.location.origin + "/GetTogetherBeta/topic/reply/" + data.post_id);
                $("#create-reply-modal").modal("show");
            }
        });
    });

    $("#create-reply-btn").on("click", function() {
        if ($("#reply-content").val()) {
            $("#reply-confirmation-modal").modal('show');
            $("#reply-content").parent().removeClass("has-error");
        } else {
            if (!$("#reply-content").val())
                $("#reply-content").parent().addClass("has-error");
            else
                $("#reply-content").parent().removeClass("has-error");
        }
    });

    $("#create-reply-proceed").on("click", function() {
        $("#create-reply-form").submit();
    });

    $("#topic-share-btn").on("click", function() {
        $("#share-modal").modal("show");
    });

    $("#topic-invite-btn").on("click", function() {
        $("#invitation-modal").modal("show");
    });

    $('.name-share').on('click', function() {
        $("#user-share-count").html($('.name-share:checked').length);
    });

    $('.name-invite').on('click', function() {
        $("#user-invite-count").html($('.name-invite:checked').length);
    });

    $('#share-btn').on('click', function() {
        $("#share-form").submit();
    });

    $('#invite-btn').on('click', function() {
        $("#invite-form").submit();
    })

    $('#edit-topic-btn').on('click', function() {
        $("#desc-edit").toggleClass("hidden");
        $("#desc-container").toggleClass("hidden");
    });

    $('#edit-topic-cancel').on('click', function() {
        $("#desc-edit").addClass("hidden");
        $("#desc-container").removeClass("hidden");
    });

    $('#edit-topic-save').on('click', function() {
        var id = $(this).val();
        var desc = $("#edit-topic-text").val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/edit_topic/' + id,
            type: 'POST',
            data: {topic_description: desc},
            success: function(data) {
                $("#desc-edit").addClass("hidden");
                $("#desc-container").removeClass("hidden");
                $("#desc-container").html(data);
                $("#edit-topic-text").val(data);
            }
        });
    });

    $('#cancel-topic-btn').on('click', function() {
        $("#cancel-topic-modal").modal("show");
    });

    $("#topic-invite-btn").on("click", function() {
        $("#invitation-modal").modal("show");
    });

    $("#topic-apply-btn").on("click", function() {
        var apply_btn = $(this);

        if (apply_btn.hasClass("btn-primary")) {
            $.ajax({
                url: window.location.origin + '/GetTogetherBeta/topic/apply',
                success: function() {
                    apply_btn.removeClass("btn-primary");
                    apply_btn.addClass("btn-gray");
                    apply_btn.html("Pending Moderator Request");
                }
            });
        } else {
            $.ajax({
                url: window.location.origin + '/GetTogetherBeta/topic/apply',
                success: function() {
                    apply_btn.removeClass("btn-danger");
                    apply_btn.removeClass("btn-gray");
                    apply_btn.addClass("btn-primary");
                    apply_btn.html("Apply as a moderator!");
                }
            });
        }
    });

    $("#topic-apply-btn").on("mouseover", function() {
        if ($(this).hasClass("btn-gray")) {
            $(this).removeClass("btn-gray");
            $(this).html("Cancel Moderator Request");
            $(this).addClass("btn-danger");
        }
    });

    $("#topic-apply-btn").on("mouseout", function() {
        if ($(this).hasClass("btn-danger")) {
            $(this).removeClass("btn-danger");
            $(this).addClass("btn-gray");
            $(this).html("Pending Moderator Request");
        }
    });

    $(".remove-follower-btn").on("click", function() {
        var val = $(this).val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/load_remove/' + val + "/1",
            success: function(html) {
                $('#remove-member-confirm').remove();
                $('#topic-page').append(html);
                $('#remove-member-confirm').modal('show');
            }
        });
    });

    $(".remove-mod-btn").on("click", function() {
        var val = $(this).val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/load_remove/' + val + "/2",
            success: function(html) {
                $('#remove-member-confirm').remove();
                $('#topic-page').append(html);
                $('#remove-member-confirm').modal('show');
            }
        });
    });

    $(".remove-creator-btn").on("click", function() {
        var val = $(this).val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/load_remove/' + val + "/3",
            success: function(html) {
                $('#remove-member-confirm').remove();
                $('#topic-page').append(html);
                $('#remove-member-confirm').modal('show');
            }
        });
    });

    $(document).on('click', '#remove-follower-proceed', function() {
        var val = $('#remove-follower-proceed').val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/remove_member/' + val + "/1",
        });
    });

    $(document).on('click', '#remove-moderator-proceed', function() {
        var val = $('#remove-moderator-proceed').val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/remove_member/' + val + "/2",
        });
    });

    $(document).on('click', '#remove-creator-proceed', function() {
        var val = $('#remove-creator-proceed').val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/topic/remove_member/' + val + "/3",
            success: function(){
                window.location = window.location.origin + '/GetTogetherBeta/topic/';
            }
        });
    });
});