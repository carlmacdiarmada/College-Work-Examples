<?php

include "globals.php";
$_GET['action'] = isset($_GET['action']) && is_string($_GET['action']) ? strtolower(trim($_GET['action'])) : "";
switch($_GET['action'])
{
case 'sexchange2':
do_sex_change();
break;

case 'sexchange':
conf_sex_change();
break;

case 'passchange2':
do_pass_change();
break;

case 'passchange':
pass_change();
break;

case 'namechange2':
do_name_change();
break;

case 'namechange':
name_change();
break;


case 'picchange2':
do_pic_change();
break;

case 'picchange':
pic_change();
break;


case 'signature2':
do_signature_change();
break;

case 'signature':
signature_change();
break;

case 'forumchange2':
do_forum_change();
break;

case 'forumchange':
forum_change();
break;

default:
prefs_home();
break;
}
function prefs_home()
{
global $db,$ir,$c,$userid,$h;
print "

<div class='icolumn2' id='mainContentDiv'>
<div class='preferencepage'>
<div class='pref_toppart'>
<div  class='prev_txt'>View your profile</div>
<div class='profilepage_btn'><a href='viewuser.php?u={$ir['userid']}''>here</a></div>
</div>

<div class='pref_menupart'>
<div class='pref_menu1'><a href='preferences.php'>Profile Preferences</a></div>
</div>


<!-- Preferences Content Part Starts -->
<div class='pref_conpart'>

<div class='pref_mid'>
<!-- Preference Content Part 1 -->            <div class='pref_contentbg'>
<div class='pref_img1'> <img src=  '{$ir['display_pic']}' width='96' height='94' /></div>
<div class='pref_txtpart'>
<div class='pref_txt1'>Display Pic Change</div>
<div class='pref_txt2'>Please note that this must be externally hosted, <a href='http://imageshack.us'>ImageShack</a> is our recommendation.<br />
</div>
</div>




<div class='uploadpart'>
<div class='upload_md'>
<br><br><a href='preferences.php?action=picchange'><b>Change Display Pic</b></a>

</div>
</div>



</div>    <!-- Preference Content Part 2 -->
<div class='pref_contentbg pref_conbg1'>
<div class='pref_txtpart pref_txtpart1'>
<div class='pref_txt1'>Sex Change</div>
<div class='pref_txt2'><strong>Your current gender is {$ir['gender']}   </strong><br/>Are you sure you want to change your gender?</div>
</div>

<div class='changebtn'> <a href='/preferences.php?action=sexchange2'> Change Sex</a></div>
</div>


<!-- Preference Content Part 6 -->
<div class='pref_contentbg pref_conbg1'>
<form action='/preferences.php?action=signature2' method='post'>
<div class='pref_txtpart pref_txtpart5'>
<div class='pref_txt1'>Profile Signature Change</div>
<div class='pref_txt2'>Signature (you may use BBcode):<br/>(300 Chars MAX)</div>
</div>
<div class='signbox'><textarea rows='0' cols='0' name='newsignature'>{$ir['signature']}</textarea></div>
<div class='changebtn3'> <input type='submit' STYLE='color: white;  background-color: grey;' value=' Change Signature' />  </div>

</form>




</div>            <!-- Preference Content Part 7 -->
<div class='pref_contentbg pref_conbg1'>
<div class='pref_txtpart pref_txtpart3'>
<div class='pref_txt1'>Password Change</div>
<div class='pref_txt2' style='line-height:15px;'>Change your old  password here<br/>( Numbers and Letters Only )</div>

</div>
<div class='uploadpart uploadpart2'>
<div class='upload_md'>
<form action='/preferences.php?action=passchange2' method='post'>
<div class='perf_passpart'>
<div class='passtext'>OLD:</div>

<div class='passbox'><input type='password' name='oldpw' value='**********' onfocus='if(this.value=='**********') this.value='';' onblur='if(this.value=='') this.value='**********';'  /></div>
</div>
<div class='perf_passpart' style='margin-top:3px;'>
<div class='passtext'>New:</div>
<div class='passbox'><input type='password' name='newpw' value='**********' onfocus='if(this.value=='**********') this.value='';' onblur='if(this.value=='') this.value='**********';'  /></div>
</div>
<div class='perf_passpart'>
<div class='passtext'>&nbsp;</div>

<div class='changeinfo_btn'><input type='submit' value=''  /></div>
</div>
</form>
</div>
</div>
</div>

<!-- Preference Content Part 11 -->
<div class='pref_contentbg pref_conbg1'>
<div class='pref_txtpart pref_txtpart3'>
<div class='pref_txt1' style='height:25px;'>Name Change</div>
<div class='pref_txt4' style='line-height:15px;'>Current Name:<font color=yellow> {$ir['username']}</font>     <br/>Please note that you still use the same name as your username on the login screen,<br/>this only changes the display name visible to other players.<br/>Please only use Alphanumeric characters.</div>
</div>

<div class='uploadpart uploadpart3'>
<div class='upload_md'>
<form action='/preferences.php?action=namechange2' method='post'>
<div class='perf_passpart perf_passpart1'>
<div class='passtext passtext1'>New Name:&nbsp;&nbsp;&nbsp;</div>
<div class='passbox'><input type='text' name='newname' /></div>
</div>
<div class='perf_passpart' style='padding-top:10px;'>

<div class='passtext'>&nbsp;</div>
<div class='changeinfo_btn changeinfo_btn1'> <input type='submit' value='' /> </div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
<!-- //Preferences Content Part End --></div></div>
</div>
</div>
</div>";

}


