<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - Example
</title>
<?php include 'db.php'; ?>
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
<h1>Preview:</h1>
<!----!><object width="440" height="320">
<param name="movie" value="KingPong.swf">
<embed src="KingPong.swf" width="440" height="320">
</embed>
</object><!----!>
<br />
*DO NOT USE MOUSE (you might have to click on the swf initially to set the browsers focus to it... so other than that...) The table will not have a mouse attached, and the use of a mouse can mess up the UI. Also, this preview is NOT linked with the actual database, so feel free to create as many profiles/ do anything you want. Also, the cups won't drain (as there are no real cups hooked up to it...) so... what I'm trying to say is... you can't really do much at all with this preview. But it looks pretty, right?
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>