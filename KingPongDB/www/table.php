<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Table
</title>
<?php include 'db.php'; ?>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
</div>
<div id="maincontent" class="bordered" style="height:320px">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
<h1>Live Table:</h1>
<?php
$conn = loadDB();
$query = "SELECT * FROM cups";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
?>

<div style="float:left;">
<table>
<tr>
<td>
<img src="cup.png" width="35" /> </td><td>= Cup Full</td>
</td>
</tr>
</table>
</div>

<div style="float:right;">
<table>
<tr>
<td>
<img src="emptycup.png" width="35" /> </td><td>= Cup Drained</td>
</td>
</tr>
</table>
</div>
<span style="clear:right; clear:left"></span>
<br /><br /><br />
<div style = "float:left;">
<table>
<tr>
<td>
<table>
<tr>
<td>
<?php
if($row['seven']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['eight']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['nine']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['ten']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<?php
if($row['four']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['five']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['six']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<?php
if($row['two']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['three']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<?php
if($row['one']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>


<div style="float:right;">
<table>
<tr>
<td>
<table>
<tr>
<td>
<?php
if($row['oone']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<?php
if($row['otwo']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['othree']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<?php
if($row['ofour']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['ofive']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['osix']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<?php
if($row['oseven']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['oeight']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['onine']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
<tr>
<td>
<?php
if($row['oten']){
echo "<img src = \"cup.png\" width =\"35\" />";
}
else{
echo "<img src = \"emptycup.png\" width =\"35\" />";
}
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>