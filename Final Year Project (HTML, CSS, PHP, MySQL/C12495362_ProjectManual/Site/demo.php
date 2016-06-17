<?php

include "globals.php";

print"
<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:5px;'> Attack Demo<br /></h2></div>
<div class='generalinfo_simple'><br>
This demo is supposed to show you how the attacking part of the game works.<br/><br/>

<a href='viewuser.php?u=10'>Click Here for demoStr</a><br /><br />

<a href='viewuser.php?u=11'>Click Here for demoAgility</a><br /><br />

<a href='viewuser.php?u=12'>Click Here for demoBrawn</a><br /><br />

<a href='viewuser.php?u=13'>Click Here for demoAccuracy</a><br /><br />
</div>
</div>

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:5px;'> Crime Demo<br /></h2></div>
<div class='generalinfo_simple'><br>
This demo is supposed to show you how the crime part of the game works.<br/><br/>

<a href='docrime.php?c=1'style='background-color: black; color: green;'>Click Here to search the streets</a><br /><br />

<a href='docrime.php?c=2'style='background-color: black; color: green;'>Click Here to beg for cash</a><br /><br />

<a href='docrime.php?c=3' style='background-color: black; color: orange;'>Click Here to sell bootleg CDs</a><br /><br />

<a href='docrime.php?c=4' style='background-color: black; color: red;'>Click Here to sell bootleg DVDs</a><br /><br />
</div>
</div>

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:5px;'> General Demo<br /></h2></div>
<div class='generalinfo_simple'><br>
This demo is supposed to show you how the various parts of the game works.<br/><br/>

<a href='job.php'>Click Here to find a job</a><br /><br />

<a href='education.php'>Click Here to enroll in a class</a><br /><br />

<a href='lucky.php'>Click Here to open the mysterious box</a><br /><br />

<a href='magicslots.php'>Click Here to play special slots</a><br /><br />
</div>
</div>

";
$h->endpage();
?>
