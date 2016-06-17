<?php

require "core.php";
print <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>{$set['game_name']} - $metarst </title>
<meta name="keywords" content="RPG, Online Games, State Street Game" />
<meta name="description" content=" State Street Game " />
<meta name="author" content="Carl " />
<meta name="copyright" content="Copyright {$_SERVER['HTTP_HOST']} " />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link rel="stylesheet" href="css/stylenew.css" type="text/css" />
<link rel='stylesheet' href='css/lightbox.css' type='text/css' media='screen' />
<!--<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>-->

</head>
<body>
    <div id="pagecontainer">
        <!-- Header Part Starts -->
            <div class="headerpart">
<div ><img src ='images/header.jpg'</div>
                <div class="toplist">

                </div>
            </div>


        <!-- //Header Part End -->

        <div class="menu">
        <center>
        <a href="login.php" title="Home"><img src="images/home.jpg" alt="Home" /></a>
        <a href="story.php" title="The Story"><img src="images/story.jpg" alt="The Story" /></a>
        <a href="contact.php" title="Contact Us"><img src="images/contact.jpg" alt="Contact Us" /></a>
        <a href="signup.php" title="Sign Up"><img src="images/signup.jpg" alt="Sign Up" /></a>
        </center>
        </div>
                <!-- Menu Part End -->

         <div class="column1_left">

         <img src="images/logo.png" alt="" />
         </div>

        <!-- Center Part Starts -->
            <div class="centerpart">
                <div class="column1">
                        <div class="col1_top"><img src="images/longStory.jpg" alt="" /></div>

                            <div class="welpart">
<div class="column1_left" style="width:520px;">
                                <div id="story1">
<p style="width:520px;line-height:18px;">

Darkness,<br /><br />

You wake in an abandonned warehouse, on a soiled matteress with no recollection of where you were last night.
<br /><br />

"I must've really tied one on last night at... at..." damnit you can't remember the name of the watering hole you were in. You quickly realise you also have no cash on you.

<br /><br />

You walk outside and something feels different. This doesn't feel like home. You look up and see the corner side read 'State Street'. You walk up to the closest person and ask them for some help. They hand you 100$ and tell you to get lost. "I guess this ain't too bad of a street"

<br /><br />

You quickly gather that 'State Street' is like no other. People will help you, as long as you don't piss them off. You tread carefully around and as your time on 'State Street' extends, you realise you can do anything you want for money. Beg, steal, work or counterfeit. Just don't mess with the wrong people, or they will mess you up.

<br /><br />
Rememeber, you're starting from the bottom here. People who are living on 'State Street' know what they're doing and have been doing it for years. Learn from them and build your own legacy.
  <br /><br />
Sleeping on a dirty matteress isn't your biggest worry. It's sleeping with the fishes.


</p>

</div>


    </div>

    </div>

                </div>

                <div class="column2">
                     <form method="post" action="authenticate.php" name="loginform" id="loginform">

                    <p>Username :<span></span>Password :</p>
                    <div class="formpart">
                            <div class="uname_box"><input type="text" name="username" id="uname" /></div>
                            <div class="uname_box"><input type="password" name="password" id="upass" style="margin-left:7px;"/></div>
                            <div class="loginbtn"><input type="submit" value="Login" title="Login" /></div>
                    </div>


                    <div class="userchoice">
                        <div class="server">
                        </div>
                        <div class="forgot_txt"><input type="checkbox" name="remember" value="1" > Remember &nbsp; <a href="forgot.php" title="Forgot password ?">Forgot password ?</a></div>

                    </div>
                    </form>


  <div class="redbg">
<div class="red_txt1">Total Mobsters:&nbsp;&nbsp;<span> $membs</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Now: <span> $online</span>&nbsp;</div>
<table width='180' border='0' cellspacing='0' cellpadding='0'>
<tr>&nbsp;&nbsp;
<style type='text/css'>
.style1 {
text-align: center;
}
</style>

<div class='style1'>
<h3><u>$gameinfo</h3></u><br>
$players $membs <br>
$mal $male <br>
$fems $fem</div> <br /></td></tr>
</table> <br/>
</div> </div> </div></div> </div> </div> <div class="clear"></div>


EOF;

include "lfooter.php";

?>
