<?php
global $db,$c,$ir, $set;
$hc=$set['hospital_count'];
$jc=$set['jail_count'];
$ec=$ir['new_events'];
$mc=$ir['new_mail'];
if($ir['hospital'])
{
print "
<div class='container-fluid'>
<div class='row'>
<div class='col-sm-3 col-md-2 sidebar'>
<ul class='nav nav-sidebar'>
<li ><a class='link1' href='index.php'>Home</a></li>
<li> <a class='link1' href='shops.php'>Medical Shop</a></li>
<li> <a class='link1' href='hospital.php'>Hospital ($hc)</a></li>
<li> <a class='link1' href='storage.php'>Storage Locker</a></li>

";
}
elseif($ir['jail'])
{

print "

<div class='container-fluid'>
<div class='row'>
<div class='col-sm-3 col-md-2 sidebar'>
<ul class='nav nav-sidebar'>
<li ><a class='link1' href='jail.php'>Jail ($jc)</a></li>
<li> <a class='link1' href='storage.php'>Storage Locker</a></li>";
}

else
{
print "
<div class='container-fluid'>
<div class='row'>
<div class='col-sm-3 col-md-2 sidebar'>
<ul class='nav nav-sidebar'>
<li><a href='index.php'><img src='images/logo.png' alt='Logo'/></a></li>
<li><a class='link1' href='index.php'>Home</a></li><li>
<a class='link1' href='storage.php'>Storage Locker</a></li>
";
}
if($ir['new_announcements'])
{
print "<li> <a class='link1' href='announcements.php' style='font-weight: 800;'><strong>Announcements ({$ir['new_announcements']})</strong></a></li>";
}
else
{
print "<li> <a class='link1' href='announcements.php'>Announcements (0)</a></li>";
}

if($mc > 0) { print "<li> <a class='link1' href='mailbox.php'><strong>Mailbox ($mc)</strong></a></li>"; }
else { print "<li> <a class='link1' href='mailbox.php'>Mailbox (0)</a></li>"; }
if($ec > 0) { print "<li> <a class='link1' href='events.php'><strong>Events ($ec)</strong></a></li>"; }
else { print "<li> <a class='link1' href='events.php'>Events (0)</a></li>"; }


if($ir['jail'] and !$ir['hospital'])
{
print "<li> <a class='link1' href='gym.php'>Jail Gym</a></li>
<li> <a class='link1' href='hospital.php'>Hospital ($hc)</a></li>";
}
else if (!$ir['hospital'])
{
print "<li> <a class='link1' href='explore.php'>Explore</a></li>
<li> <a class='link1' href='gym.php'>Gym</a></li>
<li> <a class='link1' href='criminal.php'>Crimes</a></li>
<li> <a class='link1' href='job.php'>Your Job</a></li>
<li> <a class='link1' href='shoutarea.php'><b>Chat Area</b></a></li>
<li> <a class='link1' href='stocks.php'>Stocks</a></li>
<li> <a class='link1' href='business_home.php'>Your Business</a></li>
<li> <a class='link1' href='education.php'>University</a></li>
<li> <a class='link1' href='hospital.php'>Hospital ($hc)</a></li>
<li> <a class='link1' href='jail.php'>Jail ($jc)</a></li>";
}
else
{
print "<li> <a class='link1' href='jail.php'>Jail ($jc)</a></li>";
}
print "<li> <a class='link1' href='forums.php'>Forums</a></li>";

print "
<li> <a class='link1' href='newspaper.php'>News</a></li>
<li> <a class='link1' href='search.php'>Search</a></li>";


if(!$ir['jail'] )
{
print "<li> <a class='link1' href='yourgang.php'>Your Gang</a></li>
";
}



if($ir['user_level'] > 1)
{
print "
<li><a class='link1' href='staff.php'> Staff Area </a></li>
";

}


print "
<li><img src='images/staff_bar.jpg' alt='' /></li>
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
print "<li><a href='viewuser.php?u={$r['userid']}'>{$r['username']} ($la $unit)</a></li>";
}


print "

<img src='images/lists.jpg' alt='' />
<li> <a class='link1' href='friendslist.php'>Friends List</a></li>
<li> <a class='link1' href='blacklist.php'>Black List</a></li>

";

print "

<img src='images/settings.jpg' alt='' />

<li> <a class='link1' href='preferences.php'>Preferences</a></li>
<li> <a class='link1' href='preport.php'>Player Report</a></li>
<li> <a class='link1' href='demo.php'>Presentation Demo</a></li>
<li> <a class='link1' href='gamerules.php'>Game Rules</a></li>
<li> <a class='link1' href='helptutorial.php'>Help Tutorials</a></li>
<li> <a class='link1' href='viewuser.php?u={$ir['userid']}'>My Profile</a></li>
<li> <a class='link1' href='logout.php'>Logout</a></li>

</div></div></div>
" ;



?>
