<?php

include "globals.php";
print "
<h2>Welcome to State Street University</h2>

";
if($ir['course'] > 0)
{
$cd=$db->query("SELECT * FROM courses WHERE crID={$ir['course']}");
$coud=$db->fetch_row($cd);
print "You are currently doing the {$coud['crNAME']}, you have {$ir['cdays']} days remaining.";
}
else
{
if($_GET['cstart'])
{
$_GET['cstart'] = abs((int) $_GET['cstart']);
//Verify.
$cd=$db->query("SELECT * FROM courses WHERE crID={$_GET['cstart']}");
if($db->num_rows($cd) == 0)
{
print "You are trying to start a non-existant course!";
}
else
{
$coud=$db->fetch_row($cd);
$cdo=$db->query("SELECT * FROM coursesdone WHERE userid=$userid AND courseid={$_GET['cstart']}");
if($ir['money'] < $coud['crCOST'])
{
print "You don't have enough money to start this course.";
$h->endpage();
exit;
}
if($db->num_rows($cdo) > 0)
{
print "You have already done this course.";
$h->endpage();
exit;
}
$db->query("UPDATE users SET course={$_GET['cstart']},cdays={$coud['crDAYS']},money=money-{$coud['crCOST']} WHERE userid=$userid");
print "You have started the {$coud['crNAME']}, it will take {$coud['crDAYS']} days to complete.";
}
}
else
{
//list courses
print "Here is a list of available courses.";
$q=$db->query("SELECT * FROM courses");
print "<br /> <br><table width=55% border=2 class=table-responsive style=padding-left:25%; ><th>Course</th><th>Description</th><th>Cost</th><th>Take</th></tr>";
while($r=$db->fetch_row($q))
{
$cdo=$db->query("SELECT * FROM coursesdone WHERE userid=$userid AND courseid={$r['crID']}");
if($db->num_rows($cdo)) { $do="<i>Done</i>"; } else { $do="<a href='education.php?cstart={$r['crID']}'>Take</a>"; }
print "<tr><td>{$r['crNAME']}</td><td>{$r['crDESC']}</td><td>\${$r['crCOST']}</td><td>$do</td></tr>";
}
print "

</table></div><div></div><br></div></div></div></div></div>

";
}
}
$h->endpage();
?>
