<?php

include "globals.php";
$q=$db->query("SELECT * FROM polls WHERE active='0' ORDER BY id desc");
if ( ! $db->num_rows($q) )
{
die("<b>There are no finished polls right now</b>");
}
 print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> POLLS VIEW</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br> ";


while ($r=$db->fetch_row($q))
{
print "
<table border='2' width='100%'><tr bgcolor='gray'> <th>Choice</th> <th>Votes</th> <th width='100'>Bar</th> <th>Percentage</th> </tr> <tr> <th colspan='4'>{$r['question']}</th> </tr>";
for ( $i=1; $i <= 10; $i++)
{
if ( $r['choice'.$i])
{
$k='choice'.$i;
$ke='voted'.$i;
if ( $r['votes'] != 0) {
$perc=$r[$ke]/$r['votes']*100;
} else { $perc=0; }
print "<tr> <td>{$r[$k]}</td> <td>{$r[$ke]}</td> <td><img src='bargreen.gif' alt='Bar' width='$perc' height='10' /></td> <td>$perc%</td></tr>";
}
}
print "<tr><th colspan='4'>Total Votes: {$r['votes']}</th></tr>
<tr><th colspan='4'>Winner: ".$r['choice'.$r['winner']]."</th></tr>
</table><br />";
}

PRINT "</div><br></div></div></div></div></div> ";


$h->endpage();
?>
