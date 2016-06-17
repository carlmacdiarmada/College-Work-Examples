<?php

include "globals.php";
require "bbcodestyle.css";
require "bbcode.php";

print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Contact List </h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>

<table width=85% class='table' cellspacing='1'><tr> <td align=center><a href='mailbox.php?action=inbox'><img src='images/indox.gif' title='Inbox'></a></td>  <td align=center><a href='mailbox.php?action=outbox'><img src='images/sent.gif' title='Sent Messages'></a></td> <td align=center><a href='mailbox.php?action=compose'><img src='images/compose.gif' title='Compose'></a></td> <td align=center><a href='mailbox.php?action=delall'><img src='images/deleteall.gif' title='Delete All Messages'></a></td> <td align=center><a href='mailbox.php?action=archive'><img src='images/archiveall.gif' title='Archive All Messages'></a></td> <td align=center><a href='contactlist.php'><img src='images/contacts.gif' title='Contacts List'></a></td>  </tr> </table><br />


";
switch($_GET['action'])
{
case "add":
add_friend();
break;
case "remove":
remove_friend();
break;
default:
friends_list();
break;
}
function friends_list()
{
global $db,$ir,$c,$userid;
print "<a href='contactlist.php?action=add'>Add a new Contact</a><br /><br />
These are the people on your contact list. ";
print "<br />
<table width=90% class='table' cellspacing='1'><tr style='background:gray'> <th>ID</th> <th>Name</th> <th>Mail</th>  <th>Remove</th> </tr>";
$q=$db->query("SELECT fl.*,u.* FROM contactlist fl LEFT JOIN users u ON fl.cl_ADDED=u.userid WHERE fl.cl_ADDER=$userid ORDER BY u.username ASC");
while($r=$db->fetch_row($q))
{
$d="";
print "<tr> <td> {$r['userid']} </td> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> $d</td> <td><a href='mailbox.php?action=compose&ID={$r['userid']}'>Mail</a></td>  <td><a href='contactlist.php?action=remove&f={$r['cl_ID']}' >Remove</a></td> </tr>";
}
print "</table></div><br></div></div></div></div></div>";
}
function add_friend()
{
global $db,$ir,$c,$userid;
$_POST['ID'] = abs((int) $_POST['ID']);
if($_POST['ID'])
{
$qc=$db->query("SELECT * FROM contactlist WHERE cl_ADDER=$userid AND cl_ADDED={$_POST['ID']}");
$q=$db->query("SELECT * FROM users WHERE userid={$_POST['ID']}");
if($db->num_rows($qc))
{
print "You cannot add the same person twice.<br /><br />
<a href='contactlist.php'>Back</a>";
}
else if($userid==$_POST['ID'])
{
print "There is no point in adding yourself to your own list.<br /><br />
<a href='contactlist.php'>Back</a>";
}
else if($db->num_rows($q)==0)
{
print "Oh no, you're trying to add a ghost.";
}
else
{
$db->query("INSERT INTO contactlist VALUES('', $userid, {$_POST['ID']})");
$r=$db->fetch_row($q);
print "{$r['username']} was added to your contact list.<br /><br />
<a href='contactlist.php'>Back</a>";
}
}
else
{
print "Adding a contact!<form action='contactlist.php?action=add' method='post'>
Contact's ID: <input type='text' STYLE='color: black;  background-color: white;' name='ID' value='{$_GET['ID']}' /><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Add Contact' /></form>";
}
}
function remove_friend()
{
global $db,$ir,$c,$userid;
$db->query("DELETE FROM contactlist WHERE cl_ID={$_GET['f']} AND cl_ADDER=$userid");

print "Contact list entry removed!<br /><br />
<a href='contactlist.php'>Back</a>";
}
$h->endpage();
?>
