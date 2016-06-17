<?php
$housequery=1;


include "globals.php";

print"

<h2 style='padding-left:5px;'> General Info</h2>
<table width=25% border=2  style=padding-left:25%; class=table-responsive>
<tr>
<th colspan=3></th>
</tr>";
$exp=(int)($ir['exp']/$ir['exp_needed']*100);
print "<tr>
<td width=25%><b>Name:</b> {$ir['username']}</td><td width=25%><b>Crystals:</b> {$cm}</td></tr><tr>
<td><b>Level:</b> {$ir['level']}</td>
<td><b>Exp:</b> {$exp}%</td></tr><tr>
<td><b>Money:</b> $fm</td>
<td><b>Gang:</b> ";
$qs=$db->query("SELECT * FROM gangs WHERE gangID={$ir['gang']}");
$rs=$db->fetch_row($qs);
if(!$db->num_rows($qs) )
{
print "No gang";
}
else
{
print" {$rs['gangNAME']} ";
}
print "
</td>
</tr>
<tr><td><b>Property:</b> {$ir['hNAME']}</td>
<td><b>Days Old:</b> {$ir['daysold']} </td></tr>
<tr><td><b> Health:</b> {$ir['hp']}/{$ir['maxhp']}  </td>
<td><b>Energy:</b>  {$ir['energy']}/{$ir['maxenergy']} </td></tr>
<tr><td><b> Brave:</b> {$ir['brave']}/{$ir['maxbrave']}  </td>
<td><b>Will:</b>  {$ir['will']}/{$ir['maxwill']} </td></tr>
<tr>
<th colspan=3></th>
</tr>
</table><br>";

print "

<h2 style='padding-top:5px;'> Status Info</h2>
<br><table width=25% border=2 class=table-responsive style=padding-left:25%; >";
$ts=$ir['strength']+$ir['agility']+$ir['guard']+$ir['labour']+$ir['robskill']+$ir['IQ'];
$ir['strank']=get_rank($ir['strength'],'strength');
$ir['agirank']=get_rank($ir['agility'],'agility');
$ir['guarank']=get_rank($ir['guard'],'guard');
$ir['labrank']=get_rank($ir['labour'],'labour');
$ir['robrank']=get_rank($ir['robskill'],'robskill');
$ir['IQrank']=get_rank($ir['IQ'],'IQ');
$tsrank=get_rank($ts,'strength+agility+guard+labour+IQ');
$ir['strength']=number_format($ir['strength']);
$ir['agility']=number_format($ir['agility']);
$ir['guard']=number_format($ir['guard']);
$ir['labour']=number_format($ir['labour']);
$ir['robskill']=number_format($ir['robskill']);
$ir['IQ']=number_format($ir['IQ']);
$ts=number_format($ts);

print "<tr><th width='33%'>Stat</th><th width='33%'>Amount</th><th width='34%'>Rank</th></tr>
<tr><td>Power</td> <td>{$ir['strength']}</td> <td>Rank: {$ir['strank']}</td></tr>
<tr><td>Agility</td><td> {$ir['agility']} </td><td>Rank: {$ir['agirank']}</td></tr>
<tr><td>Brawn</td><td>{$ir['guard']}</td><td>Rank: {$ir['guarank']}</td></tr>
<tr><td>Accuracy</td><td>{$ir['labour']}</td><td>Rank: {$ir['labrank']}</td></tr>
<tr><td>Rob Skill</td><td>{$ir['robskill']}</td><td>Rank: {$ir['robrank']}</td></tr>
<tr><td>IQ</td><td>{$ir['IQ']}</td><td>Rank: {$ir['IQrank']}</td></tr>
<tr><td>Total Stats:</td><td>{$ts}</td><td>Rank: $tsrank</td></tr>
<tr><th colspan=3></th></tr>
</table>";



$attacks_won = $db->query(sprintf('SELECT COUNT(`log_id`) AS attacking_won FROM `attacklogs` WHERE `attacker` = %u AND `result` = "%s"', $userid, 'won'));
$attacks_wonc = $db->fetch_row($attacks_won);
$attacks_lost = $db->query(sprintf('SELECT COUNT(`log_id`) AS attacking_lost FROM `attacklogs` WHERE `attacker` = %u AND `result` = "%s"', $userid, 'lost'));
$attacks_lostc = $db->fetch_row($attacks_lost);
if ($attacks_lostc['attacking_lost'])
{
$attacking_perl = $attacks_lostc['attacking_lost'] / ($attacks_wonc['attacking_won'] + $attacks_lostc['attacking_lost']) * 100;
}
elseif (!$attacks_lostc['attacking_lost'])
{
$attacking_perl = 0;
}
if ($attacks_wonc['attacking_won'])
{
$attacking_perw = $attacks_wonc['attacking_won'] / ($attacks_wonc['attacking_won'] + $attacks_lostc['attacking_lost']) * 100;
}
elseif (!$attacks_wonc['attacking_won'])
{
$attacking_perw = 0;
}


