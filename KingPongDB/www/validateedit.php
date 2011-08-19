<?php
include 'db.php';
$conn = loadDB();
$ch = curl_init();
$name = $_POST["name"];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) == 0) {
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=name&pass=".$oldpass);
}
else {
	$row = mysql_fetch_assoc($result);
	if(strcmp($row['pword'],$_POST["oldpass"]) == 0){
		if (strcmp($_POST["pwone"],$_POST["pwtwo"])!=0){
			curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pwordinc&pname=".$name."&pass=".$_POST["oldpass"]);
		}
		else if (strlen($_POST["pwone"]) == 0){
			curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pwordz&pname=".$name."&pass=".$_POST["oldpass"]);
		}
		else if(!strpos($_POST["mail"], ";")===false){//(($mail == "")||(!(strpos(";", $mail)===false))){
			curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "error=mail&pname=".$name);
		}
		else if (strlen($cellone) > 0){
			if ((((strlen($cellone) == 3) && (strlen($celltwo) == 3)) && (strlen($cellthree) == 4))){
				curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/success.php");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name);
				$query = "UPDATE profiles SET mail = \"".$_POST["mail"]."\", pword = \"".$_POST["pwone"]."\", phone = \"".$_POST["cellone"].$_POST["celltwo"].$_POST["cellthree"]."\" WHERE name = \"".$name."\"";
				mysql_query($query);
			}
			else{
				curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "error=phone&pname=".$name."&pass=".$_POST["oldpass"]);
			}
		}
		else{
			curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/success.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name);
			$query = "UPDATE profiles SET mail = \"".$_POST["mail"]."\", pword = \"".$_POST["pwone"]."\", phone = \"".$_POST["cellone"].$_POST["celltwo"].$_POST["cellthree"]."\" WHERE name = \"".$name."\"";
			mysql_query($query);
		}
	}
	else {
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/editprof.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "error=phone&pname=".$name."&pass=".$oldpass);
	}
}
curl_exec ($ch);
curl_close ($ch); 
closeDB($conn);
?>