<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
Create a Profile
</title>
<?php include ('recaptchalib.php'); ?>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
</div>
<div id="maincontent" class="bordered">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
<h1>Create a Profile</h1>
<form action="validatemake.php" method="post" />
<table> 
<tr> <td>Username: </td><td width="150">
<?php 
echo "<input type=\"text\" name=\"namep\" value=\"".$_POST["namep"]."\" />*"; 
?> 
</td><td>
<?php
if($_POST["error"] == "name"){
echo "<p class = \"error\" >Name already taken</p>";
}
else if($_POST["error"] == "fuckyou"){
echo "<p class = \"error\" >Name Error- Use only letters and numbers</p>";
}
?>
</td></tr>
<tr><td><br /></td><td><br /></td><td></td></tr>
<tr> <td>Password:</td><td><input type="password" name="pwone" />* </td><td>
<?php
if($_POST["error"] == "pwordinc"){
echo "<p class = \"error\" >Incompatible passwords</p>";
}
else if($_POST["error"] == "pwordz"){
echo "<p class = \"error\" >Password length must be at lease 1 character long</p>";
}
?>
</td></tr>
<tr> <td>Retype <br />Password:</td><td><input type="password" name="pwtwo" />* </td><td></td></tr> 
<tr> <td>Cell #:</td><td>(<input type="text" name="cellone" maxlength="3" size="1" />)<input type="text" name="celltwo" maxlength="3" size="1" />-<input type="text" name="cellthree" maxlength="4" size="2" /></td><td>
<?php
if($_POST["error"] == "name"){
echo "<p class = \"error\" >Phone Error</p>";
}
else {
echo "(for text updates- eg \"You're up in 5 minutes!\")";
}
?>
</td></tr>
<tr> <td>Email:</td><td><input type="text" name="mail" /> </td><td>(to sell to large corporations)</td></tr>
<tr><td><br /></td><td><br /></td><td></td></tr>
<tr><td colspan="3"> 
<?php
  $publickey = "6Lffm8ESAAAAABqCAs0kqv1T6BwgwsFfdQNFA2FV"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?> 
</td></tr>
<tr><td><br /></td><td><br /></td><td></td></tr>
<tr><td></td><td><input type="submit" value="submit" /></td><td>* designates required</td></tr>
</table>
</form>
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>