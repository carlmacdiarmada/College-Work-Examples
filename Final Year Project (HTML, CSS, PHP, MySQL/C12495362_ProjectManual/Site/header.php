<?php

error_reporting(0);
class headers {
function startheaders() {
global $ir, $set;
global $_CONFIG;
define("MONO_ON", 1);
$db=new database;
$db->configure($_CONFIG['hostname'],
$_CONFIG['username'],
$_CONFIG['password'],
$_CONFIG['database'],
$_CONFIG['persistent']);
$db->connect();
$c=$db->connection_id;
$set=array();
$settq=$db->query("SELECT * FROM settings");
while($r=$db->fetch_row($settq))
{
$set[$r['conf_name']]=$r['conf_value'];
}
$q=$db->query("SELECT userid FROM users");
$membs=$db->num_rows($q);
$q=$db->query("SELECT userid FROM users WHERE bankmoney>-1");
$banks=$db->num_rows($q);
$q=$db->query("SELECT userid FROM users WHERE gender='Male'");
$male=$db->num_rows($q);
$q=$db->query("SELECT userid FROM users WHERE gender='Female'");
$fem=$db->num_rows($q);
$money=money_formatter($ir['money']);
$crystals=money_formatter($ir['crystals'],'');
$cn=0;
// Users Online , Counts Users Online In Last 15 minutes
$q=$db->query("SELECT * FROM users WHERE laston>unix_timestamp()-15*60 ORDER BY laston DESC");
$online=$db->num_rows($q);
$ec=$ir['new_events'];
$mc=$ir['new_mail'];

$ids_checkpost=urldecode($_SERVER['QUERY_STRING']);
if(eregi("[\'|'/'\''<'>'*'~'`']",$ids_checkpost) || strstr($ids_checkpost,'union') || strstr($ids_checkpost,'java') || strstr($ids_checkpost,'script') || strstr($ids_checkpost,'substring(') || strstr($ids_checkpost,'ord()')){

$passed=0;
echo "<center> <font color=red> Hack attempt <br/>!!! WARNING !!! <br/>

Malicious Code Detected! The staff has been notified.</font></center>";
event_add(1,"  <a href='viewuser.php?u={$ir['userid']}'>  <font color=red> ".$ir['username']."</font> </a>  <b> Tried to use [".$_SERVER['SCRIPT_NAME']."{$ids_checkpost}].. ",$c);
$h->endpage();
exit;

}


echo <<<EOF
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

<link href="css/dashboard.css" rel="stylesheet">


<!-- Header Part Starts -->
</head>
<body>

<div id="pagecontainer">
<!-- Header Part Starts -->
<div class="headerpart">



</div>
<!-- //Header Part End -->


EOF;
}
function userdata($ir,$lv,$fm,$cm,$dosessh=1)
{
global $db,$c,$userid, $set;
$IP = $_SERVER['REMOTE_ADDR'];
$IP=addslashes($IP);
$IP=mysql_real_escape_string($IP);
$IP=strip_tags($IP);
$db->query("UPDATE users SET laston=unix_timestamp(),lastip='$IP' WHERE userid=$userid");
$_GET['ID'] = abs(@intval($_GET['ID']));
$_GET['reply'] = abs(@intval($_GET['reply']));


if(!$ir['email'])
{
global $domain;
die ("<body>Your account may be broken. Please mail help@tbd.com stating your username and player ID.");
}
if($dosessh && ($_SESSION['attacking'] || $ir['attacking']))
{
print "<CENTER><P><b><font color=red>You lost all your EXP for running from the fight.</font></b></P></CENTER> <br/><br/>";
$db->query("UPDATE users SET exp=0,attacking=0 WHERE userid=$userid");
$_SESSION['attacking']=0;
}
$enperc=(int) ($ir['energy']/$ir['maxenergy']*100);
$wiperc=(int) ($ir['will']/$ir['maxwill']*100);
$experc=(int) ( $ir['exp']/$ir['exp_needed']*100);
$brperc=(int) ($ir['brave']/$ir['maxbrave']*100);
$hpperc=(int) ($ir['hp']/$ir['maxhp']*100);
$enopp=100-$enperc;
$wiopp=100-$wiperc;
$exopp=100-$experc;
$bropp=100-$brperc;
$hpopp=100-$hpperc;
$d="";
$u=$ir['username'];

$gn="";
global $staffpage;

//from here I can change the background colour of the whole site.
$bgcolor = 'D6D6D6';

include "travellingglobals.php";

if($ir['fedjail'])
{
$q=$db->query("SELECT * FROM fedjail WHERE fed_userid=$userid");
$r=$db->fetch_row($q);
die(" <br /><br /><br /><br /><br /> <CENTER><P> <b><font color=red size=+1>You have been put in the State Street Federal Jail for {$r['fed_days']} day(s).<br /> <br />
Reason: {$r['fed_reason']}</font></b> </P></CENTER> </body></html>");
}



print <<<OUT
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
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="navbar-brand" href="viewuser.php?u={$ir['userid']}"><style="color:#f8f8ff;"><b> $gn{$u} [{$ir['userid']}] $d </b></a></li>
            <li><a href="#"><span>Money:</span> {$fm}</a></li>
            <li><a href="#"><span>Crystals:</span> {$cm}</a></li>
            <li><a href="crystaltemple.php?spend=refill"><img src=bar_left.gif height=13><img src=bargreen.gif width=$enperc height=13><img src=barred.gif width=$enopp height=13><img src=bar_fil_end.gif height=13><br /></font>
            <b>Energy:</b> {$enperc}%</a></li>
            <li><a href="#"><img src=bar_left.gif height=13><img src=barblue.gif width=$wiperc height=13><img src=barred.gif width=$wiopp height=13>
            <img src=bar_fil_end.gif height=13><br /><b>Will:</b> {$wiperc}%</a></li>
            <li><a href="#"><img src=bar_left_purp.gif height=13><img src=barpurple.gif width=$brperc height=13>
            <img src=barred.gif width=$bropp height=13><img src=bar_fil_end.gif height=13><br /><b>Guts:</b> {$ir['brave']}/{$ir['maxbrave']} <br /></a></li>
            <li><img src=bar_left.gif height=13><img src=bargreen.gif width=$hpperc height=13>
            <img src=barred.gif width=$hpopp height=13><img src=bar_fil_end.gif height=13><br /><b>HP:</b> {$hpperc}%</a></li>
            </ul>

        </div>
      </div>
    </nav>

  </div>
</div>

<br />
<br />
<!-- Links -->
OUT;
}
function menuarea()
{
include "mainmenu.php";
global $ir,$c;
//this changes the color of the side of the content table in index.php
print '</td><td width="2" class="linegrad" bgcolor="#'.$bgcolor.'">&nbsp;</td><td width="80%"  bgcolor="#'.$bgcolor.'" valign="top"><center>';

if($ir['hospital'])
{
print "<font color='red'><b>NOTE:</b></font> You are currently in hospital for {$ir['hospital']} minutes.<br/><br />";
}
if($ir['jail'])
{
print "<font color='red'><b>NOTE:</b></font> You are currently in jail for {$ir['jail']} minutes.<br/><br />";
}

if($ir['traveltime'] > 0)
{
print "<font color = 'red' /><b>Travelling for <b>{$ir['traveltime']} minutes</b>.</font><br /><br />";
}

if($ir['bguard'] >0)
{
print "<font color='green'><b>NOTE:</b></font> Your Bodyguard is protecting you for {$ir['bguard']} more minutes.<br/><br/>";
}


}
function smenuarea()
{
include "smenu.php";
global $ir,$c;
$bgcolor = '000000';
print '</td><td width="2" class="linegrad" bgcolor="#'.$bgcolor.'"> &nbsp; </td><td width="80%"  bgcolor="#'.$bgcolor.'" valign="top"><center>';
}
function endpage()
{
global $db;

include "footer.php";


}
}
?>
