<?php

include "globals.php";
if($_POST['report'])
{
$_POST['player']=abs((int) $_POST['player']);
$db->query("INSERT INTO preports VALUES('',$userid,{$_POST['player']},'{$_POST['report']}')");
print "Report processed!";
}
else
{
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'>Player Report</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>


If you find something suspicious or out of the ordinary that a player is doing, dont be afraid to report them <br />
Reports are secret and confidential so they will never know it was you.<br /> If they broke the rules, they will be dealt with accordingly.<br />
We appreciate your help in getting a fair playing field. <br /> <br /> 
<form action='preport.php' method='post'>
Player's ID: <input type='text' STYLE='color: black;  background-color: white;' name='player' value='{$_GET['ID']}' /><br /> <br />
Please fill in this form with as much detail and evidence as you can: <br /> <br />
<textarea rows='7' cols='40' name='report'>{$_GET['report']}</textarea><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Send Report' /></form></div><br></div></div></div></div></div>";
}
$h->endpage();
?>
