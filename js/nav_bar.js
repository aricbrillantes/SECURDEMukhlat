$(document).ready(function() {
    $.ajax({
        url: window.location.origin + "/GetTogetherBeta/notifications",
        context: document.body
    });
    
    $("#nav-logo").on("mouseover", function() {
        $(this).attr('src', window.location.origin + '/GetTogetherBeta/images/logo/logo-blue-hover.png');
    });

    $("#nav-logo").on("mouseout", function() {
        $(this).attr('src', window.location.origin + '/GetTogetherBeta/images/logo/logo-blue.png');
    });

    $("#notif-btn").on("click", function() {
        var notif_count = $("#notif-btn").data("value");
        $.ajax({
            url: window.location.origin + "/GetTogetherBeta/notifications/read",
            success: function() {
                $("#notif-badge").remove();
                var new_notif_count = $("#notif-label").html() - notif_count;
                if (new_notif_count === 0) {
                    $("#notif-label").remove();
                } else {
                    $("#notif-label").html(new_notif_count);
                }
            }
        });
    });
    
    //invite btn
});