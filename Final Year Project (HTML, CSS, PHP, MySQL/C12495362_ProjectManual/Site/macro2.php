<?php

session_start();
if(get_magic_quotes_gpc() == 0)
{
foreach($_POST as $k => $v)
{
  $_POST[$k]=addslashes($v);
}
foreach($_GET as $k => $v)
{
  $_GET[$k]=addslashes($v);
}
}
require "global_func.php";
if($_SESSION['loggedin']==0) { header("Location: login.php");exit; }
$userid=$_SESSION['userid'];
include "config.php";
include "language.php";
global $_CONFIG;
define("MONO_ON", 1);
require "class/class_db_{$_CONFIG['driver']}.php";
$db=new database;
$db->configure($_CONFIG['hostname'],
 $_CONFIG['username'],
 $_CONFIG['password'],
 $_CONFIG['database'],
 $_CONFIG['persistent']);
$db->connect();
$c=$db->connection_id;
$is=$db->query("SELECT u.*,us.* FROM users u LEFT JOIN userstats us ON u.userid=us.userid WHERE u.userid=$userid");
$ir=$db->fetch_row($is);
$set=array();
$settq=$db->query("SELECT * FROM settings");
while($r=$db->fetch_row($settq))
{
$set[$r['conf_name']]=$r['conf_value'];
}
if(!$set['validate_on'] || $ir['verified'])
{
die("WTF are you doing on this page? Go home losr.");
}
if(!isset($_SESSION['captcha']))
{
header("Location: macro1.php?code=invalid&refer={$_POST['refer']}");
exit;
}
if($_SESSION['captcha'] != $_POST['captcha'])
{
header("Location: macro1.php?code=invalid&refer={$_POST['refer']}");
exit;
}
$ref=$_POST['refer'];
unset($_SESSION['captcha']);
$db->query("UPDATE users SET verified=1 WHERE userid={$userid}");
header("Location: $ref");
?>

