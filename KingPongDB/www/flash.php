<?php
include 'db.php';
$conn = loadDB();

returnVars = array();


$returnString = http_build_query($returnVars);

closeDB($conn);
?>