function conf_sex_change()
{
global $ir,$c,$userid,$h;
if($ir['gender'] == "Male") { $g="Female"; } else { $g="Male"; }
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Sex Change</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>

Are you sure you want to become a $g?<br />
<a href='preferences.php?action=sexchange2'>Yes</a> | <a href='preferences.php'>No</a></div><br></div></div></div></div></div>";
}
function do_sex_change()
{
global $db,$ir,$c,$userid,$h;
if($ir['gender'] == "Male") { $g="Female"; } else { $g="Male"; }
$UserUpdate = sprintf
(
"UPDATE users SET gender = '$g' WHERE (userid = %u)", $userid);
mysql_query($UserUpdate);
print "Success, you are now $g!<br />
<a href='preferences.php'>Back</a>";
}
function pass_change()
{
global $ir,$c,$userid,$h;
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Password Change</h2></div>
</div>
<div class='generalinfo_simple'><br> <br><br>

<form action='preferences.php?action=passchange2' method='post'>Current Password: <input type='password' name='oldpw' /><br />
New Password: <input type='password' name='newpw' /><br />
Confirm: <input type='password' name='newpw2' /><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Change PW' /></form></div><br></div></div></div></div></div>";
}
function do_pass_change()
{
global $db,$ir,$c,$userid,$h;
if(md5($_POST['oldpw']) != $ir['userpass'])
{
print "The current password you entered was wrong.<br />
<a href='preferences.php?action=passchange'>> Back</a>";
}
else if($_POST['newpw'] !== $_POST['newpw2'])
{
print "The new passwords you entered did not match!<br />
<a href='preferences.php?action=passchange'>> Back</a>";
}
else
{
$UserUpdate = sprintf
(
"UPDATE users SET userpass=md5('{$_POST['newpw']}') WHERE (userid = %u)", $userid);
mysql_query($UserUpdate);
print "Password changed!";
}
}
function name_change()
{
global $ir,$c,$userid,$h;
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Name Change</h2></div>
<div class='generalinfo_simple'><br> <br><br>

Please note that you still use the same name to login, this procedure simply changes the name that is displayed. <form action='preferences.php?action=namechange2' method='post'>
New Name: <input type='text' STYLE='color: black;  background-color: white;' name='newname' /><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Change Name' /></form>

</div><br></div></div></div></div></div>";
}
function do_name_change()
{
global $db,$ir,$c,$userid,$h;
if($_POST['newname'] == "" || $_POST['newname'] == " " || $_POST['newname'] == "  " || $_POST['newname'] == "  " || $_POST['newname'] == "   " || $_POST['newname'] == "   " || $_POST['newname'] == "   " || $_POST['newname'] == "   " || $_POST['newname'] == "   " || $_POST['newname'] == "   " || $_POST['newname'] == "    " || $_POST['newname'] == "     " || $_POST['newname'] == "     " || $_POST['newname'] == "     " || $_POST['newname'] == "     " && $_POST['newname'] == "      ")
{
 $i = mysql_query("SELECT * FROM users WHERE username='{$_POST['username']}'") or die(mysql_error());
  if(mysql_num_rows($i)) {echo 'Username already in use!';$h->endpage(); exit; }
print "You did not enter a new name.<br />
<a href='preferences.php?action=namechange'> Back</a>";
}
else
{
$_POST['newname']=str_replace(array("<", ">", "\\\'"), array("<", ">", "&#039;"), $_POST['newname']);
$_POST['newname']=str_replace(array("{", "}", "\\\'"), array("<", ">", "&#039;"), $_POST['newname']);
$_POST['newname']=str_replace(array("eval", "alert", "\\\'"), array(".", ".", "."), $_POST['newname']);
$checkun=$db->num_rows($db->query("SELECT * FROM users WHERE username='{$_POST['newname']}' AND userid!=$userid"));
if($checkun)
{
echo "Username is already in use.";
$h->endpage();
exit;
}
$checkln=$db->num_rows($db->query("SELECT * FROM users WHERE login_name='{$_POST['newname']}' AND userid!=$userid"));
if($checkln)
{
echo "Username is already in use.";
$h->endpage();
exit;
}
$UserUpdate = sprintf
(
"UPDATE users SET username ='{$_POST['newname']}'  WHERE (userid = %u)", $userid);
mysql_query($UserUpdate);
print "Username changed!";
}
}

