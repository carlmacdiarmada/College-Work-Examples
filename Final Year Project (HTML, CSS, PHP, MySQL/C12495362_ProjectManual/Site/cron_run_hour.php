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
$db->query("UPDATE users SET attacking=0");
$db->query("UPDATE cliques SET cliqueCHOURS=cliqueCHOURS-1 WHERE cliqueCRIME>0");
$q=$db->query("SELECT g.*,oc.* FROM cliques g LEFT JOIN orgcrimes oc ON g.cliqueCRIME=oc.ocID WHERE g.cliqueCRIME > 0 AND g.cliqueCHOURS = 0");
while($r=$db->fetch_row($q))
{
$suc=rand(0,1);
if($suc) {
$log=$r['ocSTARTTEXT'].$r['ocSUCCTEXT'];
$muny=(int) (rand($r['ocMINMONEY'],$r['ocMAXMONEY']));
$log=str_replace(array("{muny}","'"),array($muny,"''"),$log);
$db->query("UPDATE cliques SET cliqueMONEY=cliqueMONEY+$muny,cliqueCRIME=0 WHERE cliqueID={$r['cliqueID']}");
$db->query("INSERT INTO oclogs VALUES ('',{$r['ocID']},{$r['cliqueID']}, '$log', 'success', $muny, '{$r['ocNAME']}', unix_timestamp())");
$i=$db->insert_id();
$qm=$db->query("SELECT * FROM users WHERE clique={$r['cliqueID']}");
while($rm=$db->fetch_row($qm))
{
event_add($rm['userid'],"Your Clique's Organised Crime Succeeded. Go <a href='oclog.php?ID=$i'>here</a> to view the details.",$c);
}
}
else
{
$log=$r['ocSTARTTEXT'].$r['ocFAILTEXT'];
$muny=0;
$log=str_replace(array("{muny}","'"),array($muny,"''"),$log);
$db->query("UPDATE cliques SET cliqueCRIME=0 WHERE cliqueID={$r['cliqueID']}");
$db->query("INSERT INTO oclogs VALUES ('',{$r['ocID']},{$r['cliqueID']}, '$log', 'failure', $muny, '{$r['ocNAME']}', unix_timestamp())");
$i=$db->insert_id();
$qm=$db->query("SELECT * FROM users WHERE clique={$r['cliqueID']}");
while($rm=$db->fetch_row($qm))
{
event_add($rm['userid'],"Your Clique's Organised Crime Failed. Go <a href='oclog.php?ID=$i'>here</a> to view the details.",$c);
}
}
}
if(date('G')==17)
{
$db->query("UPDATE users u LEFT JOIN userstats us ON u.userid=us.userid LEFT JOIN jobs j ON j.jID=u.job LEFT JOIN jobranks jr ON u.jobrank=jr.jrID SET u.money=u.money+jr.jrPAY, u.exp=u.exp+(jr.jrPAY/20)
WHERE u.job > 0 AND u.jobrank > 0");
$db->query("UPDATE userstats us LEFT JOIN users u ON u.userid=us.userid LEFT JOIN jobs j ON j.jID=u.job LEFT JOIN jobranks jr ON u.jobrank=jr.jrID SET us.strength=(us.strength+1)+jr.jrSTRG-1,us.labour=(us.labour+1)+jr.jrLABOURG-1,us.IQ=(us.IQ+1)+jr.jrIQG-1 WHERE u.job > 0 AND u.jobrank > 0");
}
if($set['validate_period'] == 60 && $set['validate_on'])
{
$db->query("UPDATE users SET verified=0");
}
?>
