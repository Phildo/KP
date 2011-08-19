<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - The List
</title>
<?php include 'db.php'; ?>
</head>
<body>

<div id="header" class="bordered">
<?php include ('head.php'); ?>  
</div>
<div id="maincontent" class="bordered" style="height:400px;">
<div id="searchbar">
<?php include 'searchbar.php'; ?>
</div> <!-- searchbox --!>
<div id="contents"> 
<h1>The List:</h1>
<?php
$conn = loadDB();
echo "<div class=\"ranktable\">";

$queryl = "SELECT * FROM list";
$resultl = mysql_query($queryl);

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<b>Now Playing: </b><br /> <a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo " and <a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a> <b>vs. </b>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo " and <a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a>";


echo "<br /> <br />";

echo "<table>"; 
$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>1. </td> <td width = \"100\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td width = \"100\" align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>2. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>3. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>4. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>5. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>6. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>7. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>8. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>9. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>10. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\"><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> </tr>";


echo "</table>"; 
echo "</div>"; 

closeDB($conn);
?>
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>