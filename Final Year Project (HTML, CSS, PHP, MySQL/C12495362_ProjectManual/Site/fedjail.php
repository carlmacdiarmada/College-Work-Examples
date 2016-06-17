<?php
include_once (DIRNAME(__FILE__) . '/globals.php');
$_GET['action'] = isset($_GET['action']) && ctype_alpha($_GET['action']) ? trim($_GET['action']) : 'index';
switch($_GET['action'])
{
case 'banned': fedded(); break;
case 'forum': forum_banned(); break;
case 'mails': mail_banned(); break;
default: index(); break;
}
if (!in_array($_GET['action'], array('banned','forum','mails','index'))) {
echo "<strong>Invalid Action.</strong>";
$h->endpage();
exit;
}
function formatter($str) { return is_numeric($str) ? number_format($str) : htmlentities(stripslashes($str)); }
function index()
{
print "


<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Jail Management</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>

";

global $db;
$feddedusers = $db->fetch_single($db->query("SELECT COUNT(`userid`) FROM users WHERE (fedjail = 1)"));
$mailbanned = $db->fetch_single($db->query("SELECT COUNT(`userid`) FROM users WHERE (mailban > 0)"));
$forumbanned = $db->fetch_single($db->query("SELECT COUNT(`userid`) FROM users WHERE (forumban > 0)"));
echo "<table class='table' width='50%'>";
echo "<tr>";
echo "<th><a href='?action=banned'>Federal Jail</a></th>";
echo "<td style='text-align:center;'>".$feddedusers."</a></td>";
echo "</tr>";
echo "<tr>";
echo "<th><a href='?action=mails'>Mail Banned</a></th>";
echo "<td style='text-align:center;'>".$mailbanned."</td>";
echo "</tr>";
echo "<tr>";
echo "<th><a href='?action=forum'>Forum Banned</a></th>";
echo "<td style='text-align:center;'>".$forumbanned."</td>";
echo "</tr>";
echo "</table></div><br></div></div></div></div></div>";
}
function fedded()
{
global $db,$r,$h;
echo '

<div class="generalinfo_txt">
<div class="info_mid"><h2 style="padding-top:10px;"> Federal Jail</h2></div>
</div>
<div class="generalinfo_simple"><br> <br><br>

<table border="1" width="100%" class="table" cellspacing="0" cellpadding="2">
    <tr style="text-align:center;">
        <th>Who</th>
        <th>Time Left</th>
        <th>Reason</th>
        <th>Jailer</th>
    </tr>
';
$Find = $db->query("SELECT f.fed_userid, f.fed_days, f.fed_reason, u.username, " .
"uu.userid AS fed_jailer_id, uu.username AS fed_jailer " .
"FROM fedjail f " .
"LEFT JOIN users u ON f.fed_userid=u.userid " .
"LEFT JOIN users uu ON f.fed_jailedby = uu.userid " .
"WHERE f.fed_days > 0 ORDER BY f.fed_days ASC");
while($r = $db->fetch_row($Find))
{
    echo '
    <tr style="text-align:center;">
             <td><a href="viewuser.php?u='.$r['fed_userid'].'">'.formatter($r['username']).'</a></td>
            <td>'.formatter($r['fed_days']).' Days</td>
            <td>'.formatter($r['fed_reason']).'</td>
            <td><a href="viewuser.php?u='.$r['fed_jailer_id'].'"><b>'.formatter($r['fed_jailer']).'</b></a> ['.$r['fed_jailer_id'].']</td>
        </tr>
    ';
}
echo '</table></div><br></div></div></div></div></div>';
}
function mail_banned()
{
global $db,$r,$h;
print '


<div class="generalinfo_txt">
<div class="info_mid"><h2 style="padding-top:10px;"> Mail Banned Users</h2></div>
</div>
<div class="generalinfo_simple"><br> <br><br>


<table border="1" width="100%" class="table" cellspacing="0" cellpadding="2">
    <tr style="text-align:center;">
        <th>Who</th>
        <th>Time Left</th>
        <th>Reason</th>
    </tr>
    ';
$q=$db->query("SELECT `userid`,`username`,`mailban`,`mb_reason` FROM `users` WHERE `mailban` > 0 ORDER BY `mailban` DESC");
while($r=$db->fetch_row($q))
{
print "
<tr>
<td><a href='viewuser.php?u=".$r['userid']."'>".formatter($r['username'])."</a></td>
<td>".formatter($r['mailban'])."</td>
<td>".formatter($r['mb_reason'])."</td>
</tr>";
}
echo "</table> </div><br></div></div></div></div></div> ";
}
function forum_banned()
{
global $db,$r,$h;
print '

<div class="generalinfo_txt">
<div class="info_mid"><h2 style="padding-top:10px;"> Forum Banned Users</h2></div>
</div>
<div class="generalinfo_simple"><br> <br><br>


<table border="1" width="100%" class="table" cellspacing="0" cellpadding="2">
    <tr style="text-align:center;">
        <th>Who</th>
        <th>Time Left</th>
        <th>Reason</th>
    </tr>
    ';
$q=$db->query("SELECT `userid`,`username`,`forumban`,`fb_reason` FROM users WHERE `forumban` > 0 ORDER BY `forumban` DESC");
while($r=$db->fetch_row($q))
{
print "<tr>
<td><a href='viewuser.php?u=".$r['userid']."'>".formatter($r['username'])."</a></td>
<td>".formatter($r['forumban'])."</td>
<td>".formatter($r['fb_reason'])."</td></tr>";
}
echo "</table></div><br></div></div></div></div></div>";
}
$h->endpage();
?>
