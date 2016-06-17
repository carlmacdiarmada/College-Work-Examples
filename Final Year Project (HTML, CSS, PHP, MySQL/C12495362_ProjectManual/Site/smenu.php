<?php

global $db,$c,$ir, $set;

print "



<div class='navi_mid'><ul>

<br><li> <a class='link1' href='index.php'><b>Back To The Game</b></a>
</div></div>
  <br /> <br /><br /> <br /><br />

<div class='navipart'>
<div class='navitop'>
<p><h2><strong>General</strong></h2></p>
</div>
<div class='navi_mid'><ul>
   <br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff.php'>Staff Index</a></li>";
if($ir['user_level']==2)
{
print "
<li> <a class='link1' href='staff.php?action=basicset'>Basic Game Settings</a></li>
<li> <a class='link1' href='staff.php?action=announce'>Add Game Announcement</a></li>
<li> <a class='link1' href='staff.php?action=cmanual'>Configure Manual Cron Jobs</a></li>

</div></div>

";
}
if($ir['user_level'] <= 3)
{
print "
<div class='navipart'>
<div class='navitop'>
<p><h2><strong>User Control</strong></h2></p>
</div>
<div class='navi_mid'><ul>
";
if($ir['user_level']==2)
{
print "
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_users.php?action=newuser'>Create New User</a></li>
<li> <a class='link1' href='staff_users.php?action=edituser'>Edit User</a></li>
<li> <a class='link1' href='staff_users.php?action=deluser'>Delete User</a></li>";
}
print "<li> <a class='link1' href='staff_users.php?action=invbeg'>View User Inventory</a></li>
<li> <a class='link1' href='staff_users.php?action=creditform'>Credit User</a></li>";
if($ir['user_level']==2)
{
print "<li> <a class='link1' href='staff_users.php?action=masscredit'>Mass Payment</a></li>
<li> <a class='link1' href='staff_users.php?action=forcelogout'>Force User Logout</a></li>";
}
print "
<li> <a class='link1' href='staff_users.php?action=reportsview'>Player Reports</a></li>
</div></div>

";
print "
<div class='navipart'><div class='navitop'><p><h2><strong>Item Control</strong></h2></p></div><div class='navi_mid'><ul>
";
if($ir['user_level']==2)
{
print "
<br /> <br /><br /> <br /><br /> <li> <a class='link1' href='staff_items.php?action=newitem'>Create New Item</a></li>";
}
if($ir['user_level']==2)
{
print "<li> <a class='link1' href='staff_items.php?action=edititem'>Edit Item</a></li>
<li> <a class='link1' href='staff_items.php?action=killitem'>Delete An Item</a></li>
<li> <a class='link1' href='staff_items.php?action=newitemtype'>Add Item Type</a></li>
<li> <a class='link1' href='staff_items.php?action=killitemtype'>Delete An Item Type</a></li>

";
}
print "<li> <a class='link1' href='staff_items.php?action=giveitem'>Give Item To User</a></li>
</div></div> ";
}
print "
<div class='navipart'><div class='navitop'><p><h2><strong>Game Logs</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_logs.php?action=atklogs'>Attack Logs</a></li>
<li> <a class='link1' href='staff_logs.php?action=cashlogs'>Cash Transfer Logs</a></li>
<li> <a class='link1' href='staff_logs.php?action=cryslogs'>Crystal Transfer Logs</a></li>
<li> <a class='link1' href='staff_logs.php?action=banklogs'>Bank Transfer Logs</a></li>
<li> <a class='link1' href='staff_logs.php?action=itmlogs'>Item Transfer Logs</a></li>";
if($ir['user_level'] == 2)
{
print "<li> <a class='link1' href='staff_logs.php?action=stafflogs'>Staff Logs</a></li>";
}
print " <li> <a class='link1' href='staff_logs.php?action=maillogs'>Mail Logs</a></li>
 </div></div> ";


if($ir['user_level']==2)
{
print "
<div class='navipart'><div class='navitop'><p><h2><strong>Shop Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_shops.php?action=newshop'>Create New Shop</a></li>
<li> <a class='link1' href='staff_shops.php?action=newstock'>Add Item To Shop</a></li>
<li> <a class='link1' href='staff_shops.php?action=delshop'>Delete Shop</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>Poll Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_polls.php?action=spoll'>Start Poll</a></li>
<li> <a class='link1' href='staff_polls.php?action=endpoll'>End A Poll</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>Job Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_jobs.php?action=newjob'>Make a new Job</a></li>
<li> <a class='link1' href='staff_jobs.php?action=jobedit'>Edit a Job</a></li>
<li> <a class='link1' href='staff_jobs.php?action=jobdele'>Delete a Job</a></li>
<li> <a class='link1' href='staff_jobs.php?action=newjobrank'>Make a new Job Rank</a></li>
<li> <a class='link1' href='staff_jobs.php?action=jobrankedit'>Edit a Job Rank</a></li>
<li> <a class='link1' href='staff_jobs.php?action=jobrankdele'>Delete a Job Rank</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>Housing Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_houses.php?action=addhouse'>Add House</a></li>
<li> <a class='link1' href='staff_houses.php?action=edithouse'>Edit House</a></li>
<li> <a class='link1' href='staff_houses.php?action=delhouse'>Delete House</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>Cities and Travel</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_cities.php?action=addcity'>Add City</a></li>
<li> <a class='link1' href='staff_cities.php?action=editcity'>Edit City</a></li>
<li> <a class='link1' href='staff_cities.php?action=delcity'>Delete City</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>Forum Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_forums.php?action=addforum'>Add Forum</a></li>
<li> <a class='link1' href='staff_forums.php?action=editforum'>Edit Forum</a></li>
<li> <a class='link1' href='staff_forums.php?action=delforum'>Delete Forum</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>University Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_courses.php?action=addcourse'>Add Course</a></li>
<li> <a class='link1' href='staff_courses.php?action=editcourse'>Edit Course</a></li>
<li> <a class='link1' href='staff_courses.php?action=delcourse'>Delete Course</a></li>
</div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>Crimes Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_crimes.php?action=newcrime'>Create New Crime</a></li>
<li> <a class='link1' href='staff_crimes.php?action=editcrime'>Edit Crime</a></li>
<li> <a class='link1' href='staff_crimes.php?action=delcrime'>Delete Crime</a></li>
<li> <a class='link1' href='staff_crimes.php?action=newcrimegroup'>Create New Crime Group</a></li>
<li> <a class='link1' href='staff_crimes.php?action=editcrimegroup'>Edit Crime Group</a></li>
<li> <a class='link1' href='staff_crimes.php?action=delcrimegroup'>Delete Crime Group</a></li>
<li> <a class='link1' href='staff_crimes.php?action=reorder'>Reorder Crime Groups</a></li>
</div></div>

<div class='navipart'><div class='navitop'><p><h2><strong>Battle Tent Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_battletent.php?action=addbot'>Add Challenge Bot</a></li>
<li> <a class='link1' href='staff_battletent.php?action=editbot'>Edit Challenge Bot</a></li>
<li> <a class='link1' href='staff_battletent.php?action=delbot'>Remove Challenge Bot</a></li>
</div></div>

<div class='navipart'><div class='navitop'><p><h2><strong>Battle Ladder Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_ladder.php?act=CreateLadder'>Create Ladder</a></li>
<li> <a class='link1' href='staff_ladder.php?act=DeleteLadder'>Remove Ladder</a></li>
</div></div>

";
}
print "
<div class='navipart'><div class='navitop'><p><h2><strong>Punishments Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_punit.php?action=mailform'>Mail Ban User</a></li>
<li> <a class='link1' href='staff_punit.php?action=unmailform'>Un-Mailban User</a></li>
<li> <a class='link1' href='staff_punit.php?action=forumform'>Forum Ban User</a></li>
<li> <a class='link1' href='staff_punit.php?action=unforumform'>Un-Forumban User</a></li>
<li> <a class='link1' href='staff_punit.php?action=fedform'>Jail User</a></li>
<li> <a class='link1' href='staff_punit.php?action=fedeform'>Edit Fedjail Sentence</a></li>
<li> <a class='link1' href='staff_punit.php?action=unfedform'>Unjail User</a></li>
<li> <a class='link1' href='staff_punit.php?action=ipform'>Ip Search</a></li>
</div></div>
";
if($ir['user_level']==2)
{
print "
<div class='navipart'><div class='navitop'><p><h2><strong>Specials Control</strong></h2></p></div><div class='navi_mid'><ul>
<br /> <br /><br /> <br /><br />
<li> <a class='link1' href='staff_special.php?action=editnews'>Edit Newspaper</a></li>
<li> <a class='link1' href='staff_special.php?action=massmailer'>Mass mailer</a></li>
<li> <a class='link1' href='staff_special.php?action=stafflist'>Staff List</a></li>
<li> <a class='link1' href='staff_special.php?action=userlevelform'>Adjust User Level</a></li>
<li> <a class='link1' href='staff_special.php?action=givedpform'>Give User Donator Pack</a></li>";
}

print "
<div class='navipart'><div class='navitop'><p><h2><strong>Staffs Online</strong></h2></p></div><div class='navi_mid'><ul>
";
$q=$db->query("SELECT * FROM users WHERE laston>(unix_timestamp()-15*60) AND user_level>1 ORDER BY userid ASC");
while($r=$db->fetch_row($q))
{
$la=time()-$r['laston'];
$unit="secs";
if($la >= 60)
{
$la=(int) ($la/60);
$unit="mins";
}
if($la >= 60)
{
$la=(int) ($la/60);
$unit="hours";
if($la >= 24)
{
$la=(int) ($la/24);
$unit="days";
}
}
print "<br><br /> <br /><br /> <br /><br /> <a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> ($la $unit)<br>
</div></div>";
}

?>
