<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Profiles
</title>
<?php include 'db.php'; ?>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
</div>
<div id="maincontent" class="bordered" style="height:1000px;">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
<h1>Current Profiles:</h1>
<?php
$conn = loadDB();
$query = "SELECT * FROM profiles";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0){
	while($row = mysql_fetch_assoc($result)){
		echo "<div class=\"name\"><a href = \"profile.php?name=".$row['name']."\">".$row['name']."</a></div>";
	}
}
closeDB($conn);
?>
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>