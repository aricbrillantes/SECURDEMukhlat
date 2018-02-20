<?php $logged_user = $_SESSION['logged_user']; ?>
<!-- Notification Modal -->
<head>

<style>
.selected{ 
   box-shadow:0px 0px 0px 5px #000;
}

</style>

</head>

<div id="customize-theme" class="modal fade" role="dialog" onload="addBGsound(getCookie('soundbg1'))">
    <div class="modal-dialog">
        <!-- Notification Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading modalbg">
                <button type="button" class="close close12" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"><strong>Themes</strong></h4>
            </div>
            <div class="modal-body">
                <div class = "row">
                    <div class = "col-md-12">
                        <ul class="nav nav-pills nav-justified" style = "margin-bottom: 10px;">
                            <li class = "active"><a data-toggle="pill" href="#requests-div"><strong>Themes</strong></a></li>
                            <li><a data-toggle="pill" href="#invites-div"><strong>Extras</strong></a></li>
                        </ul>
                    </div>
                    <div class = "col-md-12">
                        <div class="tab-content">
                            <div id="requests-div" class="tab-pane fade in active">
                                <table style="width:100%"><tr><td><div id="green" class="blocks" onClick="changeBGColor(':#D7eadd', 'green','#1d8f15', '#14620f', '#185729');">Green</div></td>
                                <td><div id="blue" class="blocks" onClick="changeBGColor(':#CBF9F3', '#5BC0EB','#3fa0e5', '#1b7ec5', '#198bdf', '#1578c1');">Blue</div></td>
                                <td><div id="pink" class="blocks" onClick="changeBGColor(':#feecf2', '#F6B8B8','#f7aec4','#f07197', '#f95d9b', '#e80862');">Pink</div></td>
                                <td><div id="orange" class="blocks" onClick="changeBGColor(':#FCF7D1', '#FF7F51','#ed8023', '#bd5f0f', '#9d4f0d');">Orange</div></td>
                                <td><div id="violet" class="blocks" onClick="changeBGColor(':#e6e6fa', '#512da8','#8a49df', '#a2158e', '#660d5a');">Violet</div></td>
                                </tr>
                                <!-- flame, horizon, sky, piglet-->
                                <tr>
                                <td><div id="strawberry" class="blocks" onClick="changeBGColor(':#d13030', 'green','#d13030');">Strawberry</div></td>
                                <td><div id="sky" class="blocks" onClick="changeBGColor(':linear-gradient(to top, #5BC0EB, #CBF9F3);', 'whitesmoke','#5BC0EB');">Sky</div></td>
                                <td><div id="watermelon" class="blocks" onClick="changeBGColor(':linear-gradient(to top, #f96868 80%, white);', 'green','#d13030');">Watermelon</div></td>
                                <td><div id="chocoice" class="blocks" onClick="changeBGColor(':#ffe3b9', '#6b3e26', '#6b3e26');"><div style="color:white;">Chocolate</div> Ice cream</div></td>
                                <td><div id="FB" class="blocks" onClick="changeBGColor(':#e9ebee', '#4267b2', '#4267b2');">fb</div></td>
                                </tr>
                                <!-- image and more backgrounds-->
                                <tr>
                                <td><div id="galaxy" class="blocks" onClick="changeBGColor('-image: url(<?php echo base_url('images/galaxy.jpg'); ?>)', 'black','black');">Galaxy</div></td>
                                <td><div id="rainbow" class="blocks" onClick="changeBGColor(':linear-gradient(124deg, #ff2400, #e81d1d, #e8b71d, #e3e81d, #1de840, #1ddde8, #2b1de8, #dd00f3, #dd00f3);', '#5BC0EB','#5BC0EB');">Rainbow</div></td>
                                <!--<td><div id="watermelon" class="blocks" onClick="changeBGColor(':linear-gradient(to top, #f96868 80%, white);', 'green','#d13030');">Watermelon</div></td>-->
