<?php

include "globals.php";
if(!$set['sendcrys_on'])
{
die("Sorry, the game owner has disabled this feature.");
}
$_GET['ID'] = abs((int) $_GET['ID']);
$_POST['crystals'] = abs((int) $_POST['crystals']);
if(!((int)$_GET['ID']))
{
print "Invalid User ID";
}
else if($_GET['ID'] == $userid)
{
print "Haha, what does sending crystals to yourself do anyway?";
}
else
{
if((int) $_POST['crystals'])
{
if($_POST['crystals'] > $ir['crystals'])
{
print "Die j00 abuser.";
}
else
{
$db->query("UPDATE users SET crystals=crystals-{$_POST['crystals']} WHERE userid=$userid");
$db->query("UPDATE users SET crystals=crystals+{$_POST['crystals']} WHERE userid={$_GET['ID']}");
print "You sent {$_POST['crystals']} crystals to ID {$_GET['ID']}.";
event_add($_GET['ID'],"You received {$_POST['crystals']} crystals from {$ir['username']}.",$c);
$it=$db->query("SELECT u.*,us.* FROM users u LEFT JOIN userstats us ON u.userid=us.userid WHERE u.userid={$_GET['ID']}");
$er=$db->fetch_row($it);
$db->query("INSERT INTO crystalxferlogs VALUES ('', $userid, {$_GET['ID']}, {$_POST['crystals']}, unix_timestamp(), '{$ir['lastip']}', '{$er['lastip']}')");
}
}
else
{
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'>Sending Crystals</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>

You are sending crystals to ID: <b>{$_GET['ID']}</b>.
<br>You have <b>".number_format($ir['crystals'])."</b> crystals you can send.
<form action='sendcrys.php?ID={$_GET['ID']}' method='post'>
Crystals: <input type='text' STYLE='color: black;  background-color: white;' name='crystals' /><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Send' /></form>";
print "<h3>Latest 5 Transfers</h3>
<table width=75% class=table border=2> <tr style='background:gray'>  <th>Time</th> <th>User From</th> <th>User To</th> <th>Amount</th> </tr>";
$q=$db->query("SELECT cx.*,u1.username as sender, u2.username as sent FROM crystalxferlogs cx LEFT JOIN users u1 ON cx.cxFROM=u1.userid LEFT JOIN users u2 ON cx.cxTO=u2.userid WHERE cx.cxFROM=$userid ORDER BY cx.cxTIME DESC LIMIT 5");
while($r=$db->fetch_row($q))
{
if($r['cxFROMIP'] == $r['cxTOIP']) { $m="<span style='color:red;font-weight:800'>MULTI</span>"; } else { $m=""; }
print "<tr> <td>" . date("F j, Y, g:i:s a",$r['cxTIME']) . "</td><td>{$r['sender']} [{$r['cxFROM']}] </td><td>{$r['sent']} [{$r['cxTO']}] </td> <td> {$r['cxAMOUNT']} crystals</td> </tr>";
}
print "</table></div><br></div></div></div></div></div>  ";
}
}
$h->endpage();
?>