function pic_change()
{
global $ir,$c,$userid,$h;
print "

<div class='generalinfo_txt'>
<div class='info_mid'><h2 style='padding-top:10px;'> Pic Change</h2></div>
<div class='generalinfo_simple'><br> <br><br>

Please note that this must be externally hosted, <a href='http://imageshack.us'>ImageShack</a> is our recommendation.<br />
Any images that are not 150x150 will be automatically resized <form action='preferences.php?action=picchange2' method='post'>
New Pic Url: <input type='text' STYLE='color: black;  background-color: white;' name='newpic' value='".htmlspecialchars(stripslashes($ir['display_pic']))."' /><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Change Picture' /></form></div><br></div></div></div></div></div>";
}
function do_pic_change()
{
global $db,$ir,$c,$userid,$h;
if($_POST['newpic'] == "")
{
print "You did not enter a new pic.<br />
<a href='preferences.php?action=picchange'>> Back</a>";
}

else {
   if(!preg_match('~(.?).(jpg|jpeg|gif|png)~i', $_POST['newpic'])) {
   print "You are trying to upload an invalid image";
   }

   else {
    $_POST['newpic'] = str_replace(array("<", ">", "'", ";", ".php", ".html", ".js"), array("", "", "", "", "", "", ""), $_POST['newpic']);
$userupdate = sprintf("UPDATE users SET display_pic = '{$_POST['newpic']}' WHERE userid = '%u' ",
    ($userid));
        mysql_query($userupdate);
print "Pic changed!";
}
}
}

function signature_change()
{
global $db,$ir,$c,$userid,$h;
print "<h3>Profile Signature Change</h3><br />
<form action='preferences.php?action=signature2' method='post'>
New Profile Signature:
<textarea rows=7 cols=40 name='newsignature'>{$ir['signature']}</textarea><br />
<input type='submit' STYLE='color: black;  background-color: white;' value='Change Profile Signature' /></form>
<b>Current Profile Signature :</b> {$ir['signature']} ";
}

function do_signature_change()
{
global $db,$ir,$c,$userid,$h;
if($_POST['newsignature'] == "")
{
print "You did not enter a new signature.<br />
> <a href='preferences.php?action=signature'>Back</a>";
}
else
{
$db->query("UPDATE users SET signature='{$_POST['newsignature']}' WHERE userid=$userid",$c);
print "Profile Signature changed!    <br/>

<a href='preferences.php'>Back</a>

";
}
}

function forum_change()
{
global $ir,$c,$userid,$h;
print "<h3>Forum Info Change</h3>
Please note that the avatar must be externally hosted, <a href='http://imageshack.us'>ImageShack</a> is our recommendation.<br />
Any avatars that are not 100x100 will be automatically resized <form action='preferences.php?action=forumchange2' method='post'>
Avatar: <input type='text' name='forums_avatar' value='".htmlspecialchars(stripslashes($ir['forums_avatar']))."' /><br />
Signature (you may use BBcode): <textarea rows=10 cols=50 name='forums_signature'>".$ir['forums_signature']."</textarea><br />
<input type='submit' value='Change Info' /></form>";
}
function do_forum_change()
{
global $db,$ir,$c,$userid,$h;
$_POST['forums_avatar']= mysql_real_escape_string(strip_tags($_POST['forums_avatar']));
$_POST['forums_avatar']=str_replace(array("<", ">"), array("&lt;", "&gt;"), $_POST['forums_avatar']);
mysql_query("UPDATE `users` SET `forums_avatar`='".$_POST['forums_avatar']."', `forums_signature` = '".$_POST['forums_signature']."' WHERE (`userid`=$userid)");
print "Forum Info changed!";
}
$h->endpage();
