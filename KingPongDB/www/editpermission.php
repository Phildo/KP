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
</div>
<div id="maincontent" class="bordered">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
<h1>Edit Profile</h1>
<form action="validateperm.php" method="post" />
<table> 
<tr> 
<td>Username: </td>
<td width="150">
<?php
echo "<input type=\"text\" name=\"pname\" value=\"".$_POST["pname"]."\" />"; 
?>
</td>
<td>
<?php
if($_POST["error"]=="name"){
	echo "<p class=\"error\"> user not in database </p>";
}
?>
</td>
</tr>
<tr> 
<td>Password:</td>
<td><input type="password" name="pass" /> 
</td>
<td>
<?php
if($_POST["error"]=="pass"){
	echo "<p class=\"error\"> password incorrect </p>";
}
?>
</td>
</tr>
<tr> 
<td>
</td>
<td>
<input type="submit" value="submit" />
</td>
</tr>
</table>
</form>

</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>