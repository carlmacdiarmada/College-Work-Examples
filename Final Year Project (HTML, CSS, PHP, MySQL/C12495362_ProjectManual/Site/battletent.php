<?php

include "globals.php";
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Battle Tent</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>


<b>Welcome to the battle tent! Here you can challenge NPCs for money.</b>
<table width=90% cellspacing=1 class='table'><tr style='background: gray; '><th>Bot Name</th><th>Level</th><th>Times Owned</th><th>Ready To Be Challenged?</th><th>Location</th><th>Money Won</th><th>Challenge</th></tr>";
$q=$db->query("SELECT cb.*,u.*,c.npcid,cy.cityname FROM challengebots cb LEFT JOIN users u ON cb.cb_npcid=u.userid LEFT JOIN challengesbeaten c ON c.npcid=u.userid AND c.userid=$userid LEFT JOIN cities cy ON u.location=cy.cityid");
while($r=$db->fetch_row($q))
{
$earn=money_formatter($r['cb_money']);
$v=$r['userid'];
$q2=$db->query("SELECT count(*) FROM challengesbeaten WHERE npcid=$userid");
$times=$db->fetch_single($q2);
print "<tr><td>{$r['username']}</td><td>{$r['level']}</td><td>$times</td><td>";
if($r['hp'] >= $r['maxhp']/2 and $r['location']==$ir['location'] and !$ir['hospital'] and !$ir['jail'] and !$r['hospital'] and !$r['jail']) { print "<font color=green>Yes</font>"; } else { print "<font color=red>No</font>"; }
print "</td><td>{$r['cityname']}</td><td>$earn</td><td>";
if($r['npcid'])
{
print "<i>Already</i>";
}
else
{
print "<a href='attack.php?ID={$r['userid']}'>Challenge</a>";
}
print "</td></tr>";
}
print "</table></div><br></div></div></div></div></div>";
$h->endpage();
?>
