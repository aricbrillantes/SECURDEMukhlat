<?php
include(APPPATH . 'views/header.php');

$logged_user = $_SESSION['logged_user'];  

// if user is not logged out, redirect to home_page.php which will 
// then redirect the user to their respective home page
if($logged_user != null)
{
    header("Location: http://localhost/SECURDEMukhlat/home");
}

?>


<script src="<?php echo base_url('zxcvbn-master/dist/zxcvbn.js'); ?>"></script>
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script>document.cookie = "timing=0;" + ";path=/";</script>

<body class = "sign-in">
    <div class = "container-fluid">
        <text style="font-size:22px"><b>SECURDE MP</b><br>Brillantes, Aric<br>Chua, Liam<br>Libay, Iris</text>

        <!-- Logo -->
        <div class = "row sign-in-logo"><img src = "<?php echo base_url('images/logo/mukhlatlogo1.png'); ?>"></div>

        <!-- Content -->
        <div class = "row sign-in-content">
            <!--Sign In-->
            <div class = "col-md-10 col-md-offset-1" style = "margin-bottom: 2%; ">
                <div id = "sign-in-container" class = "col-md-12 content-container no-padding">
                    <form autocomplete="new-password" class = "form-inline" id = "log-in-form" onsubmit = "return log_in()" method = "post">
                        <div class ="form-group">
                            <h3 class = "sign-in-header no-padding no-margin" style = "margin-left: 40px; padding: 10px;"><strong>Log In</strong></h3>
                        </div>
                        <div class = "pull-right" style = "padding-top: 10px; padding-right: 10px; padding-bottom: 10px">
                            <div class = "form-group" style = "margin-right: 5px;">
                                <input autocomplete="new-password" style="font-size: 20px" id = "log-in-email" type = "text" required name = "log_in_email" class = "form-control sign-in-field" placeholder = "Email"/>
                            </div>
                            <div autocomplete="new-password" class = "form-group" style = "margin-right: 5px;">
                                <input autocomplete="new-password" style="font-size: 20px" id = "log-in-password" type = "password" required name = "log_in_password"  class = "form-control sign-in-field" placeholder = "Password"/>
                            </div>
                            <div class = "form-group text-center">
                                <button type="submit" class="btn btn-primary buttonsgo" id="loginbutton" style = "width: 100%;font-size:24px;">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--Registration-->
            <div class = "col-md-10 col-md-offset-1">
                <div id = "sign-up-container" class = "col-md-12 content-container no-padding">
                    <div class = "col-md-12 sign-in-div">
                        <center style="padding-bottom: 2%"><a href="#regi" data-toggle="collapse" ><h3 class = "sign-in-header btn btn-success buttonsgo" style = "font-size:24px;">Sign Up to Mukhlat!</h3></a></center>
                        <div id="regi" class="collapse">
                            <div class = "sign-in-form">
                                <form id = "sign-up-form" onsubmit = "return sign_up()" method = "post">
                                    <div class = "col-xs-10 form-group register-field" style = "font-size:24px;">What is your first name?
                                        <input type = "text" required name = "first_name" class = "form-control sign-in-field" placeholder = "First Name" maxlength = "25">
                                    </div>
                                    <div class = "col-xs-10 form-group register-field" style = "font-size:24px;">What is your last name?
                                        <input type = "text" required name = "last_name" class = "form-control sign-in-field" placeholder = "Last Name" maxlength = "25">
                                    </div>
                                    <div class = "col-xs-10 form-group register-field" style = "font-size:24px;">What is your email?
                                        <input type = "email" required name = "sign_up_email" class = "form-control sign-in-field" placeholder = "Email Address" maxlength = "45">
                                    </div>
                                    <div class = "col-xs-7 form-group register-field" style = "font-size:24px;">When is your birthday:
                                        <input style="height:55px;display:none;" type = "date" required name = "sign_up_birthday" class = "form-control sign-in-field" id="birhdate10"><br>
                                        <select style="width:120px;height:30px" id="DOBMonth" onclick="choosebday()">
                                            <option>Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>

                                        <select style="width:100px;height:30px" id="DOBDay" onclick="choosebday()">
                                            <option>Day</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>

                                        <select style="width:100px;height:30px" id="DOBYear" onclick="choosebday()">
                                            <option>Year</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                    <div  style = "display: none;">
                                        <div class = "col-xs-1 text-center register-field">
                                            <h5 class = "text-muted" style = "font-size:24px;"><strong>Role: </strong></h5>
                                        </div>
                                        <div class = "col-xs-9 form-group register-field">
                                            <select class = "form-control" name = "sign_up_role" style = "font-size:24px;">
                                                <?php foreach ($roles as $role) : ?>
                                                    <option style = "font-size:24px;" value="<?php echo $role->role_id; ?>"><?php echo $role->role_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "password-field col-xs-6 form-group register-field" style = "font-size:24px;">Make a password.
                                        <input style = "font-size:24px;" id="password1" type = "password" required name = "sign_up_password" class = "form-control sign-in-field sign-up-password" placeholder = "Password" >
                                        <meter max="4" id="password-strength-meter" style="width:100%;"></meter>
                                        <p id="password-strength-text"></p>
                                    </div>
                                    <div class = "password-field col-xs-6 form-group register-field" style = "font-size:24px;">Type that password again, just to be sure.
                                        <input style = "font-size:24px;" id = "sign-up-retype" type = "password" required class = "form-control sign-in-field" placeholder = "Retype Password">
                                    </div>
                                    <div class = "text-center">
                                        <button onclick="window.scrollTo(0, document.body.scrollHeight);" id="register" type = "submit" class = "btn btn-success" style="width:100%; font-size:24px;">Register</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--change birthday input-->
        <script>
            function choosebday() {
                var date1 = document.getElementById("DOBDay");
                var month1 = document.getElementById("DOBMonth");
                var year1 = document.getElementById("DOBYear");

                var selectedday = date1.options[date1.selectedIndex].value;
                var selectedmonth = month1.options[month1.selectedIndex].value;
                var selectedyear = year1.options[year1.selectedIndex].value;

                document.getElementById("birhdate10").value = selectedyear + "-" + selectedmonth + "-" + selectedday;
            }
        </script>


        <script>

            document.getElementById('loginbutton').style.background = "#1d8f15";
            document.getElementById('loginbutton').innerHTML = "Log In";
            document.getElementById('loginbutton').style.pointerEvents = "auto";

        </script>

        <!--password strength checker-->
        <script type="text/javascript">
            var strength =
                    {
                        0: "Worst",
                        1: "Bad",
                        2: "Weak",
                        3: "Good",
                        4: "Strong"
                    };

            var password = document.getElementById('password1');
            var meter = document.getElementById('password-strength-meter');
            var text = document.getElementById('password-strength-text');

            password.addEventListener('input', function ()
            {
                var val = password.value;
                var result = zxcvbn(val);

                // Update the password strength meter
                meter.value = result.score;

                // Update the text indicator
                if (val !== "")
                {
                    if (strength[result.score] === 'Worst' && password.value.length > 8)
                    {
                        text.innerHTML = "Strength: " + "<strong style='color:red'>" + strength[result.score] + "</strong>" + "<br><span class='feedback' style='color:red'>" + "Your password is too short! Try using more letters and numbers!" + "<br>" + "<br></span";
                        document.getElementById('register').style.visibility = "hidden";
                    } else if (strength[result.score] === 'Worst' && password.value.length < 8)
                    {
                        text.innerHTML = "Strength: " + "<strong style='color:red'>" + strength[result.score] + "</strong>" + "<br><span class='feedback' style='color:red'>" + "Your password is very easy to crack! Try using different letters and numbers!" + "<br>" + "<br></span";
                        document.getElementById('register').style.visibility = "hidden";
                    } else if (strength[result.score] === 'Bad' && password.value.length < 8)
                    {
                        text.innerHTML = "Strength: " + "<strong style='color:orange'>" + strength[result.score] + "</strong>" + "<br><span class='feedback' style='color:orange'>" + "Your password is still easy to crack! Try using different letters and numbers!" + "<br>" + "<br></span";
                        document.getElementById('register').style.visibility = "hidden";
                    } else if (strength[result.score] === 'Weak')
                    {
                        text.innerHTML = "Strength: " + "<strong style='color:yellow'>" + strength[result.score] + "</strong>" + "<br><span class='feedback' style='color:yellow'>" + "Your password is still easy to crack!" + "<br>" + "<br></span";
                        document.getElementById('register').style.visibility = "hidden";
                    } else if (strength[result.score] === 'Good')
                    {
                        text.innerHTML = "Strength: " + "<strong style='color:green'>" + strength[result.score] + "</strong>" + "<br><span class='feedback' style='color:green'>" + "Your password is good!" + "<br>" + "<br></span";
                        document.getElementById('register').style.visibility = "visible";
                    } else if (strength[result.score] === 'Strong')
                    {
                        text.innerHTML = "Strength: " + "<strong style='color:blue'>" + strength[result.score] + "</strong>" + "<br><span class='feedback' style='color:blue'>" + "Your password is strong!" + "<br>" + "<br></span";
                        document.getElementById('register').style.visibility = "visible";
                    }
                } else
                {
                    text.innerHTML = "";
                    document.getElementById('register').style.display = "visible";
                }
            });
        </script>    

        <script type="text/javascript" src="<?php echo base_url("/js/sign_in.js"); ?>"></script>

</body>
</html>
