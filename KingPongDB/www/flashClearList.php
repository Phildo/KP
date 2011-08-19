<?php
include 'db.php';
$conn = loadDB();
mysql_query("update list set oneid=0, twoid=0");
mysql_query("update cups set one=1, two=1, three=1, four=1, five=1, six=1, seven=1, eight=1, nine=1, ten=1, oone=1, otwo=1, othree=1, ofour=1, ofive=1, osix=1, oseven=1, oeight=1, onine=1, oten=1");
echo ("hello=tits");
closeDB($conn);
?>