$attacksd_won = $db->query(sprintf('SELECT COUNT(`log_id`) AS defending_won FROM `attacklogs` WHERE `attacked` = %u AND `result` = "%s"', $userid, 'lost'));
$attacksd_wonc = $db->fetch_row($attacksd_won);
$attacksd_lost = $db->query(sprintf('SELECT COUNT(`log_id`) AS defending_lost FROM `attacklogs` WHERE `attacked` = %u AND `result` = "%s"', $userid, 'won'));
$attacksd_lostc = $db->fetch_row($attacksd_lost);
if ($attacksd_lostc['defending_lost'])
{
$defending_perl = $attacksd_lostc['defending_lost'] / ($attacksd_wonc['defending_won'] + $attacksd_lostc['defending_lost']) * 100;
}
elseif (!$attacksd_lostc['defending_lost'])
{
$defending_perl = 0;
}
if ($attacksd_wonc['defending_won'])
{
$defending_perw = $attacksd_wonc['defending_won'] / ($attacksd_wonc['defending_won'] + $attacksd_lostc['defending_lost']) * 100;
}
elseif (!$attacksd_wonc['defending_won'])
{
$defending_perw = 0;
}

$T_won = $attacks_wonc['attacking_won'] + $attacksd_wonc['defending_won'];
$T_lost = $attacks_lostc['attacking_lost'] + $attacksd_lostc['defending_lost'];
if ($T_won)
{
$T_won_per = $T_won / ($T_won + $T_lost) * 100;
}
elseif (!$T_won)
{
$T_won_per = 0;
}
if ($T_lost)
{
$T_lost_per = $T_lost / ($T_won + $T_lost) * 100;
}
elseif (!$T_lost)
{
$T_lost_per = 0;
}



echo "
<h2 style='padding-top:5px;'> Attack Record</h2>
<br><table width=25% border=2 class=table-responsive style=padding-left:25%; >
";

//returns a formatted string.
echo sprintf('
<table width="25%%" class=table-responsive bgcolor="#000000" cellpadding="1" bordercolor="Silver" border="1">
<tr>
<th > <font color=green> Won </font></th> <th > Amount</th> <th > <font color=red> Lost</th> </font> <th > Amount</th>
</tr>
<tr>
<td>
<font color=green>Attacking Won</font>
</td>

<td>
%u (%u%%)
</td>

<center></center>
<td>
<font color=red> Attacking Lost</font>
</td>

<td>
%u (%u%%)
</td>


</tr>

<tr>
<td>
<font color=green>Defending Won</font>
</td>

<td>
%u (%u%%)
</td>

<td>
<font color=red>Defending Lost</font>
</td>

<td>
%u (%u%%)
</td>


</tr>


<tr>
<td>
<font color=green>Total Won</font>
</td>
<td>
%u (%u%%)
</td>
<td>
<font color=red>Total Lost</font>
</td>

<td>
%u (%u%%)
</td>


</tr> <tr>
<th colspan=4></th>
</tr>




</table>
',
$attacks_wonc['attacking_won'],
$attacking_perw,
$attacks_lostc['attacking_lost'],
$attacking_perl,
$attacksd_wonc['defending_won'],
$defending_perw,
$attacksd_lostc['defending_lost'],
$defending_perl,
$T_won,
$T_won_per,
$T_lost,
$T_lost_per
);



if(isset($_POST['pn_update']))

{
$db->query("UPDATE users SET user_notepad='{$_POST['pn_update']}' WHERE userid=$userid");
$ir['user_notepad']=stripslashes($_POST['pn_update']);
print "<br><br><b>Personal Notepad Updated!</b>";
}


print "
<form action='index.php' method='post'>
<div class='update_con'><textarea rows='0' cols='0' name='pn_update'> ".htmlspecialchars($ir['user_notepad'])."  </textarea></div>
<div class='update_btn'><span><input type='image' src='' id='myNotesButton' title='Update Notes' alt='Update Notes' /></span></div>

</div>
</div>


";
$h->endpage();
?>
