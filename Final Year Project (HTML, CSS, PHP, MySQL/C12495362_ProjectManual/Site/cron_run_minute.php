<?php

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
$db->query("UPDATE users set hospital=hospital-1 WHERE hospital>0");
$db->query("UPDATE `users` SET jail=jail-1 WHERE `jail` > 0");
$db->query("UPDATE users SET traveltime=traveltime-1 WHERE traveltime > 0");
$db->query("UPDATE users SET bguard=bguard-1 WHERE bguard>0");
$db->query("UPDATE users SET bguard=0 WHERE bguard<0");
$hc=$db->num_rows($db->query("SELECT * FROM users WHERE hospital > 0"));
$jc=$db->num_rows($db->query("SELECT * FROM users WHERE jail > 0"));
$db->query("UPDATE settings SET conf_value='$hc' WHERE conf_name='hospital_count'");
$db->query("UPDATE settings SET conf_value='$jc' WHERE conf_name='jail_count'");

?>
