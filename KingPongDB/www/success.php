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
Congratulations! The profile "<?php echo $_POST["pname"]; ?>" was successfully created! 
<br /><br />Return <a href = "index.php">home</a>, or view your newly created 
<?php
echo "<a href = \"profile.php?name=".$_POST["pname"]."\">profile</a>";
include 'setrank.php';
include 'setcredrank.php';
?>
.
</div> <!-- contents --!>
</div> <!-- maincontent --!>
</body>
</html>