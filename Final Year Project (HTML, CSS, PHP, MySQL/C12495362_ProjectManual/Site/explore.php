<?php

include "globals.php";
$tresder=(int) rand(100,999);
global $db, $ir, $userid, $h, $db;
$cityname = $db->fetch_single($db->query("SELECT cityname FROM cities WHERE cityid = ".$ir['location']));
$citycount = $db->fetch_single($db->query("SELECT COUNT(*) FROM users WHERE location = ".$ir['location']));
if($ir['jail'] or $ir['hospital']) { print "This page cannot be accessed while in jail or hospital.";

$h->endpage();
exit;
}
print "
<h2 style='padding-top:10px;'><marquee>You Are Currently Exploring $cityname !</marquee> </h2>
<center><img src=images/explore.jpg width='600' height='240' alt='City' title='Cityimage' /></center><br />





<div align='left' class='explorehead' style='background-color:#555; padding-left:40px;'>There are $citycount people in $cityname !</div><br />
<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >

<tr valign='middle'>
<th width='34%'>Red Light District</th>
<th width='33%'>North End</th>
<th width='33%'>South Shore</th>
</tr>
<tr style='height: 100%;'>
<td valign='top'>
<a href='battle_ladder.php'>Battle Ladder</a><br />
<a href='battletent.php'>Battle Tent</a><br />
<a href='whorehouse.php'>Brothel</a><br />
<a href='crystaltemple.php'>Crystal Temple</a><br />
<a href='attacklist.php'>Player Attack List</a><br />
<a href='cityusers.php'>Players in your City</a><br />
</td>
<td valign='top'>
<a href='business_view.php'>Company Lists</a><br />
<a href='travel.php'>Travel Agency</a><br />
<a href='estate.php'>Property Broker</a><br />
<a href='bank.php'>Bank</a>";
if($ir['level'] >= 5)
{
print "<br />
<a href='cyberbank.php'>Cyber Bank</a><br />";
}
print "</td>
<td valign='top'>
<a href='slotsmachine.php?tresde=$tresder'>Slots</a><br />
<a href='magicslots.php'>Magic Slots</a><br />
<a href='roulette.php?tresde=$tresder'>Roulette</a><br />
<a href='lucky.php'>Mysterious Box</a>  ";
if($ir['location'] == 5)
{
print "<br />
<a href='slotsmachine3.php'>Super Slots</a><br />";
}
print "</td></tr>

<tr>
<th width='33%'>West Side</th>
<th>Center</th>
<th>East Side</th>
</tr>

<tr style='height: 100%;'>
<td valign='top'>
<a href='viewuser.php?u={$ir['userid']}'>Your Profile</a><br />
<a href='business_home.php'>Your Business</a><br />  ";

$checkforshop=$db->query("select * from usershops where userid=$userid");
if(mysql_num_rows($checkforshop)!=0)
{
print"<a href='myshop.php'>Your Shop</a> <br/>";
}
print"
<a href='shops.php'>AI Shops</a><br />
<a href='playershops.php'>Players Business's</a><br />
<a href='itemmarket.php'>Item Market</a><br />
<a href='cmarket.php'>Crystal Market</a><br />
</td>
<td valign='top'>
<a href='stats.php'>Game Stats</a><br />
<a href='stafflist.php'>{$set['game_name']} Staff</a><br />
<a href='halloffame.php'>Hall of Fame</a><br />
<a href='usersonline.php'>Users Online</a><br />
<a href='userlist.php'>User List</a><br />
<a href='preport.php'>Player Report</a><br />
<a href='fedjail.php'>Federal Jail</a><br />
</td>
<td valign='top'>
<a href='storage.php'>Storage Locker</a><br />
<a href='mailbox.php'>Mailbox</a><br />
<a href='polling.php'>Polls</a><br />
<a href='forums.php'>Forums</a><br />
</tr>

<tr>
<th>Information</th>
<th>&nbsp;</th>
</tr>

<tr style='height: 100%;'>
<td valign='top'>
<a href='helptutorial.php'>Tutorial</a><br />
<a href='gamerules.php'>Rules</a><br />
</td>
<td valign='top'>&nbsp;
</td>


";






print "


</td></tr></table> 


This is your referal link: http://{$domain}/signup.php?REF=$userid <br><br />
Every signup from this link earns you two valuable crystals!";
$h->endpage();
?>
