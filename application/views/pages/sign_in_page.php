<?php
include(APPPATH . 'views/header.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>

<body class = "sign-in">
    <div class = "container-fluid">
        <!-- Logo -->
        <div class = "row sign-in-logo"><img src = "<?php echo base_url('images/logo/mukhlatlogo1.png'); ?>"></div>

        <!-- Content -->
        <div class = "row sign-in-content">
            <!--Sign In-->
            <div class = "col-md-10 col-md-offset-1" style = "margin-bottom: 2%; ">
                <div id = "sign-in-container" class = "col-md-12 content-container no-padding">
                    <form class = "form-inline" id = "log-in-form" onsubmit = "return log_in()" method = "post">
                        <div class ="form-group">
                            <h3 class = "sign-in-header no-padding no-margin" style = "margin-left: 40px; padding: 10px;"><strong>Log In</strong></h3>
                        </div>
                        <div class = "pull-right" style = "padding-top: 10px; padding-right: 10px; padding-bottom: 10px">
                            <div class = "form-group" style = "margin-right: 5px;">
                                <input id = "log-in-email" type = "text" required name = "log_in_email" class = "form-control sign-in-field" placeholder = "Email"/>
                            </div>
                            <div class = "form-group" style = "margin-right: 5px;">
                                <input id = "log-in-password" type = "password" required name = "log_in_password"  class = "form-control sign-in-field" placeholder = "Password"/>
                            </div>
                            <div class = "form-group text-center">
                                <button type="submit" class="btn btn-primary buttonsgo" style = "width: 100%;font-size:24px;">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--Registration-->
            <div class = "col-md-10 col-md-offset-1">
                <div id = "sign-up-container" class = "col-md-12 content-container no-padding">
                    <div class = "col-md-12 sign-in-div">
                        <center style="padding-bottom: 2%"><a href="#regi" data-toggle="collapse" ><h3 class = "sign-in-header btn btn-success buttonsgo"><strong>Sign Up for Mukhlat!</strong></h3></a></center>
                        <div id="regi" class="collapse">
                        <div class = "sign-in-form">
                            <form id = "sign-up-form" onsubmit = "return sign_up()" method = "post">
                                <div class = "col-xs-6 form-group register-field">
                                    <input type = "text" required name = "first_name" class = "form-control sign-in-field" placeholder = "First Name" maxlength = "25">
                                </div>
                                <div class = "col-xs-6 form-group register-field">
                                    <input type = "text" required name = "last_name" class = "form-control sign-in-field" placeholder = "Last Name" maxlength = "25">
                                </div>
                                <div class = "col-xs-12 form-group register-field">
                                    <input type = "email" required name = "sign_up_email" class = "form-control sign-in-field" placeholder = "Email Address" maxlength = "45">
                                </div>
                                <div class = "col-xs-2 text-center register-field">
                                    <h5 class = "text-muted" style = "font-size:24px;"><strong>Birthday: </strong></h5>
                                </div>
                                <div class = "col-xs-4 form-group register-field">
                                    <input type = "date" required name = "sign_up_birthday" class = "form-control sign-in-field">
                                </div>
                                <div class = "col-xs-1 text-center register-field">
                                    <h5 class = "text-muted" style = "font-size:24px;"><strong>Role: </strong></h5>
                                </div>
                                <div class = "col-xs-5 form-group register-field">
                                    <select class = "form-control" name = "sign_up_role">
                                        <?php foreach ($roles as $role) : ?>
                                            <option style = "font-size:24px;" value="<?php echo $role->role_id; ?>"><?php echo $role->role_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class = "password-field col-xs-6 form-group register-field">
                                        <input id="password1" type = "password" required name = "sign_up_password" class = "form-control sign-in-field sign-up-password" placeholder = "Password" >
                                        <meter max="4" id="password-strength-meter" style="width:100%;"></meter>
                                            <p id="password-strength-text"></p>
                                </div>
                                <div class = "password-field col-xs-6 form-group register-field">
                                    <input id = "sign-up-retype" type = "password" required class = "form-control sign-in-field" placeholder = "Retype Password">
                                </div>
                                <div class = "text-center">
                                    <button type = "submit" class = "btn btn-success buttonsgo" style="width:100%; font-size:24px;">Register</button>
                                </div>
                                
                            </form>
                    </div>
                </div></div>
            </div>
        </div>
    </div>
<script type="text/javascript">
        var strength = {
                0: "Worst ☹",
                1: "Bad ☹",
                2: "Weak ☹",
                3: "Good ☺",
                4: "Strong ☺"
        };

        var password = document.getElementById('password1');
        var meter = document.getElementById('password-strength-meter');
        var text = document.getElementById('password-strength-text');

        password.addEventListener('input', function()
        {
            var val = password.value;
            var result = zxcvbn(val);

            // Update the password strength meter
            meter.value = result.score;

            // Update the text indicator
            if(val !== "") {
                
//                text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<br><span class='feedback'>" + result.feedback.warning + "<br>" + result.feedback.suggestions + "<br></span"; 
                if(strength[result.score]==='Worst ☹')
                    text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<br><span class='feedback'>" + "Your password is very weak!" + "<br>" + "<br></span"; 
                    
                else if(strength[result.score]==='Bad ☹')
                    text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<br><span class='feedback'>" + "Your password is very bad!" + "<br>" + "<br></span"; 
                
                else if(strength[result.score]==='Weak ☹')
                    text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<br><span class='feedback'>" + "Your password is very weak!" + "<br>" + "<br></span"; 
                    
                else if(strength[result.score]==='Good ☺')
                    text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<br><span class='feedback'>" + "Your password is good!" + "<br>" + "<br></span"; 
                    
                 else if(strength[result.score]==='Strong ☺')
                    text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<br><span class='feedback'>" + "Your password is strong!" + "<br>" + "<br></span"; 
              
            }
            else {
                text.innerHTML = "";
            }
        });
</script>
    <script type="text/javascript" src="<?php echo base_url("/js/sign_in.js"); ?>"></script>
</body>
</html>
