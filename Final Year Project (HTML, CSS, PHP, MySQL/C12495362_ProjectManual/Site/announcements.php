<?php

include "globals.php";
$ac=$ir['new_announcements'];
$q=$db->query("SELECT * FROM announcements ORDER BY a_time DESC");
print "
<h2 style='padding-top:10px;'> Announcement </h2>


<br><table width=25% border=2 class=table-responsive style=padding-left:25%; >

<tr>
<th>Time</th>
<th>Announcement</th>
</tr>";
while($r=$db->fetch_row($q))
{
if($ac > 0)
{
$ac--;
$new="<br /><b>New!</b>";
}
else
{
$new="";
}
print "<tr><td valign=top>".date('F j Y, g:i:s a', $r['a_time']).$new."</td><td valign=top>{$r['a_text']}</td></tr>";
}
print "</table>";
if($ir['new_announcements'])
{
$db->query("UPDATE users SET new_announcements=0 WHERE userid={$userid}");
}
$h->endpage();
?>
