<?php
include 'db.php';
$conn = loadDB();
$name = $_POST['nameo'];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if($returnVars = mysql_fetch_assoc($result)){
	$returnVars['nameo'] = $returnVars['name'];
	$returnVars['guest'] = false;
}
else{
	$returnVars['nameo'] = $name;
	$returnVars['guest'] = true;
}
$returnVars['pass'] = $returnVars['pword'];
$returnString = http_build_query($returnVars);
echo $returnString;
closeDB($conn);
?>