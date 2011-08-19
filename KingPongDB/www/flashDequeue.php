<?php
include 'db.php';
$conn = loadDB();
$query = "SELECT * FROM list";
$result = mysql_query($query);
while($rows = mysql_fetch_assoc($result)){
	$row[] = $rows;
}
$nameo = $row[2]['oneid'];
$namet = $row[2]['twoid'];

for($i = 3; $i < 13; $i++){
	$query = "UPDATE list set oneid=".$row[$i]['oneid'].", twoid=".$row[$i]['twoid']." WHERE k=".$i."";
	mysql_query($query);
}

if($_POST['num'] == "1"){
	$query = "UPDATE list SET oneid=".$nameo.", twoid=".$namet." WHERE k=1";
}
else {
	$query = "UPDATE list SET oneid=".$nameo.", twoid=".$namet." WHERE k=2";
}
mysql_query($query);


$returnVars = array();

$query = "SELECT * FROM profiles WHERE id=".$nameo." OR id=".$namet;
$result = mysql_query($query);
$rows = mysql_fetch_assoc($result);
$nameo = $rows['name'];
$rows = mysql_fetch_assoc($result);
$namet = $rows['name'];


$returnVars['name1'] = $nameo;
$returnVars['name2'] = $namet;
$returnString = http_build_query($returnVars);
echo $returnString;
closeDB($conn);
?>