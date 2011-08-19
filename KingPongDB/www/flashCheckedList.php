<?php
include 'db.php';
$conn = loadDB();

$returnVars['yes'] = true;
if($_POST['num'] == "2"){
	$query = "SELECT * FROM list WHERE k=3";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	if($row['oneid'] == 0 || $row['twoid'] == 0){
		$returnVars['yes'] = false;
	}	
}
else {
	$query = "SELECT * FROM list WHERE k=4";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	if($row['oneid'] == 0 || $row['twoid'] == 0){
		$returnVars['yes'] = false;
	}	
}
$returnString = http_build_query($returnVars);
echo $returnString;
closeDB($conn);
?>