<!--
TWEETBOARD START

This page helps the user construct a URL query string
which is appended to the tweetboard.php URL
-->
<html>
  <head>
  <!--
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
  -->
    <link rel="stylesheet" href="css/base.css"/>
    <style type="text/css">
      body {
        padding: 100px 300px;
      }
      label {
        float: left;
        font-size: 24pt;
      }
      .value {
        margin-left: 200px;
        font-size: 24pt;
        margin-bottom: 30px;
      }
      input {
        font-size: 24pt;
        vertical-align: middle;
      }
      .prepend {
        display: inline-block;
        width: 30px;
        text-align: right;
      }
      #createBoard {
        font-size: 24pt;
        font-weight: bold;
        border: 1px solid white;
        padding: 10px;
        border-radius: 10px;
        margin-left: 300px;
      }

    </style>

  </head>
  <body>

    <h1>FlipStatus</h1>
    <form>
      <div class="user">
        <label>User</label>
        <div class="value">
          <span class="prepend">@</span>
          <input type="text" name="user"/>
          <input type="checkbox" name="to"/> to
          <input type="checkbox" name="mentions"/>mentions
        </div>
      </div>
      
      <div class="hashtag">
        <label>Hashtag</label>
        <div class="value">
          <span class="prepend">#</span>
          <input type="text" name="hashtag"/>
        </div>
      </div>

      <div class="text">
        <label>Text</label>
        <div class="value">
          <span class="prepend">&nbsp;</span>
          <input type="text" name="text"/>
          <input type="checkbox" name="exact"/> Exact phrase
        </div>  
      </div>

      
      <div class="place">
        <label>Place</label>
        <div class="value">
          <span class="prepend">&nbsp;</span>
          <input type="text" name="place"/>
          <input type="radio" name="placeType" value="opentable"/>Open Table Id
          <input type="radio" name="placeType" value="twitterplace"/>Twitter Id
        </div>
      </div>

      <br/><br/><br/><a href="#" id="createBoard"/>Show</a>
    </form>
  
    <!-- ============================================ -->
    <!-- JS LIBRARIES                                 -->
    <script type="text/javascript" src="js/jquery-1.7.1-min.js"></script>
    <script type="text/javascript" src="js/underscore.js"></script>
    <script type="text/javascript" src="js/backbone.js"></script>
    <script type="text/javascript">

      $("input[name=type]").click(function(){
        $(this).closest("div").siblings().find("form").find("input").attr("disabled","disabled");
        $(this).closest("div").find("form").find("input").removeAttr("disabled");
      });
      
      $("#createBoard").click(function(){
        var queryStr = "";
        var separator = "";
        var user = $("input[name=user]").val();
        var hashtag = $("input[name=hashtag]").val();
        var text = $("input[name=text]").val();
        var place = $("input[name=place]").val();

        if(user.length > 0){
          queryStr += separator + "from:"+user;
          separator = " OR ";
          if($("input[name=mentions]").attr("checked") === "checked"){
            queryStr += separator + "@"+user;
          }
          if($("input[name=to]").attr("checked") === "checked"){
            queryStr += separator + "to:"+user;
          }
        } 

        if(hashtag.length > 0){
          queryStr += separator + "#"+hashtag;
          separator = " OR ";
        }

        if(text.length > 0){
          if($("input[name=exact]").attr("checked") === "checked"){
            text = "'" + text + "'";
          }
          queryStr += separator + text;
          separator = " OR ";
        }

        if(place.length > 0){
          if($("input[name=placeType]").val() === "opentable"){
            place = "opentable:"+place;
          }
          queryStr += separator + "place:"+place;
          separator = " OR ";
        }

        url = "tweetboard.php?q="+encodeURIComponent(queryStr);
        // console.log(url);
        window.location = url;
        return false;
      });

    </script>
  </body>
</html>