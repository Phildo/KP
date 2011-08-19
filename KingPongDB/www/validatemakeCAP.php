<?php

  include ('recaptchalib.php');
  $privatekey = "6Lffm8ESAAAAAI1MWpSHzktY7S5BGqfS_NI0pmS3";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {

include 'db.php';
$conn = loadDB();
$ch = curl_init();
$temp = $_POST["namep"];
$name = preg_replace("/[^a-zA-Z0-9]/", "", $temp);
$tempo = $_POST["cellone"];
$cellone = preg_replace("/[^0-9]/", "", $tempo);
$tempo = $_POST["celltwo"];
$celltwo = preg_replace("/[^0-9]/", "", $tempo);
$tempo = $_POST["cellthree"];
$cellthree = preg_replace("/[^0-9]/", "", $tempo);
$query = "SELECT * FROM profiles WHERE name=\"".$name."\"";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0) {
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=name");
}
else if(($name == "")||($name != $temp)){
	echo $name."<br />".$temp;
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=fuckyou");
}
else if ($_POST["pwone"] != $_POST["pwtwo"]){
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pwordinc&pname=".$name);
}
else if (strlen($_POST["pwone"]) == 0){
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/makeprof.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "error=pwordz&pname=".$name);
}
else if (strlen($cellone) > 0){
	if ((((strlen($cellone) == 3) && (strlen($celltwo) == 3)) && (strlen($cellthree) == 4))){
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/success.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name);
		$query = "INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners) VALUES (\"".$name."\", \"".$_POST["pwone"]."\", 1000, 0, 0, 0, 0, \"".$cellone.$celltwo.$cellthree."\", \"\")";
		mysql_query($query);
	}
	else{
		curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/makeprof.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "error=phone&pname=".$name);
	}
}
else{
	curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com/success.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$name);
	$query = "INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners) VALUES (\"".$name."\", \"".$_POST["pwone"]."\", 1000, 0, 0, 0, 0, \"".$cellone.$celltwo.$cellthree."\", \"\")";
	mysql_query($query);
}
curl_exec ($ch);
curl_close ($ch); 
closeDB($conn);


 }


?>