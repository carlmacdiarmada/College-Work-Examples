<?php

$macropage="criminal.php";
include "globals.php";
if($ir['jail'] or $ir['hospital']) { print "This page cannot be accessed while in jail or hospital.";

$h->endpage();
exit;
}
$q2=$db->query("SELECT * FROM crimes ORDER BY crimeBRAVE ASC");
while ($r2=$db->fetch_row($q2))
{
$crimes[]=$r2;
}
$q=$db->query("SELECT * FROM crimegroups ORDER by cgORDER ASC");
print "
<img src='images/crime.jpg' alt='' />
<br /> <br /> <br />
<div class='choosetxt'>Choose your crime carefully, one failed attempt and you'll find yourself in hot water.<br /> Or a cold shower in prision. Don't drop the soap</div>
<br /> <br /> <br />
<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >
<tr><th>Crime</th> <th>Cost</th> <th>Jail Time If You Fail</th><th>Payout</th> <th>Do</th></tr>";
while($r=$db->fetch_row($q))
{
print "<tr><td align='center' colspan='5' class='h'> <b>{$r['cgNAME']}</b></td></tr>";
foreach($crimes as $v)
{
if($v['crimeGROUP'] == $r['cgID'])
{
print "<tr> <td>{$v['crimeNAME']}</td> <td>{$v['crimeBRAVE']} Brave</td> <td>{$v['crimeJAILTIME']} Minutes</td> <td> \${$v['crimeSUCCESSMUNY']} </td>  <td><div class='perform_btn'><a href='docrime.php?c={$v['crimeID']}'>Do</a></div></td> </tr>";
}
}
}
print "</table>";
$h->endpage();
?>
