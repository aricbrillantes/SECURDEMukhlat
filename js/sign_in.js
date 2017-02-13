function log_in() {
    $.ajax({
        type: "POST",
        url: "signin/login",
        data: $("#log-in-form").serialize(),
        success: function(data) {
            if (data === '1') {
                window.location.href = "home";
            } else {
                $("<div class = \"col-md-12 text-center\" style = \"padding-bottom: 10px;\"><span class = \"text-warning\"><i class = \"fa fa-warning\"></i> <i>Invalid username/password! Please try again.</i></span></div>").hide().appendTo("#sign-in-container").show("fast");
            }
        }
    });

    return false;
}

function sign_up() {
    $("#sign-up-message").remove();
    if (check_values()) {
        $.ajax({
            type: "POST",
            url: "signin/signup",
            data: $("#sign-up-form").serialize(),
            success: function(data) {
                $("<div id = \"sign-up-message\" class = \"col-md-12 text-center\" style = \"padding-bottom: 10px;\"><span class = \"text-success\"><i class = \"fa fa-check\"></i> <i>Signing up successful! You can log in now</i></span></div>").hide().appendTo("#sign-up-container").show("fast");
            }, error: function(data){
                alert("error hehe " + data);
            }
        });
    } else {
        $(".password-field").addClass("has-error");
        $("<div id = \"sign-up-message\" class = \"col-md-12 text-center\" style = \"padding-bottom: 10px;\"><span class = \"text-warning\"><i class = \"fa fa-warning\"></i> <i>Passwords do not match!</i></span></div>").hide().appendTo("#sign-up-container").show("fast");
    }
    return false;
}

function check_values() {
    var pass = $("#sign-up-password");
    var retype = $("#sign-up-retype");

    alert(pass.val() + " vs " + retype.val());
    return pass.val() === retype.val();
}