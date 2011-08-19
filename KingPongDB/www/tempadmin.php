<?php
require_once 'db.php';
$conn = loadDB();
//*
//Transfer to temp
$result = mysql_query("SELECT * FROM profiles");
mysql_query("CREATE TABLE temp (id int not null auto_increment primary key, name varchar(30), pword varchar(30), credits int default 1000, wins int default 0, losses int default 0, cupshit int default 0, cupsdown int default 0, phone varchar(30), partners varchar(100), rank int default 0, credrank int default 0, mail varchar(30))");
while($row = mysql_fetch_array($result)){
	mysql_query("INSERT INTO temp (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners, rank, credrank, mail) VALUES (\"".$row['name']."\", \"".$row['pword']."\", \"".$row['credits']."\", \"".$row['wins']."\", \"".$row['losses']."\", \"".$row['cupshit']."\", \"".$row['cupsdown']."\", \"".$row['phone']."\", \"".$row['partners']."\", \"".$row['rank']."\", \"".$row['credrank']."\", \"".$row['mail']."\")");
}
//*/
//*
//Delete profiles
mysql_query("drop table profiles");

//Transfer to profiles
$result = mysql_query("SELECT * FROM profiles");
$result = mysql_query("SELECT * FROM temp");
mysql_query("CREATE TABLE profiles (id int not null auto_increment primary key, name varchar(20), pword varchar(20), credits int default 1000, wins int default 0, losses int default 0, cupshit int default 0, cupsdown int default 0, phone varchar(10), partners varchar(100), rank int default 0, credrank int default 0, mail varchar(30))");
while($row = mysql_fetch_array($result)){
	mysql_query("INSERT INTO profiles (name, pword, credits, wins, losses, cupshit, cupsdown, phone, partners, rank, credrank, mail) VALUES (\"".$row['name']."\", \"".$row['pword']."\", \"".$row['credits']."\", \"".$row['wins']."\", \"".$row['losses']."\", \"".$row['cupshit']."\", \"".$row['cupsdown']."\", \"".$row['phone']."\", \"".$row['partners']."\", \"".$row['rank']."\", \"".$row['credrank']."\", \"".$row['mail']."\")");
}

//Delete temp
mysql_query("drop table temp");
//*/

closeDB($conn);
?>