<!--                            <td><div id="soundswitch" class="blocks" onClick="addBGsound('none');">No Sound</div></td>
                                <td><div id="soundswitch1" class="blocks" onClick="addBGsound('block');">Sound</div>
                                </td>-->
                                </tr>
                                <tr><td>&nbsp</td></tr>
                                <tr><td colspan="5"><center><input class="btn btn-primary buttonsbgcolor" type="button" value="Done!" onClick="window.location.reload()"></center></td></tr>
                                </table>
                            </div>
                            <div id="invites-div" class="tab-pane fade in">
                                <table style="width:100%"><tr>
<!--                                <td><div id="soundswitch" class="blocks" onClick="addBGsound('none');">No Sound</div></td>
                                <td><div id="soundswitch1" class="blocks" onClick="addBGsound('block');">Sound</div>-->
                                <td><div class="blocks" onClick="addBGsound('none');addBGspark('none');addBGsnow('none');addBGbubble('none');">None</div></td>
                                <td><div class="blocks" onClick="addBGsound('block');">Sound</div></td>
                                <td><div class="blocks" onClick="addBGsnow('block');">Snowflake</div></td>
                                <td><div class="blocks" onClick="addBGspark('block');">Sparkles</div>
                                </td>
                                <td><div class="blocks" onClick="addBGbubble('block');">Bubbles</div>
                                </td>
                                </tr>
                                <tr><td>&nbsp</td></tr>
                                <tr><td colspan="4"><center><input class="btn btn-primary buttonsbgcolor" type="button" value="Done!" onClick="window.location.reload()"></center></td></tr>
                                </table>
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
    document.cookie = "ButtonHColor1=" + getCookie("ButtonHColor") + ";" + ";path=/";
    document.cookie = "ButtonAColor1=" + getCookie("ButtonAColor") + ";" + ";path=/"; 
    function changeBGColor(value, value2, value3, value4, value5)
                    {
                        //var d = new Date();
                        //d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
                        //var expires = "expires="+d.toUTCString();
                        
                        document.cookie = "backgroundColor=" + value + ";" + ";path=/";   
                        document.cookie = "NavbarColor=" + value2 + ";" + ";path=/"; 
                        document.cookie = "ButtonColor=" + value3 + ";" + ";path=/"; 
                        document.cookie = "ButtonHColor=" + value4 + ";" + ";path=/";
                        document.cookie = "ButtonAColor=" + value5 + ";" + ";path=/";
                    }

    function addBGsound(value)
                    {
//                     var x = document.getElementById("soundswitch1");
//                     var y = document.getElementById("soundswitch");
//                        if (x.style.display === "none") {
//                        x.style.display = "block";
//                        y.style.display = "none";}
//                        else {
//                        x.style.display = "none";
//                        y.style.display = "block";
//                        }
                    
                        document.cookie = "soundbg1=" + value + ";" + ";path=/";   

                    }
                    
        function addBGsnow(value)
                    {                    
                        document.cookie = "snowflakebg1=" + value + ";" + ";path=/";   
                    }
                    
        function addBGspark(value){
            document.cookie = "sparklebg1=" + value + ";" + ";path=/";
        }
        function addBGbubble(value){
            document.cookie = "bubblesbg1=" + value + ";" + ";path=/";
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
    document.cookie = "ButtonHColor=" + getCookie("ButtonHColor1") + ";" + ";path=/";
    document.cookie = "ButtonAColor=" + getCookie("ButtonAColor1") + ";" + ";path=/";  
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        document.cookie = "backgroundColor=" + getCookie("backgroundColor1") + ";" + ";path=/";  
        document.cookie = "NavbarColor=" + getCookie("NavbarColor1") + ";" + ";path=/";  
        document.cookie = "ButtonColor=" + getCookie("ButtonColor1") + ";" + ";path=/";
        document.cookie = "ButtonHColor=" + getCookie("ButtonHColor1") + ";" + ";path=/";
        document.cookie = "ButtonAColor=" + getCookie("ButtonAColor1") + ";" + ";path=/";  
    }
};
</script>