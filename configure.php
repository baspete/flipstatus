<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flipstatus</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
  </head>

  <body>
 
  <div class="topbar">
    <div class="fill">
      <div class="container">
        <div class="brand">
          <img class="logo" src="img/logo.png" alt="flipstatus - a virtual Solari Board solution"/>
        </div>
      </div>
    </div>    
    <div class="subhead">
      <div class="container">
        <div class="pull-right">
        <ul class="nav">
          <li><a href="#about" data-controls-modal="about">About</a></li>
          <li><a href="mailto:pbutler@basdesign.com" >Contact</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:160px;">

    <form>

      <section id="source">
        <div class="row">
          <div class="span3"><h1>Source</h1></div>
          <div class="span5">
            <h3><img src="img/logos/twitter.png" class="sourceLogo"/>Twitter</h3>
            <p>Enter as many usernames, hashtags and/or words as you'd like, separated by spaces. Flipstatus will search Twitter and return the most recent results.</p>
            <h5>Coming Soon:</h5>
            <img src="img/logos/rss.png" class="sourceLogo" alt="rss"/>
            <img src="img/logos/sms.png" class="sourceLogo" alt="sms"/>
            <img src="img/logos/facebook.png" class="sourceLogo" alt="facebook"/>
            <img src="img/logos/yelp.png" class="sourceLogo" alt="yelp"/>
            <img src="img/logos/foursquare.png" class="sourceLogo" alt="foursquare"/>
            <img src="img/logos/mail.png" class="sourceLogo" alt="mail"/>
          </div>
          <div class="span8">
            <fieldset>
              <input class="span8" type="text" name="twitter" />
              <span class="help-block">
                Example: "@baspete #flipstatus statusboard"
              </span>
              <br/>
              <input type="checkbox" name="noMention" />
              <span>Don't include mentions</span>
            </fieldset>
          </div>
        </div>
      </section>

      <section id="size" style="margin-top:40px;">
        <div class="row">
          <div class="span3"><h1>Size</h1></div>
          <div class="span5">
            <p>Pick the display size of your TV or monitor, or enter a custom height and width.</p>
            <p>Set your browser to <b>FULL SCREEN</b> mode now.</p>
            <p>If you're using an external monitor or HDTV, this is a good time to hook it up.</p>
          </div>
          <div class="span8">

            <div class="clearfix">
              <label>HDTV</label>
              <div class="input">
                <ul class="inputs-list">
                  <li>
                    <label>
                      <input type="radio" name="size" checked="checked" value="hd1080">
                      <span>1080p</span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>

            <div class="clearfix">
              <label>Computer Monitors</label>
              <div class="input">
                <ul class="inputs-list">
                  <li>
                    <label>
                      <input type="radio" name="size" value="1280x1024">
                      <span>1280 x 1024</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="size" value="1280x800">
                      <span>1280 x 800</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="size" value="1440x900">
                      <span>1440 x 900</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="size" value="1366x768">
                      <span>1366 x 768</span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section id="title" style="margin-top:40px;">
        <div class="row">
          <div class="span3"><h1>Title</h1></div>
          <div class="span5">
            <p>Your title will appear at the top of the board.</p>
            <p>If you want to make changes, clicking anywhere on the display or pressing "enter" will bring you back to this page.</p>
          </div>
          <div class="span8">
            <fieldset>
              <input class="span8" type="text" name="title" />
              <span class="help-block">
                Example: "Recent Twitter Activity"
              </span>
            </fieldset>
          </div>
        </div>
      </section>

      <section style="margin-top:40px;">
        <div class="row">
          <div class="span8">&nbsp;</div>
          <div class="span8">
            <button class="btn large primary">Show Me The Board!</button>
          </div>
        </div>
      </section>

    </form>

  </div><!-- /container -->

  <footer>
    <div class="container">
      Copyright 2012 BAS Design, Inc.
    </div>
  </footer>

  <div id="about" class="modal hide fade">
    <div class="modal-header">
      <a href="#" class="close">&times;</a>
      <h3>What Is This Anyway?</h3>
    </div>
    <div class="modal-body">
      <p>Flipstatus is a project from <a href="http://pete.basdesign.com" target="_blank">BAS Design Labs</a>. The idea is to use a simulated <a href="http://en.wikipedia.org/wiki/Split-flap_display" target="_blank">split-flap display</a> to keep track of feeds from around the web. At the moment, it's just Twitter, but soon we'll be adding Facebook, foursquare and Yelp, as well as the ability to pick up RSS feeds, email and SMS messages.</p>
      <p><img src="img/screen_thumb.png" style="float:right;" />This is an open-source project, released under the <a href="LICENSE.txt" target="_blank">MIT License</a>. If you'd like to help make it better, feel free to check out the source code at</p>
      <p><a href="https://github.com/sweetmidget/flipstatus" target="_blank">https://github.com/sweetmidget/flipstatus</a></p>
      <p>Other examples of what can be done can be found in our split-flap project at</p>
      <p><a href="https://github.com/sweetmidget/Split-Flap" target="_blank">https://github.com/sweetmidget/Split-Flap</a></p>
      <p>And you can see working examples of those at <a href="http://dev.basdesign.com/split-flap/" target="_blank">http://dev.basdesign.com/split-flap/</a>.</p>
      <p>If you've got questions or feedback, or you end up building something cool with this we'd love to hear from you. Contact us at pbutler&nbsp;at&nbsp;basdesign&nbsp;dot&nbsp;com.</p>


    </div>
  </div>

  <!-- ============================================ -->
  <!-- JS LIBRARIES                                 -->
  <script type="text/javascript" src="js/jquery-1.7.1-min.js"></script>
  <script type="text/javascript" src="js/bootstrap-modal.js"></script>
  <script type="text/javascript">

    $("document").ready(function(){

      $("#about, #contact").modal({"backdrop":true,"keyboard":true});

      $("form").submit(function(){
        var queryStr = "",
            sep = "";        
        // split twitter input at spaces
        var tWords = $("input[name=twitter]").val().split(" ");
        for(var i=0;i<tWords.length;i++){
          var text = tWords[i];
          if(text.charAt(0) === "@"){
            text = text.substr(1);
            queryStr += sep + "from:"+text+" OR to:"+text;
            // pick up the "mentions" checkbox
            if($("input[name=noMention]:checked").length === 0){
              queryStr += " OR @"+text;
            }
          } else {
            queryStr += sep + text;
          }
          sep = " OR ";
        }
        var size = $("input[name=size]:checked").val();
        // encodeURIComponent to escape hashes
        var title = encodeURIComponent($("input[name=title]").val()); 
        var q = encodeURIComponent(queryStr);
        url = "tweetboard.php?q="+q+"&size="+size+"&title="+title;
        window.location = url;
        return false;
      });
      
    });


  </script>

  </body>
</html>