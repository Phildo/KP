<?php
include 'db.php';
$conn = loadDB();
$name = $_POST["name"];
$pass = $_POST["pword"];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0) {
	$row = mysql_fetch_assoc($result);
	if(strcmp($row['pword'], $pass) != 0){
		print(json_encode("fail"));
	}
}
else {
print(json_encode("fail"));
}
closeDB($conn);

?>