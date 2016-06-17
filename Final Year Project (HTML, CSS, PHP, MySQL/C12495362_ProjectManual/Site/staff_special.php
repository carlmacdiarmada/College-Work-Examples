<?php

include "sglobals.php";
if($ir['user_level'] > 2)
{
die("403");
}
//This contains punishment stuffs
switch($_GET['action'])
{
case 'editnews': newspaper_form(); break;
case 'subnews': newspaper_submit(); break;
case 'givedpform': give_dp_form(); break;
case 'givedpsub': give_dp_submit(); break;
case 'stafflist': staff_list(); break;
case 'userlevel': userlevel(); break;
case 'userlevelform': userlevelform(); break;
case 'massmailer': massmailer(); break;
default: print "Error: This script requires an action."; break;
}
function newspaper_form()
{
global $db,$ir,$c,$h,$userid;
$q=$db->query("SELECT * FROM papercontent LIMIT 1");
$news=$db->fetch_single($q);
print "

<div class='generalinfo_txt'>
 <div class='info_mid'><h2 style='padding-top:10px;'> Editing Newspaper</h2></div>
 </div>
<div class='generalinfo_simple'><br> <br><br>

<form action='staff_special.php?action=subnews' method='post'>
<textarea rows='7' cols='35' name='newspaper'>$news</textarea><br /><input type='submit' STYLE='color: black;  background-color: white;' value='Change' /></form></div> <br></div></div></div></div></div>";
}
function newspaper_submit()
{
global $db,$ir,$c,$h,$userid;
$news=$_POST['newspaper'];
$db->query("UPDATE papercontent SET content='$news'");
print "Newspaper updated!";
stafflog_add("Updated game newspaper");
}
function give_dp_form()
{
global $db,$ir,$c,$h,$userid;
}
function staff_list()
{
global $db,$ir,$c,$h,$userid;

print "

<div class='generalinfo_txt'>
 <div class='info_mid'><h2 style='padding-top:10px;'> Staff Management</h2></div>
 </div>
<div class='generalinfo_simple'><br> <br><br>";
print "<b>Admins</b><br />
<table width=80% class= 'table'><tr style='background:gray'> <th>User</th> <th>Online?</th> <th>Links</th> </tr>";
$q=$db->query("SELECT * FROM users WHERE user_level=2 ORDER BY userid ASC");
while($r=$db->fetch_row($q))
{
if($r['laston'] >= time()-15*60) { $on="<font color=green><b>Online</b></font>"; } else { $on="<font color=red><b>Offline</b></font>"; }
print "\n<tr> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td> <td>$on</td> <td><a href='staff_special.php?action=userlevel&amp;level=3&amp;ID={$r['userid']}' >Secretary</a>  &middot; <a href='staff_special.php?action=userlevel&amp;level=5&amp;ID={$r['userid']}' >Assistant</a> &middot; <a href='staff_special.php?action=userlevel&amp;level=1&amp;ID={$r['userid']}' >Member</a></td></tr>";
}
print "</table>";
print "<b>Secretaries</b><br />
<table width=80% class= 'table' ><tr style='background:gray'> <th>User</th> <th>Online?</th> <th>Links</th> </tr>";
$q=$db->query("SELECT * FROM users WHERE user_level=3 ORDER BY userid ASC");
while($r=$db->fetch_row($q))
{
if($r['laston'] >= time()-15*60) { $on="<font color=green><b>Online</b></font>"; } else { $on="<font color=red><b>Offline</b></font>"; }
print "\n<tr> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td> <td>$on</td> <td><a href='staff_special.php?action=userlevel&amp;level=2&amp;ID={$r['userid']}' >Admin</a>  &middot; <a href='staff_special.php?action=userlevel&amp;level=5&amp;ID={$r['userid']}' >Assistant</a> &middot; <a href='staff_special.php?action=userlevel&amp;level=1&amp;ID={$r['userid']}' >Member</a></td></tr>";
}
print "</table>";
print "<b>Assistants</b><br />
<table width=80% class= 'table'><tr style='background:gray'> <th>User</th> <th>Online?</th> <th>Links</th> </tr>";
$q=$db->query("SELECT * FROM users WHERE user_level=5 ORDER BY userid ASC");
while($r=$db->fetch_row($q))
{
if($r['laston'] >= time()-15*60) { $on="<font color=green><b>Online</b></font>"; } else { $on="<font color=red><b>Offline</b></font>"; }
print "\n<tr> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td> <td>$on</td> <td><a href='staff_special.php?action=userlevel&amp;level=2&amp;ID={$r['userid']}' >Admin</a> &middot; <a href='staff_special.php?action=userlevel&amp;level=3&amp;ID={$r['userid']}' >Secretary</a>  &middot; <a href='staff_special.php?action=userlevel&amp;level=1&amp;ID={$r['userid']}' >Member</a></td></tr>";
}
print "</table></div> <br></div></div></div></div></div>";
}
function userlevel()
{
global $db,$ir,$c,$h,$userid;

$_GET['level']=abs((int) $_GET['level']);
$_GET['ID']=abs((int) $_GET['ID']);
$db->query("UPDATE users SET user_level={$_GET['level']} WHERE userid={$_GET['ID']}");
print "User's level adjusted.";
stafflog_add("Adjusted user ID {$_GET['ID']}'s staff status.");
}
function userlevelform()
{
global $db,$ir,$c,$h,$userid;


print "

<div class='generalinfo_txt'>
 <div class='info_mid'><h2 style='padding-top:10px;'> User Level Adjust</h2></div>
 </div>
<div class='generalinfo_simple'><br> <br><br>

<form action='staff_special.php' method='get'>
<input type='hidden' name='action' value='userlevel'>
User: ".user_dropdown($c,'ID')."<br />
User Level:<br />
<input type='radio' name='level' value='1' /> Member<br />
<input type='radio' name='level' value='2' /> Admin<br />
<input type='radio' name='level' value='3' /> Secretary<br />
<input type='radio' name='level' value='4' /> IRC Op<br />
<input type='radio' name='level' value='5' /> Assistant<br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Adjust' /></form></div> <br></div></div></div></div></div>";
}
function massmailer()
{
global $db,$ir,$c,$userid;
if($_POST['text'])
{
$_POST['text']=nl2br(strip_tags($_POST['text']));
$subj="This is a mass mail from the administration";
if($_POST['cat']==1)
$q=$db->query("SELECT * FROM users ");
else if($_POST['cat']==2)
$q=$db->query("SELECT * FROM users WHERE user_level > 1");
else if($_POST['cat']==3)
$q=$db->query("SELECT * FROM users WHERE user_level=2");
else
$q=$db->query("SELECT * FROM users WHERE user_level={$_POST['level']}");
while($r=$db->fetch_row($q))
{
$db->query("INSERT INTO mail VALUES('', 0, 0, {$r['userid']}, unix_timestamp(),'$subj','{$_POST['text']}')");
print "Mass mail sent to {$r['username']}.<br />";
}
print "Mass mail sending complete!<br />
<a href='staff_special.php?action=massmailer'>&gt; Back</a>";
}
else
{
print "

<div class='generalinfo_txt'>
 <div class='info_mid'><h2 style='padding-top:10px;'> Users Online</h2></div>
 </div>
<div class='generalinfo_simple'><br> <br><br>

<b>Mass Mailer</b><br />
<form action='staff_special.php?action=massmailer' method='post'> Text: <br />
<textarea name='text' rows='7' cols='40'></textarea><br />
<input type='radio' name='cat' value='1' /> Send to all members <input type='radio' name='cat' value='2' /> Send to staff only <input type='radio' name='cat' value='3' /> Send to admins only<br />
OR Send to user level:<br />
<input type='radio' name='level' value='1' /> Member<br />
<input type='radio' name='level' value='2' /> Admin<br />
<input type='radio' name='level' value='3' /> Secretary<br />
<input type='radio' name='level' value='5' /> Assistant<br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Send' /></form></div> <br></div></div></div></div></div>";
}
}

$h->endpage();
?>
