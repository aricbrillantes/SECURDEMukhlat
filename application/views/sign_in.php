<?php
include('header.php');
?>
<body class = "sign-in">
    <div class = "container-fluid">
        <!-- Logo -->
        <div class = "row sign-in-logo"><i class = "fa fa-users"></i> GetTogether</div>

        <!-- Content -->
        <div class = "row sign-in-content">
            <!--Sign In-->
            <div class = "col-md-6">
                <div class = "col-md-12 sign-in-div">
                    <h3 class = "sign-in-header">Log In</h3>
                    <div class = "sign-in-form">
                        <form action = "signin/login" method = "post">
                            <div class = "form-group">
                                <input type = "text" required name = "log_in_email" class = "form-control sign-in-field" placeholder = "Email">
                            </div>
                            <div class = "form-group">
                                <input type = "password" required name = "log_in_password"  class = "form-control sign-in-field" placeholder = "Password">
                            </div>
                            <div class = "text-center">
                                <button type="submit" class="btn btn-primary" style = "width: 100%;">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Registration-->
            <div class = "col-md-6">
                <div class = "col-md-12 sign-in-div">
                    <h3 class = "sign-in-header">Sign Up</h3>
                    <div class = "sign-in-form">
                        <form action = "signin/signup" method = "post">
                            <div class = "col-xs-6 form-group register-field">
                                <input type = "text" required name = "first_name" class = "form-control sign-in-field" placeholder = "First Name">
                            </div>
                            <div class = "col-xs-6 form-group register-field">
                                <input type = "text" required name = "last_name" class = "form-control sign-in-field" placeholder = "Last Name">
                            </div>
                            <div class = "col-xs-12 form-group register-field">
                                <input type = "email" required name = "sign_up_email" class = "form-control sign-in-field" placeholder = "Email Address">
                            </div>

                            <div class = "col-xs-6 form-group register-field">
                                <input type = "password" required name = "sign_up_password" class = "form-control sign-in-field" placeholder = "Password">
                            </div>
                            <div class = "col-xs-6 form-group register-field">
                                <input type = "password" required class = "form-control sign-in-field" placeholder = "Retype Password">
                            </div>
                            <div class = "text-center">
                                <button class = "btn btn-success" style="width:100%;">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    