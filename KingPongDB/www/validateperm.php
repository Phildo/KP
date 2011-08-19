<?php
include 'db.php';
$conn = loadDB();
$ch = curl_init();
$name = $_POST["pname"];
$pass = $_POST["pass"];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) == 0) {
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editpermission.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=name");
}
else {
	$row = mysql_fetch_assoc($result);
	if(strcmp($row['pword'], $pass) == 0){
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name."&pass=".$pass);
	}
	else {
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editpermission.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pass&pname=".$name);
	}
}
curl_exec ($ch);
curl_close ($ch); 
closeDB($conn);

?>