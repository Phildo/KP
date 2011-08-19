<?php
include 'db.php';
$conn = loadDB();
$name = $_POST['name'];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) == 0) {
	$results = "fail";
}
else{
	$row = mysql_fetch_assoc($result);
	$results[] = $row['credits'];
	$results[] = $row['wins'];
	$results[] = $row['losses'];
	$results[] = $row['cupshit'];
	$results[] = $row['cupsdown'];
	$results[] = $row['rank'];
}
print(json_encode($results));
closeDB($conn);

?>