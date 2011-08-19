<?php
include 'db.php';
$conn = loadDB();
echo "<div class=\"ranktable\">";

$queryl = "SELECT * FROM list";
$resultl = mysql_query($queryl);

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<b>Now Playing: </b><br />".$row['name']; 
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo " and ".$row['name']." <b>vs. </b>"; 

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "".$row['name'];
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo " and ".$row['name'];


echo "<br /> <br />";

echo "<table>"; 
$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>1. </td> <td width = \"100\">".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td width = \"100\" align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>2. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>3. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>4. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>5. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>6. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>7. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>8. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>9. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";

$rowl = mysql_fetch_assoc($resultl);
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['oneid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<tr><td>10. </td> <td>".$row['name']."</td>";
$query = "SELECT * FROM profiles WHERE id=\"".$rowl['twoid']."\"";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
echo "<td> and </td> <td align=\"right\">".$row['name']."</td> </tr>";


echo "</table>"; 
echo "</div>"; 

closeDB($conn);
?>