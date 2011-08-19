<?php
include 'db.php';
$conn = loadDB();
$query = "SELECT * FROM profiles where name=\"".$_POST['nameo']."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0){
	$rows = mysql_fetch_assoc($result);
	$query = "UPDATE profiles SET wins=".$_POST['wins'].", losses=".$_POST['losses'].", cupshit=".$_POST['cupshit'].", cupsdown=".$_POST['cupsdown'].", credits=".$_POST['credits']." where name=\"".$_POST['nameo']."\"";
	$flag = false;	
}
else{
	$query = "INSERT INTO profiles (name, pword) VALUES (\"".$_POST['nameo']."\", \"".$_POST['pass']."\")";
}
mysql_query($query);
echo "hello=win";
include 'setrank.php';
include 'setcredrank.php';
closeDB($conn);
?>