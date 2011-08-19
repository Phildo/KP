<?php
include 'db.php';
$conn = loadDB();
$ch = curl_init();
$temp = $_POST["pname"];
$name = preg_replace("/[^a-zA-Z0-9]/", "", $temp);
$tempo = $_POST["pwone"];
$pwone = preg_replace("/[^a-zA-Z0-9]/", "", $tempo);
$tempo = $_POST["cellone"];
$cellone = preg_replace("/[^0-9]/", "", $tempo);
$tempo = $_POST["celltwo"];
$celltwo = preg_replace("/[^0-9]/", "", $tempo);
$tempo = $_POST["cellthree"];
$cellthree = preg_replace("/[^0-9]/", "", $tempo);
$mail = $_POST["mail"];
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0) {
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=name");
}
else if(($name == "")||($name != $temp)){
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=fuckyou");
}
else if(!strpos($mail, ";")===false){//(($mail == "")||(!(strpos(";", $mail)===false))){
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=mail&pname=".$name);
}
else if (strcmp($pwone,$_POST["pwtwo"]) != 0){
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pwordinc&pname=".$name);
}
else if (strlen($pwone) == 0){
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pwordz&pname=".$name);
}
else if (strlen($cellone) > 0){
	if ((((strlen($cellone) == 3) && (strlen($celltwo) == 3)) && (strlen($cellthree) == 4))){
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/success.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name."&mail=".$mail);
		$query = "INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners, mail) VALUES (\"".$name."\", \"".$pwone."\", 1000, 0, 0, 0, 0, \"".$cellone.$celltwo.$cellthree."\", \"\", \"".$mail."\")";
		mysql_query($query);		
	}
	else{
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/makeprof.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "error=phone&pname=".$name);
	}
}
else{
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/success.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name."&mail=".$mail);
	$query = "INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners, mail) VALUES (\"".$name."\", \"".$pwone."\", 1000, 0, 0, 0, 0, \"".$cellone.$celltwo.$cellthree."\", \"\", \"".$mail."\")";
	mysql_query($query);
}
curl_exec ($ch);
curl_close ($ch);
closeDB($conn);
?>