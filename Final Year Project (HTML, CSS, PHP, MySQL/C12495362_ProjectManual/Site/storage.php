<?php

include "globals.php";
$q=$db->query("SELECT * FROM items WHERE itmid IN({$ir['equip_primary']}, {$ir['equip_secondary']}, {$ir['equip_armor']})");


print '

';
while($r=$db->fetch_row($q))
{
$equip[$r['itmid']]=$r;
}
print '
<br /><br />You take a trip down to your storage locker, this is where you have kept your life long possesions. <br />
Dont forget to equip a weapon.
<h2 style="padding-top:10px;"> Equipped Items</h2>

<table width="25%" class="table-responsive" style=padding-left:25%;>

<tr>
<th>Primary Weapon</th>
<td>




';
if($equip[$ir['equip_primary']]['itmid'])
{
print $equip[$ir['equip_primary']]['itmname']."</td><td><a href='unequip.php?type=equip_primary'>Unequip Item</a></td>";
}
else
{
print "None equipped.</td><td>&nbsp;</td>";
}
print "</tr>
<tr>
<th>Secondary Weapon</th>
<td>";
if($equip[$ir['equip_secondary']]['itmid'])
{
print $equip[$ir['equip_secondary']]['itmname']."</td><td><a href='unequip.php?type=equip_secondary'>Unequip Item</a></td>";
}
else
{
print "None equipped.</td><td>&nbsp;</td>";
}
print "</tr>
<tr>
<th>Armor</th>
<td>";
if($equip[$ir['equip_armor']]['itmid'])
{
print $equip[$ir['equip_armor']]['itmname']."</td><td><a href='unequip.php?type=equip_armor'>Unequip Item</a></td>";
}
else
{
print "None equipped.</td><td>&nbsp;</td>";
}
print "</tr>
</table>


<h2 style='padding-top:10px;'> Inventory</h2>



";
$inv=$db->query("SELECT iv.*,i.*,it.* FROM inventory iv LEFT JOIN items i ON iv.inv_itemid=i.itmid LEFT JOIN itemtypes it ON i.itmtype=it.itmtypeid WHERE iv.inv_userid={$userid} ORDER BY i.itmtype ASC, i.itmname ASC");
if ($db->num_rows($inv) == 0)
{
print "<b>You have no items! What a sad life. Go out and get some!</b>";
}
else
{
print "<b>These are all your possesions in the world. They are listed below.</b><br />
<br><table width=25% border=2 class=table-responsive style=padding-left:25%; >
<tr>
<th >Item</th>
<th >Sell Value</th>
<th >Total Sell Value</th>
<th >Links</th>
</tr>";
$lt="";
while($i=$db->fetch_row($inv))
{
if($lt!=$i['itmtypename'])
{
$lt=$i['itmtypename'];
print "\n<tr><th colspan=4><b>{$lt}</b></th></tr>";
}
if($i['weapon'])
{
  $i['itmname']="<font color='red'>*</font>".$i['itmname'];
}
if($i['armor'])
{
  $i['itmname']="<font color='green'>*</font>".$i['itmname'];
}
print "<tr><td>{$i['itmname']}";
if ($i['inv_qty'] > 1)
{
print "&nbsp;x{$i['inv_qty']}";
}
print "</td><td>\${$i['itmsellprice']}</td><td>";
print "$".($i['itmsellprice']*$i['inv_qty']);
$usershop=$db->query("select * from usershops where userid=$userid");
if(mysql_num_rows($usershop)!=0)
{
$addtoshop="[<a href='addtoshop.php?ID={$i['inv_id']}'>Put in Shop</a>]";
}
print "</td><td>[<a href='iteminfo.php?ID={$i['itmid']}'>Info</a>] [<a href='itemsend.php?ID={$i['inv_id']}'>Send</a>] [<a href='itemsell.php?ID={$i['inv_id']}'>Sell</a>] [<a href='imadd.php?ID={$i['inv_id']}'>Add To Market</a>] $addtoshop";
$usershop=$db->query("select * from usershops where userid=$userid");

if($i['effect1_on'] || $i['effect2_on'] || $i['effect3_on']) {
print " [<a href='itemuse.php?ID={$i['inv_id']}'>Use</a>]";
}
if($i['weapon'])
{
print " [<a href='equip_weapon.php?ID={$i['inv_id']}'>Equip as Weapon</a>]";
}
if($i['armor'])
{
print " [<a href='equip_armor.php?ID={$i['inv_id']}'>Equip as Armor</a>]";
}
print "</td></tr> ";
}
print "<tr><th colspan=4></th></tr></table>";
print "<small><b>NB:</b> Items with a small red </small><font color='red'>*</font><small> next to their name can be used as weapons in combat.<br />
Items with a small green </small><font color='green'>*</font><small> next to their name can be used as armor in combat.</small>
</div><br></div></div></div></div></div> ";
}
$h->endpage();
?>
