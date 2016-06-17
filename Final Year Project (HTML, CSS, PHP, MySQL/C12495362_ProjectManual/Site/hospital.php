<?php
include "globals.php";
print "


<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Hospital</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>
<table class='tablee'><tr><td><center>You take a trip down to the hospital to take a look at those less fortunate than you.</td></tr></table><br>
<table width='75%' class=\"table\" border=\"0\" cellspacing=\"1\"><tr bgcolor=gray><th>Name</th> <th>Level</th> <th>Time</th><th>Reason</th></tr>";
$q=$db->query("SELECT u.*,c.* FROM users u LEFT JOIN gangs c ON u.gang=c.gangID WHERE u.hospital > 0 ORDER BY u.hospital DESC",$c);
while($r=$db->fetch_row($q))
{
print "\n<tr><td>{$r['gangPREFIX']} <a href='viewuser.php?u={$r['userid']}'>{$r['username']}</a> [{$r['userid']}]</td><td>
{$r['level']}</td><td>{$r['hospital']} minutes</td><td>{$r['hospreason']}</td></tr>";
}
print "</table></div><div></div><br></div></div></div></div></div>";
$h->endpage();
?>
