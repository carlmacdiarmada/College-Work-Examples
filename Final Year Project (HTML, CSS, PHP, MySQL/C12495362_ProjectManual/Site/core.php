<?php

session_start();

//ensures all essential config files are still present.
if(!file_exists("required.php"))
{
die("Required Files Not Found !!");
}
require "required.php";
//language file can be changed to include other languages.
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
$total=0;
// Users Online , Counts Users Online In Last 15 minutes                                                                           
$q=$db->query("SELECT * FROM users WHERE laston>unix_timestamp()-15*60 ORDER BY laston DESC");
$online=$db->num_rows($q);

?>