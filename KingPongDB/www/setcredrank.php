<?php
require_once 'db.php';
$oconn = loadDB();
$oquery = "SELECT * FROM profiles";
$oresult = mysql_query($oquery);
while($orows = mysql_fetch_assoc($oresult)){
	$orow[] = $orows;
}
for($ok=(count($orow)-1); $ok >= 0; $ok--){
	$oarr[] = $orow[$ok]['credits'];
	$oid[] = $orow[$ok]['id'];
}
for($oi=1; $oi<count($oarr); $oi++){
	$otmp = $oarr[$oi];
	$otmpi = $oid[$oi];
	$oj = $oi;
	while(($oj >= 0) && ($oarr[$oj-1] > $otmp)) {
		$oarr[$oj] = $oarr[$oj-1];
		$oid[$oj] = $oid[$oj-1];
		$oj--;
	}
	$oarr[$oj] = $otmp;
	$oid[$oj] = $otmpi;
}
$oj = 1;
for($oi=count($oarr)-1; $oi >= 0; $oi--){
	$oquery = "UPDATE profiles SET credrank=\"".$oj."\" WHERE id=\"".$oid[$oi]."\"";
	mysql_query($oquery);
	$oj++;
}
closeDB($oconn);
?>