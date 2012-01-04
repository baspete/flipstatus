<!--
TWEETBOARD START

This page helps the user construct a URL query string
which is appended to the tweetboard.php URL
-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/base.css"/>
  </head>
  <body style="background:#000000;">
 
  <div class="topbar">
    <div class="fill">
      <div class="container">
        <div class="brand">
          <img class="logo" src="img/logo.png" alt="flipstatus - a virtual Solari Board solution"/>
        </div>
        <form class="pull-right">
          <button id="tryit" class="btn large primary">Try It!</button>
        </form>
      </div>
    </div>    
    <div class="subhead">
      <div class="container" style="padding:10px 0;">
        TV and laptop sizes available
      </div>
    </div>
    
  </div>

  <div class="container intro"></div>


    <!-- ============================================ -->
    <!-- JS LIBRARIES                                 -->
    <script type="text/javascript" src="js/jquery-1.7.1-min.js"></script>
    <script>
      $("#tryit").click(function(){
        window.location = "configure.php";
        return false;
      });
    </script>

  </body>
</html>