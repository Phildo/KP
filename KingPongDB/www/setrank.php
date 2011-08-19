<?php
require_once 'db.php';
$conn = loadDB();
$query = "SELECT * FROM profiles";
$result = mysql_query($query);
while($rows = mysql_fetch_assoc($result)){
	$row[] = $rows;
}
for($k=(count($row)-1); $k >= 0; $k--){
	if($row[$k]['losses'] == 0){
		if($row[$k]['wins'] == 0){
			$arr[] = -1;
		}
		else {
			$arr[] = (($row[$k]['wins']*($row[$k]['wins']+2))+2);
		}
	}
	else{
		$arr[] = (($row[$k]['wins']/$row[$k]['losses'])*$row[$k]['wins']);
	}
	$id[] = $row[$k]['id'];
}
for($i=1; $i<count($arr); $i++){
	$tmp = $arr[$i];
	$tmpi = $id[$i];
	$j = $i;
	while(($j >= 0) && ($arr[$j-1] > $tmp)) {
		$arr[$j] = $arr[$j-1];
		$id[$j] = $id[$j-1];
		$j--;
	}
	$arr[$j] = $tmp;
	$id[$j] = $tmpi;
}
$j = 1;
for($i=count($arr)-1; $i >= 0; $i--){
	$query = "UPDATE profiles SET rank=\"".$j."\" WHERE id=\"".$id[$i]."\"";
	mysql_query($query);
	$j++;
}
closeDB($conn);
?>