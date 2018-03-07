    var now = new Date();
    var now2 = new Date();
    var time = now.getTime();
    var time2 = now.getTime()+(1800 * 1000);
    now.setTime(time);
    now2.setTime(time2);
    
    var nowH = now.getHours().toString();
    var nowM = now.getMinutes().toString();
   
//    alert('nowH '+nowH);
//    alert('nowM '+nowM);

    if(getCookie("nexttimed1")<=nowH.toString() && getCookie("nexttimed1")<=nowH.toString())
    {
            document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
            document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
            document.cookie = "timed=1;" + ";path=/"; 
            $('#timepopup').modal('show');
    }
