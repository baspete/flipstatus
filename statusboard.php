<!--
TWEETBOARD

This page displays a list of tweets based on the "q" query parameter
in the page url. The parameters should conform to the Twitter
Search API, as documented here:

https://dev.twitter.com/docs/api/1/get/search

The body class is based on the "size" query parameter in the url. If
the "size" parameter is not supplied the page defaults to 1440x900

Examples:

- recent tweets by from or mentioning user "baspete" at 1080p:
  tweetboard.php?q=from:baspete&size=hd1080

- tweets tweets mentioning "baspete" at 1280x1024:
  tweetboard.php?q=@baspete&size=1280x1024

- tweets containing string "palmsprings":
  tweetboard.php?q=palmsprings (defaults to 1440x900)

-->
<?php

  // set number of rows and characters per row based on the "size" url parameter
  $size = $_GET["size"];
  switch($size){
    case "hd1080":     $numRows = 14; $numChars = 51; break;
    case "1280x1024":  $numRows = 15; $numChars = 34; break;
    case "1280x800":   $numRows = 11; $numChars = 34; break;
    case "1366x768":   $numRows = 11; $numChars = 37; break;
    default:           $numRows = 13; $numChars = 39; break; // if not specified use 1440x900
  }
  // get the page title
  $title = str_replace("\\","",$_GET["title"]);
?>
<html>
  <head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="css/split-flap.css"/>
  </head>
  <body class="<?php echo $size ?>">

    <!-- ============================================ -->
    <!-- CONTAINER                                    -->
    <div id="board" class="chartContainer splitflap">

      <h1><?php echo $title ?></h1>

      <!-- Header: 30px/char -->
      <div class="header" style="width:60px;margin-left:0px;">New</div>
      <div class="header" style="width:120px;">Time</div>
      <div class="header" style="width:120px;text-align:left;">Tweet</div>

      <!-- rows will be appended here dynamically from #row_template -->

    </div>
    <!-- END CONTAINER                                -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- ROW TEMPLATE                                 -->
    <script type="text/template" id="row_template">
      <div class="row">
        <div class="group status" style="margin-left:0px;">
          <div class="s0"></div>
          <div class="s1"></div>
        </div>
        <div class="group timestamp"> <!-- timestamp -->
          <div class="number"><span></span></div>
          <div class="number"><span></span></div>
          <div class="number"><span></span></div>
          <div class="number"><span></span></div>
        </div>
        <div class="group text"> <!-- tweet -->
          <?php
            // Insert $numChars character blocks
            for($i=0;$i<$numChars;$i++){
              echo "<div class='full'><span></span></div>";
            }
          ?>
        </div>
      </div>
    </script>
    <!-- END ROW TEMPLATE                             -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- JS LIBRARIES                                 -->
    <script type="text/javascript" src="js/jquery-1.7.1-min.js"></script>
    <script type="text/javascript" src="js/underscore.js"></script>
    <script type="text/javascript" src="js/backbone.js"></script>
    <script type="text/javascript" src="js/split-flap.js"></script>

    <!-- ============================================ -->
    <!-- CUSTOM JS FOR THIS BOARD                     -->
    <script type="text/javascript" src="plugins/twitter/custom.js"></script>
    <script type="text/javascript">

      $("body").click(function(){
        window.history.back();
      });
      $("body").keyup(function(ev){
        if(ev.which === 13) { // 13 is ENTER
          window.history.back();
        }
      });

      // CUSTOMIZATION OPTIONS
      sf.options = {
        // REQUIRED
        "plugin":          "twitter",                   // board type
        "container":       $("#board"),             // where to put the board
        "template":        $("#row_template"),      // row template
        "numRows":         <?php echo $numRows ?>,  // number of rows
        "numChars":        <?php echo $numChars ?>, // number of characters per line

        // OPTIONAL
        "refreshInterval": 30000,                   // how often to refresh the display (ms)
        "stagger":         1500                     // delay between loading rows (ms)
      };

      // initialize the board
      $(document).ready(function() {
        sf.board.init(sf.options);
        sf.items.init(sf.options);
        sf.items.load(sf.options);
      });

    </script>

  </body>
</html>