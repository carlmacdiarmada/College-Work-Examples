<?php

require "core.php";

print <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>{$set['game_name']} - $metal </title>
<meta name="keywords" content="RPG, Online Games, Online MMORPG Game" />
<meta name="description" content=" State Street- Online RPG Game " />
<meta name="author" content=" " />
<meta name="copyright" content="Copyright {$_SERVER['HTTP_HOST']} " />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link rel="stylesheet" href="css/stylenew.css" type="text/css" />
<link rel='stylesheet' href='css/lightbox.css' type='text/css' media='screen' />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>

</head>
<body >
<div id="pagecontainer">


<!-- Header Part Starts -->


<div class="headerpart">
<div ><center><img src ='images/header.jpg'</center></div>
</div>





<!-- //Header Part End -->

<!-- Menu Part Starts -->

<br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/>
<div class="menu">
<center>
<a href="login.php" title="Home"><img src="images/home.jpg" alt="Home" /></a>
<a href="story.php" title="The Story"><img src="images/story.jpg" alt="The Story" /></a>
<a href="contact.php" title="Contact Us"><img src="images/contact.jpg" alt="Contact Us" /></a>
<a href="signup.php" title="Sign Up"><img src="images/signup.jpg" alt="Sign Up" /></a>
</center>
</div>

<!-- Menu Part End -->
<!-- Center Part Starts -->
<center><div class="centerpart">
<div class="column1">
<div class="welpart">
<div class="column1_left">
<img src="images/logo.png" alt="" /></center>
<p> {$set['game_description']}</p>

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



<div class="userchoice">
<div class="server">
</div>
<div class="forgot_txt"><input type="checkbox" name="remember" value="1" > Remember &nbsp; <a href="forgot.php" title="Forgot password ?">Forgot password ?</a></div>

</div>
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
</div> </div> </div> </div></div>
</div>
<div class="clear">
</div>

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
