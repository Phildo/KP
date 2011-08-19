<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Leaderboards
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
<h1>Leaderboards:</h1>

<?php
$conn = loadDB();
echo "<div class=\"ranktable\">";
echo "<b>Win/Loss:</b>";
echo "<table>"; 
$query = "SELECT * FROM profiles WHERE rank=\"1\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>1. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"2\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>2. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"3\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>3. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"4\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>4. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"5\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>5. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"6\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>6. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"7\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>7. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"8\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>8. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"9\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>9. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"10\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>10. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
echo "</table>";
echo "</div>";

echo "<div class=\"ranktable\">";
echo "<table width = 50><tr><td></td></tr></table>";
echo "</div>";

echo "<div class=\"ranktable\">";
echo "<b>Credits:</b>";
echo "<table>"; 
$query = "SELECT * FROM profiles WHERE credrank=\"1\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>1. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"2\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>2. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"3\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>3. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"4\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>4. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"5\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>5. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"6\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>6. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"7\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>7. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"8\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>8. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"9\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>9. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"10\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>10. </td> <td><a href=\"profile.php?name=".$row['name']."\">".$row['name']."</a></td> <td>".$row['credits']."</td> </tr>";
echo "</table>";
echo "</div>";
closeDB($conn);
?>
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>