<?php

include "globals.php";
//search name
if(!$_GET['location'])
{
print "Invalid use of file";
}
else
{
$q=$db->query("SELECT * FROM users WHERE location = '{$_GET['location']}' ORDER BY username");
print $db->num_rows($q)." players found. <br />
<table><tr style='background-color:white;'><th>User</th<th>Level</th><th>Money</th></tr>";
while($r=$db->fetch_row($q))
{
print "<tr><td><a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a></td><td>{$r['level']}</td><td>\${$r['money']}</td></tr>";
}
print "</table>";
}
$h->endpage();
?>
