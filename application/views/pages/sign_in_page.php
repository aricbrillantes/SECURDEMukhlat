<?php
include(APPPATH . 'views/header.php');
?>
<body class = "sign-in">
    <div class = "container-fluid">
        <!-- Logo -->
        <div class = "row sign-in-logo"><i class = "fa fa-users"></i> GetTogether</div>

        <!-- Content -->
        <div class = "row sign-in-content">
            <!--Sign In-->
            <div class = "col-md-6">
                <div id = "sign-in-container" class = "col-md-12 content-container no-padding">
                    <div class = "col-md-12 sign-in-div">
                        <h3 class = "sign-in-header">Log In</h3>
                        <div class = "sign-in-form">
                            <form id = "log-in-form" onsubmit = "return log_in()" method = "post">
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
            </div>

            <!--Registration-->
            <div class = "col-md-6">
                <div id = "sign-up-container" class = "col-md-12 content-container no-padding">
                    <div class = "col-md-12 sign-in-div">
                        <h3 class = "sign-in-header">Sign Up</h3>
                        <div class = "sign-in-form">
                            <form id = "sign-up-form" onsubmit = "return sign_up()" method = "post">
                                <div class = "col-xs-6 form-group register-field">
                                    <input type = "text" required name = "first_name" class = "form-control sign-in-field" placeholder = "First Name">
                                </div>
                                <div class = "col-xs-6 form-group register-field">
                                    <input type = "text" required name = "last_name" class = "form-control sign-in-field" placeholder = "Last Name">
                                </div>
                                <div class = "col-xs-12 form-group register-field">
                                    <input type = "email" required name = "sign_up_email" class = "form-control sign-in-field" placeholder = "Email Address">
                                </div>
                                <div class = "col-xs-2 text-center register-field">
                                    <h5 class = "text-muted"><strong>Birthday: </strong></h5>
                                </div>
                                <div class = "col-xs-6 form-group register-field">
                                    <input type = "date" required name = "sign_up_birthday" class = "form-control sign-in-field">
                                </div>
                                <div class = "col-xs-1 text-center register-field">
                                    <h5 class = "text-muted"><strong>Role: </strong></h5>
                                </div>
                                <div class = "col-xs-3 form-group register-field">
                                    <select class = "form-control">
                                        <?php foreach ($roles as $role) : ?>
                                            <option value="<?php echo $role->role_id; ?>"><?php echo $role->role_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class = "password-field col-xs-6 form-group register-field">
                                    <input id = "sign-up-password" type = "password" required name = "sign_up_password" class = "form-control sign-in-field" placeholder = "Password">
                                </div>
                                <div class = "password-field col-xs-6 form-group register-field">
                                    <input id = "sign-up-retype" type = "password" required class = "form-control sign-in-field" placeholder = "Retype Password">
                                </div>
                                <div class = "text-center">
                                    <button type = "submit" class = "btn btn-success" style="width:100%;">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url("/js/sign_in.js"); ?>"></script>
    <!-- END SCRIPTS -->
    <?php
    include(APPPATH . 'views/footer.php');
    