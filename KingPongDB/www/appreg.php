<?php
include 'db.php';
$conn = loadDB();
$temp = $_POST["name"];
$name = preg_replace("/[^a-zA-Z0-9]/", "", $temp);
$tempo = $_POST["password"];
$password = preg_replace("/[^a-zA-Z0-9]/", "", $tempo);
$phone = $_POST["phone"];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0) {
$result="fail";
}
else if(($name == "")||($name != $temp)){
$result="fail";
}
else{
	$query = "INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners) VALUES (\"".$name."\", \"".$password."\", 1000, 0, 0, 0, 0, \"".$phone."\", \"\")";
	mysql_query($query);
	$result="success";
}
print(json_encode($result));
closeDB($conn);

?>