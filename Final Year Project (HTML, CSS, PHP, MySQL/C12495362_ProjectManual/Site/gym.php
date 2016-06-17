<?php
$macropage="gym.php";
require "globals.php";
if($ir['hospital']) { die("<prb>This page cannot be accessed while in hospital.</prb>"); }
$statnames=array(
'Strength' => 'strength',
'Agility' => 'agility',
'Guard' => 'guard',
'Labour' => 'labour');
$_POST['amnt']=abs((int) $_POST['amnt']);
if(!$ir['jail'])
{
print "
<img src='images/gymbanner.jpg' alt='' />
";
}
else
{
  print "

  ";
}


if($_POST['stat'] && $_POST['amnt'])
{
  $stat=$statnames[$_POST['stat']];
  if(!$stat)
  {
    die("<prb><br>This stat cannot be trained.</prb>");
  }
  if($_POST['amnt'] > $ir['energy'])
  {
    print("<prb><font color='red'>You do not have enough energy to train that much.</font></prb>");
  }
  else
  {
    $gain=0;
    for($i=0; $i<$_POST['amnt']; $i++)
    {
      $gain+=rand(1,3)/rand(800,1000)*rand(800,1000)*(($ir['will']+20)/150);
      $ir['will']-=rand(1,3);
      if($ir['will'] < 0) { $ir['will']=0; }
    }
    if($ir['jail']) { $gain/=2; }
    $db->query("UPDATE `userstats` SET `{$stat}` = `{$stat}` + $gain WHERE `userid` = $userid");
    $db->query("UPDATE `users` SET `will` = {$ir['will']}, energy = energy - {$_POST['amnt']} WHERE `userid` = $userid");
    $inc=$ir[$stat]+$gain;
    $inc2=$ir['energy']-$_POST['amnt'];
    if($stat=="strength")
    {
      print "
      <div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
                        margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>


      You grab a barbell and throw 225lb on the bar and do {$_POST['amnt']} reps, You go heavier and heavier until You are out of energy.<br />
      You have gained {$gain} strength<br />
      You now have {$inc} strength and {$inc2} energy left.

      </div>
      ";
    }


    elseif($stat=="agility")
    {
      print "
       <div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
                        margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>
      You throw down the ladder onto the ground and start doing ladder drills, You keep doing these at 30 second intervals for {$_POST['amnt']} sets.<br />
      You have gained {$gain} agility<br />
      You now have {$inc} agility and {$inc2} energy left.
      </div> ";
    }


    elseif($stat=="guard")
    {
      print "
      <div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
                        margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>
      You decide to get into the boxing ring and let people throw punches at you, brushing them off like Ali. You go for {$_POST['amnt']} seconds.<br />
      You have gained {$gain} brawn by doing<br />
      You now have {$inc} brawn and {$inc2} energy left.
      </div>";
    }


    elseif($stat=="labour")
    {
      print "
       <div id='mainOutput' style='text-align: center; color: green;  width: 600px; border: 1px solid #222222; height: 70px;
                        margin: 0 auto 10px; clear: both; position: relative; left: -20px; padding: 8px'>
      You  go to the studio and pick up the heaviest medicine ball. You pick a target on the wall opposite you and throw it. After {$_POST['amnt']} shots you are getting closer and closer.<br />
      You have gained {$gain} accuracy<br />
      You now have {$inc} accuracy and {$inc2} energy left.
      </div> ";
    }


    $ir['energy']-=$_POST['amnt'];
    $ir[$stat]+=$gain;
  }
}
$ir['strank']=get_rank($ir['strength'],'strength');
$ir['agirank']=get_rank($ir['agility'],'agility');
$ir['guarank']=get_rank($ir['guard'],'guard');
$ir['labrank']=get_rank($ir['labour'],'labour');


if(  $ir['energy'] == "0"   )
{
print "

<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >
<tr><td><p>
You dont have any energy for taining <a href='crystaltemple.php?spend=refill'><font color='green'>[Refill Energy]</font></a></p></td></tr></table>
<br />
";
}

else

{

print "

<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >
<tr><td><p>
You can train up to <prb> {$ir['energy']} </prb> times with your
current energy.</p></td></tr></table>
<br />";
}

print "

<br><table width=55% border=2 class=table-responsive style=padding-left:25%; >

<tr>
   <form action='gym.php' method='post'>
   <input type='hidden' name='stat' value='Strength'></input>
   <th width='15%'><ph2>Strength:</ph2></th>
   <td width='15%'>{$ir['strength']}</td>
   <td width='10%'>Rank {$ir['strank']}</td>
   <td width='40%'>Times to train: <input name='amnt' type='text' style='color: white;background-color: black;' value='{$ir['energy']}' > </input> </td>
   <td width='20%'>  <input type=image name='submit' src='images/train.jpg' alt='Home' border='0''> </input> </td>
   </form>
</tr>
<tr>
   <form action='gym.php' method='post'>
   <input type='hidden' name='stat' value='Agility'></input>
   <th width='15%'><ph2>Agility:</ph2></th>
   <td width='15%'>{$ir['agility']}</td>
   <td width='10%'>Rank {$ir['agirank']}</td>
   <td width='40%'>Times to train: <input type='text' style='color: white;  background-color: black;' name='amnt' value='{$ir['energy']}'></input></td>
   <td width='20%'><input type=image name='submit' src='images/train.jpg' alt='Home' border='0''> </input> </td>
   </form>
</tr>
<tr>
   <form action='gym.php' method='post'>
   <input type='hidden' name='stat' value='Guard'></input>
   <th width='15%'><ph2>Brawn:</ph2></th>
   <td width='15%'>{$ir['guard']}</td>
   <td width='10%'>Rank {$ir['guarank']}</td>
   <td width='40%'>Times to train: <input type='text' style='color: white;  background-color: black;' name='amnt' value='{$ir['energy']}'></input></td>
   <td width='20%'><input type=image name='submit' src='images/train.jpg' alt='Home' border='0''> </input> </td>
   </form>
</tr>
<tr>
   <form action='gym.php' method='post'>
   <input type='hidden' name='stat' value='Labour'></input>
   <th width='15%'><ph2>Accuracy:</ph2></th>
   <td width='15%'>{$ir['labour']}</td>
   <td width='10%'>Rank {$ir['labrank']}</td>
   <td width='40%'>Times to train: <input type='text' style='color: white; background-color: black;' name='amnt' value='{$ir['energy']}'></input></td>
   <td width='20%'><input type=image name='submit' src='images/train.jpg' alt='Home' border='0''> </input> </td>
   </form>
</tr>
</table><br />";


$h->endpage();
?>
