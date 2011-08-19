<?php
include 'db.php';
$conn = loadDB();
$name = $_POST['nameo'];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if($returnVars = mysql_fetch_assoc($result)){
	$query = "UPDATE profiles SET wins=".$_POST['wins'].", losses=".$_POST['losses'].", credits=".$_POST['credits'].", cupshit=".$_POST['cupshit'].", cupsdown=".$_POST['cupsdown'].", WHERE name=".$_POST['nameo'];
}
else {
	$query = "INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown) VALUES (\"".$_POST['nameo']."\", \"".$_POST['pass']."\", 1000, 0, 0, 0, 0)";
}
mysql_query($query);
include 'setrank.php';
include 'setcredrank.php';
closeDB($conn);
?>