<?php

include "globals.php";
if(!$_GET['spend'])
{
if($ir['user_level'] <1)
{
print"You must be atleast level 1 to access whore house !";
$h->endpage();
exit;
}

if($ir['brothel'] >2)
{

print"You would visit this establishment more than three times a day? Are you really trying to make it fall off?";
$h->endpage();
exit;
}
if ($ir['energy'] < $ir['maxenergy'])
{

print "<font color='red'><b>You can only visit here when you have full energy.</font></b>";
$h->endpage();
exit;
}

print "<table border='1' width='90%'class='table' bordercolor='#939393'><th><h3>Speakeasy Brothel</h3></th><tr><td>
Welcome, we have many fine prostitutes here, both male and female.
Prices and payment options are listed below.<br/>Each time you sleep with someone you will gain some will but you will also lose energy and some of your money!<br/> 
P.S. They love you long time!</td></tr></table>

<br />
<h3>For The Guys</h3>
<table border='1' width='90%' bordercolor='#939393' class='table'><tr><th>Prostitute</th><th>Age</th><th>Sex</th><th>Price</th><th><center>Hire</th></tr><tr>
<td><center>Meth Head Sally</td><td><center>19</td><td><center>Female</td><td><center>$50</td><td><center><a href='whorehouse.php?spend=april'>Get sucky sucky</a></td></tr><tr>
<td><center>Kelly</td><td><center>18</td><td><center>Female</td><td><center>$500,000</td><td><center><a href='whorehouse.php?spend=kelly'>Hire Kelly</a></td></tr><tr>
<td><center>Violet</td><td><center>23</td><td><center>Female</td><td><center>$1,000,000</td><td><center><a href='whorehouse.php?spend=shan'>Hire Violet</a></td></tr><tr>
<td><center>Emma</td><td><center>20</td><td><center>Female</td><td><center>$5,000,000</td><td><center><a href='whorehouse.php?spend=rhonda'>Hire Emma</a></td></tr></table>";
print "<br />
<h3>For The Ladies</h3>
<table border='1' width='90%' bordercolor='#939393' class='table'><tr><th>Prostitute</th><th>Age</th><th>Sex</th><th>Price</th><th><center>Hire</th></tr><tr>
<td><center>Mark</td><td><center>26</td><td><center>Male</td><td><center>$300,000</td><td><center><a href='whorehouse.php?spend=mark'>Hire Mark</a></td></tr><tr>
<td><center>Bill</td><td><center>23</td><td><center>Male</td><td><center>$500,000</td><td><center><a href='whorehouse.php?spend=jason'>Hire Bill</a></td></tr><tr>
<td><center>Eddy</td><td><center>20</td><td><center>Male</td><td><center>$1,000,000</td><td><center><a href='whorehouse.php?spend=jaq'>Hire Eddy</a></td></tr><tr>
<td><center>Matthew</td><td><center>29</td><td><center>Male</td><td><center>$5,000,000</td><td><center><a href='whorehouse.php?spend=matt'>Hire Matthew</a></td></tr></table>";

print "<br />
<h3>Gay And Lesbian Only</h3>
<table border='1' width='90%' bordercolor='#939393' class='table'><tr><th>Prostitute</th><th>Age</th><th>Sex</th><th>Price</th><th><center>Hire</th></tr><tr>
<td><center>Tommy</td><td><center>22</td><td><center>Male</td><td><center>$1,000,000</td><td><center><a href='whorehouse.php?spend=tom'>Hire Tommy</a></td></tr><tr>
<td><center>Tina</td><td><center>18</td><td><center>Female</td><td><center>$5,000,000</td><td><center><a href='whorehouse.php?spend=tina'>Hire Tina</a></td></tr><tr>
<td><center>Riko</td><td><center>20</td><td><center>Male</td><td><center>$7,000,000</td><td><center><a href='whorehouse.php?spend=riko'>Hire Riko</a></td></tr><tr>
<td><center>Michelle</td><td><center>18</td><td><center>Female</td><td><center>$10,000,000</td><td><center><a href='whorehouse.php?spend=mich'>Hire Michelle</a></td></tr></table>";

}
else
{
if($_GET['spend'] == 'april')
{
if($ir['money'] <50)
{
print "You don't have enough money to hire a Sally!";
}
else
{
mysql_query("UPDATE users SET will=will+35,energy=0,money=money-50,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed Meth Head Sally \$50, took her to the back room and got a terrible sucky sucky. She used her tears as lube.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'kelly')
{
if($ir['money'] <500000)
{
print "You don't have enough money to hire a Kelly!";
}
else
{
mysql_query("UPDATE users SET will=will+70,energy=0,money=money-500000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Kelly \$500,000, took her to the back room and had your way with her.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'shan')
{
if($ir['money'] <1000000)
{
print "You don't have enough money to hire a Violet!";
}
else
{
mysql_query("UPDATE users SET will=will+140,energy=0,money=money-1000000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed Violet \$1,000,000, took her to the back room and had your way with her.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'rhonda')
{
if($ir['money'] <5000000)
{
print "You don't have enough money to hire a Emma!";
}
else
{
mysql_query("UPDATE users SET will=will+250,energy=0,money=money-5000000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed Emma \$5,000,000, took her to the back room and had your way with her.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'mark')
{
if($ir['money'] <300000)
{
print "You don't have enough money to hire a Mark!";
}
else
{
mysql_query("UPDATE users SET will=will+35,energy=0,money=money-300000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Mark \$300,000, took him to the back room and had your way with him.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'jason')
{
if($ir['money'] <500000)
{
print "You don't have enough money to hire a Bill!";
}
else
{
mysql_query("UPDATE users SET will=will+70,energy=0,money=money-500000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed Bill \$500,000, took him to the back room and had your way with him.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'jaq')
{
if($ir['money'] <1000000)
{
print "You don't have enough money to hire a Eddy!";
}
else
{
mysql_query("UPDATE users SET will=will+140,energy=0,money=money-1000000, brothel=brothel+1WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed Eddy \$1,000,000, took him to the back room and had your way with him.<br/>You feel some of your will coming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'matt')
{
if($ir['money'] <5000000)
{
print "You don't have enough money to hire a Matthew!";
}
else
{
mysql_query("UPDATE users SET will=will+250,energy=0,money=money-5000000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Matthew \$5,000,000, took him to the back room and had your way with him.<br/>You feel some of your will comming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'tommy')
{
if($ir['money'] <1000000)
{
print "You don't have enough money to hire a Tommy!";
}
else
{
mysql_query("UPDATE users SET will=will+35,energy=0,money=money-1000000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Tommy \$1,000,000, took him to the back room and had your way with him.<br/>You feel some of your will comming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'tina')
{
if($ir['money'] <5000000)
{
print "You don't have enough money to hire a Tina!";
}
else
{
mysql_query("UPDATE users SET will=will+70,energy=0,money=money-5000000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Tina \$5,000,000, took her to the back room and had your way with her.<br/>You feel some of your will comming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'riko')
{
if($ir['money'] <7000000)
{
print "You don't have enough money to hire a Riko!";
}
else
{
mysql_query("UPDATE users SET will=will+140,energy=0,money=money-7000000,brothel=brothel+1 WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Riko \$7,000,000, took him to the back room and had your way with him.<br/>You feel some of your will comming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
else if($_GET['spend'] == 'mich')
{
if($ir['money'] <10000000)
{
print "You don't have enough money to hire a Michelle!";
}
else
{
mysql_query("UPDATE users SET will=will+250,energy=0,money=money-10000000, brothel=brothel+1WHERE userid=$userid",$c);
mysql_query("UPDATE users SET will=maxwill WHERE will > maxwill",$c);
print "<center>You payed a Michelle \$10,000,000, took her to the back room and had your way with her.<br/>You feel some of your will comming back to you.<br/><a href='index.php'>>Home</a></center>";
}
}
}
$h->endpage();
?>