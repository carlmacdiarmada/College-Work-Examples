<?php

require "core.php";
print <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>{$set['game_name']} - $metacu </title>
<meta name="keywords" content="RPG, Online Games, State Street Game" />
<meta name="description" content=" State Street Game" />
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
        <!-- Menu Part End -->


        <!-- Center Part Starts -->
            <div class="centerpart">
                <div class="column1">
                            <div class="welpart">
<div class="column1_left" style="width:520px;">
                                <div id="story1">
<p style="width:520px;line-height:18px;">

<img src="images/contactDetails.jpg" alt="" />

</p>

Here at State Street we are always looking for ideas and ways to improve gameplay for YOU the player. If you have any issues, queries, or suggestions<br />
Please do not hesitate to contact us at info@statestreetgame.com<br />

We aim to answer all queries and questions within 1 working day, but sometimes this does not work as we get quite busy. If you do not hear from us within 1 day please contact a staff memeber who will raise it with an administrator
<br /><br />

Thank you for your continued support<br />
State Street Team.

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
