<?php
include 'db.php';
$conn = loadDB();
$query = "SELECT * FROM profiles";
$result = mysql_query($query);
$rankname = array();
$rankamount = array();
while($rows = mysql_fetch_assoc($result)){
	if($_POST['rorc'] != 0){
		if($rows['rank'] < 11){
			$rankname[$rows['rank']] = $rows['name'];
			$rankamount[$rows['rank']] = "".$rows['wins']."/".$rows['losses'];
		}
	}
	else {
		if($rows['credrank'] < 11){
			$rankname[$rows['credrank']] = $rows['name'];
			$rankamount[$rows['credrank']] = $rows['credits'];
		}
	}
		
}

$returnVars['nameone'] = $rankname[1];
$returnVars['nametwo'] = $rankname[2];
$returnVars['namethree'] = $rankname[3];
$returnVars['namefour'] = $rankname[4];
$returnVars['namefive'] = $rankname[5];
$returnVars['namesix'] = $rankname[6];
$returnVars['nameseven'] = $rankname[7];
$returnVars['nameeight'] = $rankname[8];
$returnVars['namenine'] = $rankname[9];
$returnVars['nameten'] = $rankname[10];

$returnVars['credone'] = $rankamount[1];
$returnVars['credtwo'] = $rankamount[2];
$returnVars['credthree'] = $rankamount[3];
$returnVars['credfour'] = $rankamount[4];
$returnVars['credfive'] = $rankamount[5];
$returnVars['credsix'] = $rankamount[6];
$returnVars['credseven'] = $rankamount[7];
$returnVars['credeight'] = $rankamount[8];
$returnVars['crednine'] = $rankamount[9];
$returnVars['credten'] = $rankamount[10];

$returnString = http_build_query($returnVars);
echo $returnString;
closeDB($conn);
?>