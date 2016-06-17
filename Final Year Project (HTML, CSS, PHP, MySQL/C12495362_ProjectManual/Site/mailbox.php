<?php

include "globals.php";
require "bbcodestyle.css";
require "bbcode.php";

if($ir['mailban'])
{
die("<font color=red><h3>! ERROR</h3>
You have been mail banned for {$ir['mailban']} days.<br />
<br />
<b>Reason: {$ir['mb_reason']}</font></b>");
}
$_GET['ID'] = abs((int) $_GET['ID']);

print "
<h2 style='padding-top:10px;'> Mail </h2>


<br><table width=25% border=2 class=table-responsive style=padding-left:25%; ><tr><td align=center><a href='mailbox.php?action=compose'><img src='images/create.jpg' title='Compose'></a></td> <td align=center><a href='mailbox.php?action=inbox'><img src='images/inbox.jpg' title='Inbox'></a></td>  <td align=center><a href='mailbox.php?action=outbox'><img src='images/sent.jpg' title='Sent Messages'></a></td> <td align=center><a href='mailbox.php?action=delall'><img src='images/delete.jpg' title='Delete All Messages'></a></td> <td align=center><a href='mailbox.php?action=archive'><img src='images/archive.jpg' title='Archive All Messages'></a></td> <td align=center><a href='contactlist.php'><img src='images/contacts.jpg' title='Contacts List'></a></td>  </tr> </table><br />



";
switch($_GET['action'])
{
case 'inbox':
mail_inbox();
break;

case 'outbox':
mail_outbox();
break;

case 'compose':
mail_compose();
break;

case 'delb':
delb();
break;

case 'send':
mail_send();
break;

case 'delall':
mail_delall();
break;

case 'delall2':
mail_delall2();
break;

case 'archive':
mail_archive();
break;

default:
mail_inbox();
break;
}
function mail_inbox()
{
global $db,$ir,$c,$userid,$h;
print <<<OUT
Only the last 25 messages sent to you are visible.<br><br />
<br><table width=25% border=2 class=table-responsive style=padding-left:25%; >
<tr>
<td class="h" width="30%">From</td>
<td class="h" width="70%">Subject/Message</td>
</tr>
OUT;
$q=$db->query("SELECT m.*,u.* FROM mail m LEFT JOIN users u ON m.mail_from=u.userid WHERE m.mail_to=$userid ORDER BY mail_time DESC LIMIT 25");
while($r=$db->fetch_row($q))
{
$sent=date('F j, Y, g:i:s a',$r['mail_time']);
print "<tr><td>";
if($r['userid'])
{
print "<a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]";
}
else
{
print "SYSTEM";
}
$fm=urlencode($r['mail_text']);
print <<<EOF
</td>
<td>{$r['mail_subject']}</td>
</tr>
<tr>
<td>Sent at: {$sent}<br /><a href='mailbox.php?action=compose&ID={$r['userid']}'>Reply</a>
<br />
<a href='?action=delb&ID={$r['mail_id']}'>Delete</a>
<br />
</td>
<td>{$r['mail_text']}</td>
</tr>
EOF;
}
if($ir['new_mail'] > 0)
{
$db->query("UPDATE mail SET mail_read=1 WHERE mail_to=$userid");
$db->query("UPDATE users SET new_mail=0 WHERE userid=$userid");
}
echo "</table>";
}
function mail_outbox()
{
global $db,$ir,$c,$userid,$h;
print "Only the last 25 messages you have sent are visible.<br />
<br><table width=25% border=2 class=table-responsive style=padding-left:25%; ><tr style='background:gray'><th> To</th><th>Subject/Message</th></tr>";
$q=$db->query("SELECT m.*,u.* FROM mail m LEFT JOIN users u ON m.mail_to=u.userid WHERE m.mail_from=$userid ORDER BY mail_time DESC LIMIT 25");
if($r=$db->fetch_row($q))
{
$sent=date('F j, Y, g:i:s a',$r['mail_time']);
print "<tr><td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td><td>{$r['mail_subject']}</td></tr><tr><td>Sent at: $sent<br /></td><td>{$r['mail_text']}</td></tr>";
}

echo "</table>";

}


function mail_compose()
{
global $ir,$c,$userid,$h;
echo <<< EOF
<script type="text/javascript">
function insert(el,ins) {
if (el.setSelectionRange){
el.value = el.value.substring(0,el.selectionStart) + ins + el.value.substring(el.selectionStart,el.selectionEnd) +

el.value.substring(el.selectionEnd,el.value.length);
}
else if (document.selection && document.selection.createRange) {
el.focus();
var range = document.selection.createRange();
range.text = ins + range.text;
}
}
</script>
<form action='mailbox.php?action=send' method='post'>
<br><table width=25% border=2 class=table-responsive style=padding-left:25%; ><tr>
<td>ID to send to:</td> <td><input type='number' STYLE='color: black;  background-color: white;' name='userid' value='{$_GET['ID']}'/></td></tr><tr>
<td>Subject:</td> <td><input type='text' STYLE='color: black;  background-color: white;' name='subject'/></td></tr><tr>
<td>Message:</td>
<td>

<textarea name='message' rows='10' cols='70' style='color: black; background-color: white'></textarea><br />
<input type="image" src="smilies/smiley1.gif" alt="Smile" title="smile" onclick="insert(this.form.message,':)'); return false;" />
<input type="image" src="smilies/smiley2.gif" alt="Wink" title="Wink" onclick="insert(this.form.message,';)'); return false;" />
<input type="image" src="smilies/smiley3.gif" alt="Suprised" title="Suprised" onclick="insert(this.form.message,':o'); return false;" />
<input type="image" src="smilies/smiley4.gif" alt="Cheesy Grin" title="Cheesy Grin" onclick="insert(this.form.message,':D'); return false;" />
<input type="image" src="smilies/smiley5.gif" alt="Confused" title="Confused" onclick="insert(this.form.message,':s'); return false;" />
<input type="image" src="smilies/smiley6.gif" alt="Sad" title="Sad" onclick="insert(this.form.message,':('); return false;" />
<input type="image" src="smilies/smiley7.gif" alt="Angry" title="Angry" onclick="insert(this.form.message,':red'); return false;" />
<input type="image" src="smilies/smiley8.gif" alt="Clown" title="Clown" onclick="insert(this.form.message,':clown'); return false;" />
<input type="image" src="smilies/smiley9.gif" alt="Embarrassed" title="Embarrassed" onclick="insert(this.form.message,':bashful'); return false;" />
<input type="image" src="smilies/smiley10.gif" alt="Star" title="Star" onclick="insert(this.form.message,':x'); return false;" />
<input type="image" src="smilies/smiley11.gif" alt="Sick" title="Sick" onclick="insert(this.form.message,':green'); return false;" />
<input type="image" src="smilies/smiley12.gif" alt="Bored" title="Bored" onclick="insert(this.form.message,':|'); return false;" />
<input type="image" src="smilies/smiley13.gif" alt="Begging" title="Begging" onclick="insert(this.form.message,';('); return false;" />
<input type="image" src="smilies/smiley14.gif" alt="Smug" title="Smug" onclick="insert(this.form.message,':]'); return false;" />
<input type="image" src="smilies/smiley15.gif" alt="Horny" title="Horny" onclick="insert(this.form.message,':horny'); return false;" />
<input type="image" src="smilies/smiley16.gif" alt="Cool" title="Cool" onclick="insert(this.form.message,':cool'); return false;" /></center>
</td></tr><tr>
</td></tr><td colspan=2><input type='submit' STYLE='color: black;  background-color: white;' value='Send' class='btn'></td></tr></table></form>
EOF;

if($_GET['ID'])
{
print "<br /><table width=75% border=2><tr><td colspan=2><b>Your last 5 mails to/from this person:</b></td></tr>";
$q=mysql_query("SELECT m.*,u1.username as sender from mail m left join users u1 on m.mail_from=u1.userid WHERE (m.mail_from=$userid AND m.mail_to= {$_GET['ID']} ) OR (m.mail_to=$userid AND m.mail_from={$_GET['ID']}) ORDER BY m.mail_time

DESC LIMIT 5",$c);
while($r=mysql_fetch_array($q))
{
$sent=date('F j, Y, g:i:s a',$r['mail_time']);
print "<tr><td>$sent</td> <td><b>{$r['sender']} wrote:</b> {$r['mail_text']}</td></tr>";
}
}

echo " </table> ";

}

function mail_send()
{
global $ir,$c,$userid,$h;


$sql=mysql_query("select max(userid) from users");
$result=mysql_result($sql,$users);

if($_POST['userid'] == 0 )
{
print "Oh no, you're trying to mail a ghost.<br /><br />
<a href='mailbox.php'>Back</a>";

$h->endpage();
exit;


}

if($userid==$_POST['userid'] )
{
print "Whats the point in mailing yourself ?<br /><br />
<a href='mailbox.php'>Back</a>";

$h->endpage();
exit;

}




$subj=str_replace(array("\n"),array("<br />"),strip_tags($_POST['subject']));

$msg=bb2html($_POST['message']);

$codes = array(":)", ";)", ":o", ":D", ":s", ":(", ":red", ":clown", ":bashful", ":x", ":green", ":|", ";(", ":]", ":horny", ":cool");
$images  = array("<img src=smilies/smiley1.gif>", "<img src=smilies/smiley2.gif>", "<img src=smilies/smiley3.gif>", "<img

src=smilies/smiley4.gif>", "<img src=smilies/smiley5.gif>", "<img src=smilies/smiley6.gif>", "<img

src=smilies/smiley7.gif>", "<img src=smilies/smiley8.gif>", "<img src=smilies/smiley9.gif>", "<img

src=smilies/smiley10.gif>", "<img src=smilies/smiley11.gif>", "<img src=smilies/smiley12.gif>", "<img

src=smilies/smiley13.gif>", "<img src=smilies/smiley14.gif>", "<img src=smilies/smiley15.gif>", "<img src=smilies/smiley16.gif>");
$newmsg = str_replace($codes, $images, $msg);
$to= (int) $_POST['userid'];
mysql_query("INSERT INTO mail VALUES ('',0,$userid,$to,unix_timestamp(),'$subj','$newmsg')",$c) or die(mysql_error());
mysql_query("UPDATE users SET new_mail=new_mail+1 WHERE userid={$to}")  or die(mysql_error());
print "Message sent.<br /><br />
<a href='mailbox.php'>Back</a>";
}

function delb()
 {
global $db,$ir,$c,$userid,$h;
$db->query("DELETE FROM mail WHERE mail_id={$_GET['ID']} AND mail_to=$userid");
print "Message deleted!<br /><br />
<a href='mailbox.php'>Back</a>";
}

function mail_delall()
{
global $db,$ir,$c,$userid,$h;
print "


This will delete all the messages in your mailbox.
There is <b>NO</b> undo, so be sure.<br />    <br />
<a href='mailbox.php?action=delall2'> Yes, delete all messages</a><br /> <br />
<a href='mailbox.php'>No, go back</a>";
}
function mail_delall2()
{
global $db,$ir,$c,$userid,$h;
$db->query("DELETE FROM mail WHERE mail_to=$userid");
print "All ".$db->affected_rows()." mails in your inbox were deleted.<br />
<a href='mailbox.php'>Back</a>";
}
function mail_archive()
{
global $ir,$c,$userid,$h;
print "This tool will download an archive of all your messages.<br />
<a href='dlarchive.php?a=inbox'><br />Download Inbox</a><br /><br /
<a href='dlarchive.php?a=outbox'>Download Outbox</a>";
}
$h->endpage();
?>
