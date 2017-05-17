<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<html>
<head>
  <title>Your Website Title</title>
</head>
<body>
 
<div>
  <input type="" name="" id="getID" value="https://www.facebook.com/www.kenhthethao.vn/videos/786333424871039/">
  <input type="button" name="" id="click">
</div>
  <!-- Your embedded video player code -->
  <div id="tesst">
     <div  
    class="fb-video" 
    id="reload" 
    data-href="https://www.facebook.com/choi.tieungao/videos/2069074956638153/" 
    data-width="500" 
    data-height="500"
    data-autoplay="true"
    ></div>
  </div>
 <div id="hunterking">
   
 </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>

    window.fbAsyncInit = function() {
      FB.init({
        appId      : '308405796258812',
        xfbml      : true,
        version    : 'v2.9'
      });
    
      // Get Embedded Video Player API Instance
      var my_video_player;
      FB.Event.subscribe('xfbml.ready', function(msg) {
        if (msg.type === 'video') {
          my_video_player = msg.instance;
        }
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));

    $(document).ready(function () {
    
    $("#click").click(function(event) {

      var url = $("#getID").val();

      var old_ = $(".fb-video").data('href' );


      $(".fb-video").data('href',url );

      console.log(url);
      console.log(old_);



       var str = '<div class="fb-video" data-href="https://www.facebook.com/thehumaneleague/videos/1740263742655957/" data-width="500" data-allowfullscreen="true"></div>';
                $("#hunterking").append(str);
                // facebook.XFBML.parse(document.getElementById("hunterking"));



     // FB.XFBML.parse();
FB.XFBML.parse(document.getElementById('hunterking'));
    }); 
})
    

  </script>
</body>
</html>


