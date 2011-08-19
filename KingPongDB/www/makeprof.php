<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Create a Profile
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
echo "<input type=\"text\" name=\"pname\" maxlength=\"20\" value=\"".$_POST["pname"]."\" />*"; 
?> 
</td><td>
<?php
if($_POST["error"] == "name"){
echo "<p class = \"error\" >Name already taken</p>";
}
else if($_POST["error"] == "fuckyou"){
echo "<p class = \"error\" >Name Error- Use only letters and numbers</p>";
}
else {
echo "(letters and numbers only)";
}
?>
</td></tr>
<tr><td><br /></td><td><br /></td><td></td></tr>
<tr> <td>Password:</td><td><input type="password"  maxlength="20" name="pwone" />* </td><td>
<?php
if($_POST["error"] == "pwordinc"){
echo "<p class = \"error\" >Incompatible passwords</p>";
}
else if($_POST["error"] == "pwordz"){
echo "<p class = \"error\" >Password length must be at least 1 character long</p>";
}
else {
echo "(ditto)";
}
?>
</td></tr>
<tr> <td>Retype <br />Password:</td><td><input type="password" name="pwtwo" />* </td><td></td></tr> 
<tr> <td>Cell #:</td><td>(<input type="text" name="cellone" maxlength="3" size="1" />)<input type="text" name="celltwo" maxlength="3" size="1" />-<input type="text" name="cellthree" maxlength="4" size="2" /></td><td>
<?php
if($_POST["error"] == "phone"){
echo "<p class = \"error\" >Phone Error</p>";
}
else {
echo "(for text updates- eg \"You're up in 5 minutes!\")";
}
?>
</td></tr>
<tr> <td>Email:</td><td><input type="text" name="mail" /> </td><td>
<?php
if($_POST["error"] == "mail"){
echo "<p class = \"error\" >Invalid Email</p>";
}
else {
echo "(to sell to large corporations)";
}
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