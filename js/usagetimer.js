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
    
    if(getCookie("timeoutTime1") <= nowH.toString())
    {        
//        alert('timeout1.1');
//        if(getCookie("timed")==='0')
//        {      
            if(getCookie("nexttimed1")<nowH.toString())
            {
//                alert('timeout1.2');
                if(getCookie("nexttimed2")<=(nowM-30).toString())
                {
                    alert('timeout1');
                    document.cookie = "lasttimed1=" + now.getHours() +";path=/"; 
                    document.cookie = "lasttimed2=" + now.getMinutes() +";path=/"; 
                    document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
                    document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
                    document.cookie = "timed=1;" + ";path=/"; 
                    $('#timepopup').modal('show');
                }
            }
            
            else
            {
//                alert('timeout1.3');
                if(getCookie("nexttimed1")===nowH.toString())
                {
//                    alert('timeout1.4');
                    if(getCookie("nexttimed2")<(nowM-30).toString())
                    {
                        alert('timeout2');
                        document.cookie = "lasttimed1=" + now.getHours() +";path=/"; 
                        document.cookie = "lasttimed2=" + now.getMinutes() +";path=/"; 
                        document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
                        document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
                        document.cookie = "timed=1;" + ";path=/"; 
                        $('#timepopup').modal('show');
                        
                    }
                }
            }
//        }
    
//        if(getCookie("timed")==='1')
//        {
//            alert('timeout2.1');
//            if(getCookie("nexttimed1")<=nowH.toString())
//            {
//                alert('timeout2.2');
//                if(getCookie("nexttimed1")===nowH.toString())
//                {
//                    alert('timeout2.3');
//                    if(getCookie("nexttimed2")<nowM.toString())
//                    {
//                        alert('timeout2');
//                        document.cookie = "lasttimed1=" + now.getHours() +";path=/"; 
//                        document.cookie = "lasttimed2=" + now.getMinutes() +";path=/"; 
//                        document.cookie = "nexttimed1=" + now2.getHours() +";path=/"; 
//                        document.cookie = "nexttimed2=" + now2.getMinutes() +";path=/"; 
//                    }
//                }
//            }
//        }
    }