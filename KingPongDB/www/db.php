<?php
//LOAD DB
function loadDB(){
	$dbhost = "localhost";
	$dbuser = "client";
	$dbpass = "Bitchwig4000";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
	$dbname = "KP";
	mysql_select_db($dbname);
	return $conn;
}

//COSE DB
function closeDB($conn){
	if(!$conn) {
		die("Not connected to database");
	}
	mysql_close($conn);
}
?>