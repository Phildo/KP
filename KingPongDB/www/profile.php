<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - <?php echo $_GET["name"]."'s Profile"; ?>
</title>
<?php include'db.php'; ?>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
</div>
<div id="maincontent" class="bordered" style="height:400px;">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
<?php
$name = $_GET["name"];
$conn = loadDB();
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0) {
	$row = mysql_fetch_assoc($result);
	$creds = $row['credits'];
	$wins = $row['wins'];
	$loss = $row['losses'];
	$cupshit = $row['cupshit'];
	$cupsdown = $row['cupsdown'];
	$partners = $row['partners'];
	$rank = $row['rank'];
	echo "<h2> ".$row["name"]."</h2><div id=\"picture\">";
	if(file_exists("upload/".$row["name"].".png")){
	echo "<img src = \"upload/".$row["name"].".png\" width = \"150\" />";
	}
	else{
	echo "<img src = \"upload/anon.png\" width = \"150\" />";
	}
	echo "</div> <div id=\"profile\">
	<table>
	<tr><td>CREDITS: </td><td width = '50'></td><td>".$creds."</td></tr>
	<tr><td>WINS: </td><td></td><td>".$wins."</td></tr>
	<tr><td>LOSSES: </td><td></td><td>".$loss."</td></tr>
	<tr><td>CUPS HIT: </td><td></td><td>".$cupshit."</td></tr>
	<tr><td>CUPS SURRENDERED: </td><td></td><td>".$cupsdown."</td></tr>
	<tr><td>RANK: </td><td></td><td>#".$rank."</td></tr>
	<tr><td>PARTNERS: </td><td></td><td>".$partners."</td></tr>
	</table></div>";
}
else {
echo "Name not found";
}

closeDB($conn);
?>
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>