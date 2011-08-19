<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Success!
</title>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
</div>
<div id="maincontent" class="bordered">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
Congratulations! The profile "<?php echo $_POST["pname"]; ?>" is up for consideration. We have sent you an email to the address supplied. Click the link in the email to confirm your profile! 

<?php


 $to = $_POST["mail"];
 $subject = "KingPongDB Registration";
 $body = "If you just recently created a profile on KingPongDB.com, click the following link (or copy it into your browser) to confirm. If not, someone is using your email address for spam... you should probably get a new one. Just sayin'.\n\nLINK: http://www.kingpongdb.com:8000/success.php?name=".$_POST["pname"]."&code=".substr($_POST["pname"], 0, 1)."XqqqrL55kdPdo32kk3kl4WNMLLKsbx2.".substr($_POST["pname"], 1, 2)."xxe3\n\nDO NOT REPLY";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }








/*
require_once('phpgmailer/class.phpgmailer.php');
$mail = new PHPGMailer();
$mail->Username = 'kingpongtable@gmail.com';
$mail->Password = 'bitchwig';
$mail->From = 'kingpongtable@gmail.com';
$mail->FromName = 'KingPongDB.com';
$mail->Subject = 'King Pong Validation';
$mail->AddAddress($_POST["mail"]);
$mail->Body = "If you just recently created a profile on KingPongDB.com, click the following link (or copy it into your browser) to confirm. If not, someone is using your email address for spam... you should probably get a new one. Just sayin'.\n\nLINK: http://www.kingpongdb.com:8000/success.php?name=".$_POST["pname"]."&code=".substr($_POST["pname"], 0, 1)."XqqqrL55kdPdo32kk3kl4WNMLLKsbx2.".substr($_POST["pname"], 1, 2)."xxe3\n\nDO NOT REPLY";
if (!$mail->Send()) {
echo "Message was not sent.";
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message has been sent.";
}
*/
?>
</div> <!-- contents --!>
</div> <!-- maincontent --!>
</body>
</html>