<?php
include 'db.php';
$conn = loadDB();
$query = "SELECT * FROM profiles";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0){
	while($row = mysql_fetch_assoc($result)){
		$results[] = $row['name'];
	}
}
print(json_encode($results));
closeDB($conn);
?>