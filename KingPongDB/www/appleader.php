<html>
<body>
<?php
include 'db.php';
$conn = loadDB();
echo "<div style=\"float:left;\">";
echo "<table>"; 
$query = "SELECT * FROM profiles WHERE rank=\"1\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>";
echo "<b>Win/Loss:</b>";
echo "</tr></td>";
echo "<tr><td>1. </td> <td>".$row['name']."</td> <td width=\"50\">".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"2\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>2. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"3\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>3. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"4\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>4. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"5\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>5. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"6\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>6. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"7\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>7. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"8\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>8. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"9\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>9. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE rank=\"10\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>10. </td> <td>".$row['name']."</td> <td>".$row['wins']."/".$row['losses']."</td> </tr>";
echo "</table> <br /><br />";

 
echo "</div><div style\"float:right;\">";


echo "<table>"; 
$query = "SELECT * FROM profiles WHERE credrank=\"1\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>";
echo "<b>Credits:</b>";
echo "</tr></td>";
echo "<tr><td>1. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"2\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>2. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"3\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>3. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"4\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>4. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"5\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>5. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"6\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>6. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"7\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>7. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"8\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>8. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"9\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>9. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
$query = "SELECT * FROM profiles WHERE credrank=\"10\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>10. </td> <td>".$row['name']."</td> <td>".$row['credits']."</td> </tr>";
echo "</table>";
closeDB($conn);
echo "</div>";
?>
</body>
</html>
