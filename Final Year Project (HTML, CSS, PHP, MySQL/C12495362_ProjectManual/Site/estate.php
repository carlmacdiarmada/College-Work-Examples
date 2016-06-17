<?php

include "globals.php";
$mpq=$db->query("SELECT * FROM houses WHERE hWILL={$ir['maxwill']}");
$mp=$db->fetch_row($mpq);
$_GET['property']=abs((int) $_GET['property']);
if($_GET['property'])
{
$npq=$db->query("SELECT * FROM houses WHERE hID={$_GET['property']}");
$np=$db->fetch_row($npq);
if($np['hWILL'] < $mp['hWILL'])
{
print "You cannot go backwards in houses!";
}
else if ($np['hPRICE'] > $ir['money'])
{
print "You do not have enough money to buy the {$np['hNAME']}.";
}
else
{
$db->query("UPDATE users SET money=money-{$np['hPRICE']},will=0,maxwill={$np['hWILL']} WHERE userid=$userid");
print "Congrats, you bought the {$np['hNAME']} for \${$np['hPRICE']}!";
}
}
else if (isset($_GET['sellhouse']))
{
$npq=$db->query("SELECT * FROM houses WHERE hWILL={$ir['maxwill']}");
$np=$db->fetch_row($npq);
if($ir['maxwill'] == 100)
{
print "You already live in the lowest property!";
}
else
{
$db->query("UPDATE users SET money=money+{$np['hPRICE']},will=0,maxwill=100 WHERE userid=$userid");
print "You sold your {$np['hNAME']} and went back to your shed.";
}
}
else
{
print "<center>Your current property: <font color=green><b>{$mp['hNAME']}</b></font><br><br />The houses you can buy are listed below. Click a house to buy it.<br><br />";
print "<a href='estate.php?sellhouse'><b>Sell Your House</b></a>


<div id='estatePage' class='housepage'>
<div class='housepage_btnpart'>
</div>


<div class='house_bg1'>
<div class='house_bg2'>
<div class='house_conpart'>

<div class='house_titpart'>
<div><img src='' alt='' /></div>
<div class='house_tittxt'>
<div class='htit1'><img src='' alt='' />House Name</div>
<div class='htit2'><img src='' alt='' />City</div>
<div class='htit3'><img src='' alt='' />Price</div>
<div class='htit4'><img src='' alt='' />Will</div>
<div class='htit5'><img src='' alt='' />Buy</div>
</div>

<div><img src='images/gym_tit_right.png' alt='' /></div>
</div>




";
if($ir['willmax'] < 100)
{
}
$hq=$db->query("SELECT * FROM houses WHERE hWILL>{$ir['maxwill']} ORDER BY hWILL ASC");
while($r=$db->fetch_row($hq))
{
print " ";


$hq=mysql_query("SELECT * FROM houses WHERE hWILL>{$ir['maxwill']} ORDER BY hWILL ASC",$c);
while($r=$db->fetch_row($hq))
{
print "


<div class='house_contentpart' >
<div class='shackpart'>
<div class='shack_con'>
<div class='shack_img'><img src='{$r['hPIC']}' width='137' height='72' alt='' /></div>
<div class='shack_txt'>{$r['hNAME']} </div>

</div>
</div>
<div class='city_con'>
<div class='city_md'>
<div class='alltxt'>All City</div>
</div>
<div></div>
</div>

<div class='city_con'>
<div></div>
<div class='city_md'>
<div class='alltxt'>\$$t".money_formatter($r['hPRICE'],'')."</div>
</div>
<div></div>
</div>
<div class='city_con'>
<div></div>

<div class='city_md'>
<div class='alltxt'>{$r['hWILL']}</div>
</div>
<div>/div>
</div>
<div class='buybtn'><a href='estate.php?property={$r['hID']}'><img src='' title='BUY' alt='BUY' /></a></div>
</div> ";
}
print "
</div>
            </div>


</div>

            </div>
        </div>
    </div>        </div></div>            </div></div>
        </div>
        </div>
        </div>
";
}
}
$h->endpage();
?>
