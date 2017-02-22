$(document).ready(function(){
   $("#nav-logo").on("mouseover",function(){
       $(this).attr('src', window.location.origin + '/GetTogetherBeta/images/logo/logo-blue-hover.png');
   });
   
   $("#nav-logo").on("mouseout",function(){
       $(this).attr('src', window.location.origin + '/GetTogetherBeta/images/logo/logo-blue.png');
   });
});