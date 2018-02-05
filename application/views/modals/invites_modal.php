<?php $logged_user = $_SESSION['logged_user']; ?>
<!-- Notification Modal -->
<head>

<style>
/* The Close Button */
.close12 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close12:hover,
.close12:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.selected{ 
   box-shadow:0px 0px 0px 5px #000;
}
</style>

</head>

<div id="customize-theme" class="modal fade" role="dialog" onload="addBGsound(getCookie('soundbg1'))">
    <div class="modal-dialog">
        <!-- Notification Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading">
                <button type="button" class="close12" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><strong>Invites</strong></h4>
            </div>
            <div class="modal-body">
                <div class = "row">
                    <div class = "col-md-12">
                        <ul class="nav nav-pills nav-justified" style = "margin-bottom: 10px;">
                            <li class = "active"><a data-toggle="pill" href="#requests-div"><strong>Moderator Requests</strong></a></li>
                            <li><a data-toggle="pill" href="#invites-div"><strong>Moderator Invites</strong></a></li>
                        </ul>
                    </div>
                    <div class = "col-md-12">
                        <div class="tab-content">
                            <div id="requests-div" class="tab-pane fade in active">
                                <table><tr><td><div id="green" class="blocks" onClick="changeBGColor('#D7eadd', 'green','#d13030');">Green</div></td>
                                <td><div id="blue" class="blocks" onClick="changeBGColor(':#CBF9F3', '#5BC0EB','#d13030');">Blue</div></td>
                                <td><div id="pink" class="blocks" onClick="changeBGColor(':#feecf2', '#F6B8B8','#d13030');">Pink</div></td>
                                <td><div id="orange" class="blocks" onClick="changeBGColor(':#FCF7D1', '#FF7F51','#d13030');">Orange</div></td>
                                <td><div id="violet" class="blocks" onClick="changeBGColor(':#e6e6fa', '#512da8','#d13030');">Violet</div></td>
                                </tr>
                                <!-- flame, horizon, sky, piglet-->
                                <tr>
                                <td><div id="strawberry" class="blocks" onClick="changeBGColor(':#d13030', 'green','#d13030');">Strawberry</div></td>
                                <td><div id="sky" class="blocks" onClick="changeBGColor(':linear-gradient(to top, #5BC0EB, #CBF9F3);', 'white','#5BC0EB');">Sky</div></td>
                                <td><div id="watermelon" class="blocks" onClick="changeBGColor(':linear-gradient(to top, #f96868 80%, white);', 'green','#d13030');">Watermelon</div></td>
                                <td><div id="chocoice" class="blocks" onClick="changeBGColor(':#ffe3b9', '#6b3e26', '#6b3e26');"><div style="color:white;">Chocolate</div> Ice cream</div></td>
                                <td><div id="FB" class="blocks" onClick="changeBGColor(':#e9ebee', '#4267b2', '#4267b2');">fb</div></td>
                                </tr>
                                <!-- image and more backgrounds-->
                                <tr>
                                <!--<td><div id="strawberry" class="blocks" onClick="changeBGColor('-image: url(<?php echo base_url('images/galaxy.jpg'); ?>)', 'green','#d13030');">Galaxy</div></td>-->
                                <td><div id="rainbow" class="blocks" onClick="changeBGColor(':linear-gradient(124deg, #ff2400, #e81d1d, #e8b71d, #e3e81d, #1de840, #1ddde8, #2b1de8, #dd00f3, #dd00f3);', 'white','#5BC0EB');">Rainbow</div></td>
                                <!--<td><div id="watermelon" class="blocks" onClick="changeBGColor(':linear-gradient(to top, #f96868 80%, white);', 'green','#d13030');">Watermelon</div></td>-->
                                <td><div id="soundswitch" class="blocks" onClick="addBGsound('none');">No Sound</div>
                                <div id="soundswitch1" class="blocks" onClick="addBGsound('block');">Sound</div>
                                </td>
                                </tr>
                                </table><input type="button" value="Change Theme" onClick="window.location.reload()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    document.cookie = "backgroundColor1=" + getCookie("backgroundColor") + ";" + ";path=/";  
    document.cookie = "NavbarColor1=" + getCookie("NavbarColor") + ";" + ";path=/";  
    document.cookie = "ButtonColor1=" + getCookie("ButtonColor") + ";" + ";path=/";  
    function changeBGColor(value, value2, value3)
                    {
                        //var d = new Date();
                        //d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
                        //var expires = "expires="+d.toUTCString();
                        
                        document.cookie = "backgroundColor=" + value + ";" + ";path=/";   
                        document.cookie = "NavbarColor=" + value2 + ";" + ";path=/"; 
                        document.cookie = "ButtonColor=" + value3 + ";" + ";path=/"; 
                        
                    }

    function addBGsound(value)
                    {var x = document.getElementById("soundswitch1");
                     var y = document.getElementById("soundswitch");
                        if (x.style.display === "none") {
                        x.style.display = "block";
                        y.style.display = "none";}
                        else {
                        x.style.display = "none";
                        y.style.display = "block";
                        }
                    
                        document.cookie = "soundbg1=" + value + ";" + ";path=/";   

                    }
    function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
   $('.blocks').click(function(){
   $('.selected').removeClass('selected'); // removes the previous selected class
   $(this).addClass('selected'); // adds the class to the clicked image
});
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close12")[0];
var modal = document.getElementById('customize-theme');

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.cookie = "backgroundColor=" + getCookie("backgroundColor1") + ";" + ";path=/";  
    document.cookie = "NavbarColor=" + getCookie("NavbarColor1") + ";" + ";path=/";  
    document.cookie = "ButtonColor=" + getCookie("ButtonColor1") + ";" + ";path=/";  
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        document.cookie = "backgroundColor=" + getCookie("backgroundColor1") + ";" + ";path=/";  
        document.cookie = "NavbarColor=" + getCookie("NavbarColor1") + ";" + ";path=/";  
        document.cookie = "ButtonColor=" + getCookie("ButtonColor1") + ";" + ";path=/";  
    }
};
</script>