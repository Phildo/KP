<?php
//Capture data from $_POST array
$Person = $_POST['Person'];
$PWord = $_POST['PWord'];
$Wins = $_POST['Wins'];
$Losses = $_POST['Losses'];
$Credits = $_POST['Credits'];
//Make one big string in a format Flash understand
$toSave ="Person=$Person&PWord=$PWord&Wins=$Wins&Losses=$Losses&Credits=$Credits";
//Open a file in write mode
$fp = fopen("profs.txt", "a");
//if(fwrite($fp, $toSave)) echo "writing=Ok&";
//else 
echo ("err");
fclose($fp);
?>

