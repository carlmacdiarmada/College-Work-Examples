<?php

require "core.php";

print <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>StateStreet Login</title>
<meta name="keywords" content="RPG, Online Games, Online MMORPG Game" />
<meta name="description" content=" State Street- Online RPG Game " />
<meta name="author" content=" " />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="copyright" content="Copyright {$_SERVER['HTTP_HOST']} " />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link rel="icon" href="favicon.ico">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="css/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">

<!-- Header Part Starts -->

</head>

<body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img src="images/logo.png" alt="" height="50" width="100"/>
              <a class="navbar-brand" href="login.php"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="login.php">Home</a></li>
                <li><a href="story.php">Storyline</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="#">Connect With Us</a></li>
                <li><form method="post" action="authenticate.php">
                  <input type="text" name="username" id="uname" class="form-control" placeholder="Username" required autofocus></li>
                  <li><input type="password" name="password" id="upass" class="form-control" placeholder="Password" required></li>
                  <li><button class="btn" type="submit" value="Login" title="Login">Sign in</button></li>
                  <li><a href="forgot.php" title="Forgot password ?">Forgot details?</a></li>
                </form>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="images/header.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Welcome to StateStreet</h1>
                  <p>Where you are your own destiny</p>
                <!--  <p><a class="btn btn-lg btn-primary" href="#" role="button">Login</a></p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up</a></p> -->
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="images/header.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Keep in contact with us</h1>
                  <p>Latest facebook post</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">View More</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="images/header.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>View Gallery</h1>
                  <p>Later</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->

        <!--<u><br>$gameinfo</u><br>
        $players $membs <br>
        $mal $male <br>
        $fems $fem-->
        </div>
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="img-circle" src="images/brawler.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>The Brawler</h2>
              <p>The most feared in town. You've put that work in getting your stats up slowly and now it's time to reap the benefits.
    You can go around attacking players who mocked your strong etiquette and dedication to making your stats better.
    When you defeat your enemies you have the option to mug them, take some of their hard-earned (or dirty) cash for yourself.</p>
            <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="images/criminal.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>The Criminal</h2>
              <p>You see this person in jail a little too often. If you don't see them burning down warehouses for a cut of insurance, you'll be sure to find them in the black market selling the guns and drugs that "were obtained in an illegal fashion".
            <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="images/ceo.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>The CEO</h2>
              <p>You've come a long way from being a Burger Flipper, but you finally have your own franchise built from the ground up and a solid skyscraper on State Street with your name on it. You know how difficult it can be, scraping the bottom of the   barrel, but you appreciate all the scars you've acquired getting
    to the top, now it's time to sit back, relax and let the money roll in.</p>
              <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

          <hr class="featurette-divider">
        <!--
          <div class="row featurette">
          <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">Itll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>

            <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
              <h2 class="featurette-heading">Oh yeah, its that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
            <div class="col-md-5 col-md-pull-7">
              <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">


  -->

  <style type='text/css'>
  .style1 {
  text-align: center;
  }
  </style>
  <div class='style1'>
  Total Mobsters:&nbsp;&nbsp;<span> $membs</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Now: <span> $online</span>&nbsp;
  <table width='180' border='0' cellspacing='0' cellpadding='0'>
  <tr>&nbsp;&nbsp<br><br>


        <!-- Bootstrap core JavaScript
        ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="css/bootstrap.min.js"></script>

      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="css/assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>


EOF;
$IP = $IP = $_SERVER['REMOTE_ADDR'];

if(file_exists('ipbans/'.$IP))
{
die("<b><font color=red size=+1>$ipban</font></b></body></html>");
}
$year=date('Y');

OUT;


include "lfooter.php";


?>
