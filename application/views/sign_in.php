<?php
include('header.php');
?>
<body class = "sign-in">
    <div class = "container">
        <!-- Logo -->
        <div class = "row sign-in-logo"> <i class = "fa fa-users"></i> GetTogether</div>

        <!-- Content -->
        <!--Sign In-->
        <div class = "row sign-in-div">
            <h3 class = "sign-in-header">Log In</h3>
            <div class = "col-md-12 sign-in-form">
                <form>
                    <div class = "form-group">
                        <input type = "text" class = "form-control sign-in-field" placeholder = "Email">
                    </div>
                    <div class = "form-group">
                        <input type = "password" class = "form-control sign-in-field" placeholder = "Password">
                    </div>
                    <div class = "text-center">
                        <button type="submit" class="btn btn-primary" style = "width: 100%;">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <!--Registration-->
        <div class = "row sign-in-div">
            <h3 class = "sign-in-header">Sign Up</h3>
            <div class = "col-md-12 sign-in-form">
                <form>
                    <div class = "col-md-6 form-group register-field">
                        <input type = "text" class = "form-control sign-in-field" placeholder = "First Name">
                    </div>
                    <div class = "col-md-6 form-group register-field">
                        <input type = "text" class = "form-control sign-in-field" placeholder = "Last Name">
                    </div>
                    <div class = "col-md-12 form-group register-field">
                        <input type = "email" class = "form-control sign-in-field" placeholder = "Email Address">
                    </div>

                    <div class = "col-md-6 form-group register-field">
                        <input type = "password" class = "form-control sign-in-field" placeholder = "Password">
                    </div>
                    <div class = "col-md-6 form-group register-field">
                        <input type = "password" class = "form-control sign-in-field" placeholder = "Retype Password">
                    </div>
                    <div class = "text-center">
                        <button class = "btn btn-success" style="width:100%;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    