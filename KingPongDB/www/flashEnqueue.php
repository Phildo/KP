<?php
include 'db.php';
$conn = loadDB();
$flag = true;
$one = false;
$i = 0;
$query = "SELECT * FROM list";
$result = mysql_query($query);
while((($rows = mysql_fetch_assoc($result)) && $flag) && $i<12){
	if($i > 1){
		if($rows['oneid'] == 0){
			$one = true;
			$flag = false;
		}
		else if($rows['twoid'] == 0){
			$one = false;
			$flag = false;
		}
	}
	$i++;
}
if(!$flag){
	$query = "SELECT * FROM profiles WHERE name=\"".$_POST['nameo']."\"";
	$result = mysql_query($query);
	if($rows = mysql_fetch_assoc($result)){
		if($one){
			$query = "UPDATE list SET oneid=".$rows['id']." WHERE k=".$i;
		}
		else {
			$query = "UPDATE list SET twoid=".$rows['id']." WHERE k=".$i;
		}
	}
	else {
		if($one){
			$query = "UPDATE list SET oneid=-1 WHERE k=".$i;
		}
		else {
			$query = "UPDATE list SET twoid=-1 WHERE k=".$i;
		}
	}
	mysql_query($query);
	$returnVars['ok'] = "yes";
}
else {
	$returnVars['ok'] = "no";
}


$returnString = http_build_query($returnVars);
echo $returnString;
closeDB($conn);
?>