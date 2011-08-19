<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Edit Profile
</title>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
<?php include ('db.php'); ?>
</div>
<div id="maincontent" class="bordered">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents">
<h1>Your Profile</h1>
<?php

$name = $_POST["pname"];
$pass = $_POST["pass"];

$conn = loadDB();
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0) {
	$row = mysql_fetch_assoc($result);
	$phone = $row['phone'];
	$mail = $row['mail'];
	$name = $row['name'];
}
else {
die ("Name not found. Please go back and try again");
}

closeDB($conn);
?>

<h3>Upload Photo:</h3>
<div id="picture">
<?php
if(file_exists("upload/".$name.".png")){
	echo "<img src = \"upload/".$name.".png\" width = \"150\" />";
}
else{
	echo "<img src = \"upload/anon.png\" width = \"150\" />";
}
?>
</div>
<form action="uploaded_file.php" method="post"
enctype="multipart/form-data">
<table cellpadding="2">
<tr>
<td>Filename: (use .png) </td>
</tr>
<tr>
<td>
<input type="file" name="file" /> 
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="upload pic" />
</td>
</tr>
<tr>
<td>
<?php
echo "<input type=\"hidden\" name=\"name\" value=\"".$name."\">";
?>
</td>
</tr>
</table>
</form>
<br />
<p style="clear:left;"></p>
<br />

<h3>Edit Profile: </h3>
<form action="validateedit.php" method="post" />
<table> 
<tr> <td>Username: </td><td width="150">
<?php 
echo $name; 
?> 
</td><td>
</td></tr>
<tr><td><br /></td><td><br /></td><td></td></tr>
<tr> <td>Password:</td><td>
<?php
echo "<input type=\"password\"  maxlength=\"20\" name=\"pwone\" value=\"".$pass."\" />* </td><td>";
 
if($_POST["error"] == "pwordinc"){
echo "<p class = \"error\" >Incompatible passwords</p>";
}
else if($_POST["error"] == "pwordz"){
echo "<p class = \"error\" >Password length must be at least 1 character long</p>";
}
else {
echo "(only letters and numbers)";
}
?>
</td></tr>
<tr> <td>Retype <br />Password:</td><td>
<?php
echo "<input type=\"password\"  maxlength=\"20\" name=\"pwtwo\" value=\"".$pass."\" />*";
?>
</td><td></td></tr> 
<tr> <td>Cell #:</td><td>(
<?php
echo "<input type=\"text\" name=\"cellone\" maxlength=\"3\" size=\"1\" value=\"".substr($phone,0,3)."\"/>";
?>
)
<?php
echo "<input type=\"text\" name=\"celltwo\" maxlength=\"3\" size=\"1\" value=\"".substr($phone,3,3)."\"/>";
?>
-
<?php 
echo "<input type=\"text\" name=\"cellthree\" maxlength=\"4\" size=\"2\" value=\"".substr($phone,6,4)."\"/>";
?>
</td><td>
<?php
if($_POST["error"] == "phone"){
echo "<p class = \"error\" >Phone Error</p>";
}
else {
echo "(for text updates- eg \"You're up in 5 minutes!\")";
}
?>
</td></tr>
<tr> <td>Email:</td><td>
<?php
echo "<input type=\"text\" name=\"mail\" value=\"".$mail."\" /> </td><td>"
?>
<?php
if($_POST["error"] == "mail"){
echo "<p class = \"error\" >Invalid Email</p>";
}
else {
echo "(to sell to large corporations)";
}
?>
</td></tr>
<tr><td><br /></td><td>
<?php
echo "<input name= \"name\" type=\"hidden\" value=\"".$name."\">";
echo "<input name= \"oldpass\" type=\"hidden\" value=\"".$pass."\">";
?>
<br /></td><td></td></tr>

<tr><td></td><td><input type="submit" value="submit" /></td><td>* designates required</td></tr>
</table>
</form>

</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>