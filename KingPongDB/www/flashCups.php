<?php
include 'db.php';
$conn = loadDB();
$query = "update cups set ".$_POST['cup']."=".$_POST['stat'];
mysql_query($query);
closeDB($conn);
?>