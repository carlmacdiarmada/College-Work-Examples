<?php

include "globals.php";
$q=$db->query("SELECT userid FROM users");
$membs=$db->num_rows($q);
$q=$db->query("SELECT userid FROM users WHERE bankmoney>-1");
$banks=$db->num_rows($q);
$q=$db->query("SELECT userid FROM users WHERE gender='Male'");
$male=$db->num_rows($q);
$q=$db->query("SELECT userid FROM users WHERE gender='Female'");
$fem=$db->num_rows($q);
$total=0;
$q=$db->query("SELECT money FROM users");
while($r=$db->fetch_row($q))
{
$total+=$r['money'];
}
$avg=(int) ($total/$membs);
$totalb=0;
$q=$db->query("SELECT bankmoney FROM users WHERE bankmoney>-1");
while($r=$db->fetch_row($q))
{
$totalb+=$r['bankmoney'];
}
$avgb=(int) ($totalb/$banks);
$totalc=0;
$q=$db->query("SELECT crystals FROM users");
while($r=$db->fetch_row($q))
{
$totalc+=$r['crystals'];
}
$totali=0;
$q=$db->query("SELECT inv_qty FROM inventory");
while($r=$db->fetch_row($q))
{
$totali+=$r['inv_qty'];
}
$avgc=(int) ($totalc/$membs);
$q=$db->query("SELECT mail_id FROM mail");
$mail=$db->num_rows($q);
$q=$db->query("SELECT evID FROM events");
$events=$db->num_rows($q);
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Country Statistics </h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>
You step into the Statistics Department and login to the service. You see some stats that interest you.<br />
<table width=100% cellspacing=1 class='table'> <tr> <th>Users</th><th>Money and Crystals</th></tr><tr><td>
There are currently $membs {$set['game_name']} players, $male males and $fem females.</td>  <td>
Amount of cash in circulation: \$".money_formatter($total,"").". <br />
The average player has: \$".money_formatter($avg,"").". <br />
Amount of cash in banks: \$".money_formatter($totalb,"").". <br />
Amount of players with bank accounts: $banks<br />
The average player has in their bank accnt: \$".money_formatter($avgb,"").". <br />
Amount of crystals in circulation: ".money_formatter($totalc,"").". <br />
The average player has: ".money_formatter($avgc,"")." crystals.</td> </tr>
<tr> <th>Mails/Events</th><th>Items</th></tr><tr><td>
".money_formatter($mail,"")." mails and ".money_formatter($events,"")." events have been sent.</td> <td>
There are currently ".money_formatter($totali,"")." items in circulation.</td> </tr>
 </table></div><br></div></div></div></div></div> ";
$h->endpage();
?>
