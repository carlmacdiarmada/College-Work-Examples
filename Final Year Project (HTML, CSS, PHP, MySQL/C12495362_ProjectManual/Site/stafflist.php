<?php

include "globals.php";
$staff=array();
$q=$db->query("SELECT * FROM users WHERE user_level IN(2,3,5) ORDER BY userid ASC");
while($r=$db->fetch_row($q))
{
$staff[$r['userid']]=$r;
}
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Staff List</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>

<b>Admins</b><br />

<table width=75% cellspacing=1 class='table'> <tr style='background:gray'><th>User</th> <th>Level</th> <th>Money</th> <th>Last Seen</th> <th>Status</th> </tr>";

foreach($staff as  $r)
{
if($r['user_level']==2)
{
if($r['laston'] >= time()-15*60) { $on="<font color=green><b>Online</b></font>"; } else { $on="<font color=red><b>Offline</b></font>"; }
print "<tr> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td> <td>{$r['level']}</td> <td>\${$r['money']}</td> <td>".date('F j, Y, g:i:s a',$r['laston'])."</td> <td>$on</td> </tr>";
}
}
print "</table>";
print "<b>Secretaries</b><br />
<table width=75% cellspacing=1 class='table'> <tr style='background:gray'><th>User</th> <th>Level</th> <th>Money</th> <th>Last Seen</th> <th>Status</th> </tr>";
foreach($staff as  $r)
{
if($r['user_level']==3)
{
if($r['laston'] >= time()-15*60) { $on="<font color=green><b>Online</b></font>"; } else { $on="<font color=red><b>Offline</b></font>"; }
print "<tr> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td> <td>{$r['level']}</td> <td>\${$r['money']}</td> <td>".date('F j, Y, g:i:s a',$r['laston'])."</td> <td>$on</td> </tr>";
}
}
print "</table>";
print "<b>Assistants</b><br />
<table width=75% cellspacing=1 class='table'> <tr style='background:gray'><th>User</th> <th>Level</th> <th>Money</th> <th>Last Seen</th> <th>Status</th> </tr>";
foreach($staff as  $r)
{
if($r['user_level']==5)
{
if($r['laston'] >= time()-15*60) { $on="<font color=green><b>Online</b></font>"; } else { $on="<font color=red><b>Offline</b></font>"; }
print "<tr> <td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td> <td>{$r['level']}</td> <td>\${$r['money']}</td> <td>".date('F j, Y, g:i:s a',$r['laston'])."</td> <td>$on</td> </tr>";
}
}
print "</table></div><br></div></div></div></div></div>";

$h->endpage();
?>
