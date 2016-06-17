<?php

$jobquery=1;
include "globals.php";
$_GET['interview'] =
isset($_GET['interview']) &&
is_string($_GET['interview']) &&
preg_match("`^\d+$`ims", $_GET['interview']) ?
@intval($_GET['interview']) : 0;

if(!$ir['job'])
{
if(!$_GET['interview'])
{
print "


<h2>Job Expo </h2>


<font size='2'>NOTE:If any of the 'Req' fields are <font color=green>Green</font> it means that you have reached the required stat you need.<br/>
However if any of the 'Req' fields are <font color=red>Red</font> it means that you need to more training on that particular stat.</font>
<br/><Br/>
Hi, looks like you don't have a job yet, here are the jobs you can get.<br /><br/>
<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >
<Tr  >
<th  >Job Name</th>
<th  >Job Desc</th>
<th  >Req Strength</th>
<th  >Req Labour</th>
<th  >Req IQ</th>
<th >Get</th>
</tr>";
$q=$db->query("SELECT j.*,jr.* FROM jobs j LEFT JOIN jobranks jr ON j.jFIRST = jr.jrID");
while($r=$db->fetch_row($q))
{
print "<tr bgcolor='black'>
<td>{$r['jNAME']}</td>
<td>{$r['jDESC']}</td><td>";
if($ir['strength'] < $r['jrSTRN'])
{
print "<font color=red>{$r['jrSTRN']}</font>";
}
else
{
print "<font color=green>{$r['jrSTRN']}</font>";
}
echo "</td><td>";
if($ir['labour'] < $r['jrLABOURN'])
{
print "<font color=red>{$r['jrLABOURN']}</font>";
}
else
{
print "<font color=green>{$r['jrLABOURN']}</font>";
}
echo "</td><td>";
if($ir['IQ'] < $r['jrIQN'])
{
print "<font color=red>{$r['jrIQN']}</font>";
}
else
{
print "<font color=green>{$r['jrIQN']}</font>";
}
echo "</td>
<td><a href='job.php?interview={$r['jID']}'>Get Job</a></td>
</tr>
";
}
print " </table> ";
}
else
{
$q=$db->query("SELECT j.*,jr.* FROM jobs j LEFT JOIN jobranks jr ON j.jFIRST = jr.jrID WHERE j.jID={$_GET['interview']}");
$r=$db->fetch_row($q);
if($ir['strength'] >= $r['jrSTRN'] && $ir['labour'] >= $r['jrLABOURN'] && $ir['IQ'] >= $r['jrIQN'])
{
$db->query("UPDATE users SET job={$_GET['interview']},jobrank={$r['jrID']} WHERE userid=$userid;");
print "<font color=green><b>

<div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
                        margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>

Congratulations you got the job!</div></div><br/>
<a href='job.php'><u>Go To Your Job</u></a>";
}
else
{
print "
           <div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
                        margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>

                        <font color=red> Sorry but you are not good enough to get this job, you need:




";
if($ir['strength'] < $r['jrSTRN'])
{
$s=$r['jrSTRN']-$ir['strength'];
print " $s more Strength,";
}
if($ir['labour'] < $r['jrLABOURN'])
{
$s=$r['jrLABOURN']-$ir['labour'];
print " $s more Labour,";
}
if($ir['IQ'] < $r['jrIQN'])
{
$s=$r['jrIQN']-$ir['IQ'];
print " $s more IQ, ";
}
print "to get the job.</div></div>
<a href='job.php'><u>Back</u></a>  ";
}
}
}
else
{
switch($_GET['action'])
{
case 'quit':
quit_job();
break;

case 'promote':
job_promote();
break;

default:
job_index();
break;
}
}
function job_index()
{
global $db, $ir,$c,$userid,$h;
print "

<h2 style='padding-top:10px;'> Your Job </h2>


You currently work in the {$ir['jNAME']}! You receive \${$ir['jrPAY']} each day at 5pm!<br />
You also receive {$ir['jrIQG']} IQ, {$ir['jrSTRG']} strength, and {$ir['jrLABOURG']} accuracy!<br /><br>
<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >
<tr><td><b>Strength:</b> {$ir['strength']}</td><td><b>IQ:</b> {$ir['IQ']}</td></tr><tr><td><b>Labour:</b> {$ir['labour']}</td><td><b>Job Rank:</b> {$ir['jrNAME']}</td></tr></table>
<br><b>Job Ranks</b><br />
<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >
<tr style='background:gray'><th>Title</th><th>Pay</th><th>Strength Reqd</th><th>IQ Reqd</th><th>Labour Reqd</th></tr>";
$q=$db->query("SELECT * FROM jobranks WHERE jrJOB={$ir['job']} ORDER BY jrPAY ASC;");
while($r=$db->fetch_row($q))
{
print "<tr><td>{$r['jrNAME']}</td><td>\${$r['jrPAY']}</td><td>{$r['jrSTRN']}</td><td>{$r['jrIQN']}</td><td>{$r['jrLABOURN']}</td></tr>";
}
print "</table><br/><b><a href='job.php?action=promote'>Try To Get Promoted</a></b> |
<b><a href='job.php?action=quit'>Quit Job</a></b>
";
}

function job_promote()
{
global $db,$ir,$c,$userid,$h;
$q=$db->query("SELECT * FROM jobranks WHERE jrPAY > {$ir['jrPAY']} AND jrSTRN <= {$ir['strength']} AND jrLABOURN <= {$ir['labour']} AND jrIQN <= {$ir['IQ']} AND jrJOB = {$ir['job']} ORDER BY jrPAY DESC LIMIT 1");
if($db->num_rows($q) == 0)
{
print "

<div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
 margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>

<font color=red>Sorry, you cannot be promoted at this time.</font> </div></div> <br />
<a href='job.php'><u>Back</a></a>";
}
else
{
$r=$db->fetch_row($q);
$db->query("UPDATE users SET jobrank={$r['jrID']} WHERE userid=$userid");
print "

<div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
 margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>

Congrats, you have been promoted to {$r['jrNAME']}. </div></div> <br />
<a href='job.php'>Back</a>";
}
}
function quit_job()
{
global $db,$ir,$c,$userid,$h;
$db->query("UPDATE users SET job=0,jobrank=0 WHERE userid=$userid");
print "

<div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
 margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>

You have quit your job!</div></div><br />
<a href='job.php'>Back</a>";
}
$h->endpage();
?>
