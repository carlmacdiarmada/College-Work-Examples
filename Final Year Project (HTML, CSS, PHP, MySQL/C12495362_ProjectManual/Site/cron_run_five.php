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
$set=array();
$settq=$db->query("SELECT * FROM settings");
while($r=$db->fetch_row($settq))
{
$set[$r['conf_name']]=$r['conf_value'];
}
//brave , health update
$query="UPDATE users SET brave=brave+1 WHERE brave<maxbrave";
$query2="UPDATE users SET brave=maxbrave WHERE brave>maxbrave";
$query3="UPDATE users SET hp=hp+(maxhp/5) WHERE hp<maxhp";
$query4="UPDATE users SET hp=maxhp WHERE hp>maxhp";
$db->query($query);
$db->query($query2);
$db->query($query3);
$db->query($query4);
//energy , will update
$query="UPDATE users SET energy=energy+2 WHERE energy<maxenergy";
$query2="UPDATE users SET energy=maxenergy WHERE energy>maxenergy";
$query3="UPDATE users SET will=will+10 WHERE will<maxwill";
$query4="UPDATE users SET will=maxwill WHERE will>maxwill";

$db->query($query);
$db->query($query2);
$db->query($query3);
$db->query($query4);
if($set['validate_period'] == 5 && $set['validate_on'])
{
$db->query("UPDATE users SET verified=0");
}
if($set['validate_period'] == 15 && $set['validate_on'] && in_array(date('i'),array("00", "15", "30", "45")))
{
$db->query("UPDATE users SET verified=0");
}


$stocks = mysql_query("SELECT stockID FROM `stock_stocks`");
while($soc = mysql_fetch_assoc($stocks))    {
    $rand = mt_rand(1,2);
    if($rand == 2)    {
        $mr = mt_rand(10,250);
        mysql_query("UPDATE `stock_stocks` SET `stockUD` = 2, `stockCHANGE` = ".$mr.", `stockNPRICE` = (`stockNPRICE` - ".$mr.") WHERE `stockID` = ".$soc['stockID']);
    }
    else    {
        $mr = mt_rand(10,250);
        mysql_query("UPDATE `stock_stocks` SET `stockUD` = 1, `stockCHANGE` = ".$mr.", `stockNPRICE` = (`stockNPRICE` + ".$mr.") WHERE `stockID` = ".$soc['stockID']);
    }
}
include_once('global_func.php');
$sel = mysql_query("SELECT stockID,stockNAME FROM `stock_stocks` WHERE `stockNPRICE` < 0");
while($soc = mysql_fetch_assoc($sel))    {
    if(mysql_num_rows(mysql_query("SELECT holdingID FROM `stock_holdings` WHERE `holdingSTOCK` = ".$soc['stockID'])))    {
        $user = mysql_query("SELECT holdingUSER FROM `stock_holdings` WHERE `holdingSTOCK` = ".$soc['stockID']);
        $user = mysql_fetch_assoc($user);
        event_add($user['holdingUSER'], 'Stock '.$soc['stockNAME'].' crashed, you lost all your shares.');
    }
    mysql_query("DELETE FROM `stock_holdings` WHERE `holdingSTOCK` = ".$soc['stockID']);
    mysql_query("UPDATE `stock_stocks` SET `stockUD` = 1,`stockCHANGE` = 0,`stockNPRICE` = `stockOPRICE` WHERE `stockID` = ".$soc['stockID']);
}


?>
