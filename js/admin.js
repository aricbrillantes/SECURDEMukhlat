$(document).ready(function() {
    $(".toggle-account").on("click", function() {
        var btn = $(this);
        $.ajax({
            type: "POST",
            url: "home/account",
            data: {user_id: $(this).val()},
            success: function() {   
                if (btn.hasClass("btn-danger")) {
                    btn.removeClass("btn-danger");
                    btn.addClass("btn-success");
                    btn.html("Enable");
                } else if (btn.hasClass("btn-success")) {
                    btn.removeClass("btn-success");
                    btn.addClass("btn-danger");
                    btn.html("Disable");
                }
            }
        });
    });
    
    $(".record-view-btn").on("click", function(){
        var val = $(this).val();
        $.ajax({
            url: window.location.origin + '/GetTogetherBeta/admin/view_user/' + val,
            success: function(html){
                $("#record-modal").remove();
                $("#admin-page").append(html);
                $("#record-modal").modal("show");
            }
        });
    });
});