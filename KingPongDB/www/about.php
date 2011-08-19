<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
King Pong DataBase - About
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
<h1>About:</h1>
<p>King Pong is an interactive beer pong table that combines databasing software and the web experience with the real world of material objects and drinking beer. 
<br /> <br />
<b>Our goal:</b> <br />
To accurately keep track of users' game statistics, without requiring any unneccesary effort from the user. 
<br /> <br />
<b>Features:</b> <br />
The table uses sensors to detect the presence or absence of cups, and updates, in real time, this data to both the website (under the <a href = "table.php">Table</a> link) and to an embedded monitor in the middle of the table.
<br /><br />
King Pong allows you to <a href = "makeprof.php">Create a Profile</a> (to automatically keep track of stats) either from the website, or on site via a keyboard and simple GUI. Stats recorded include, wins, losses, cups hit, cups surrendered, rank, credits, and past partners.
<br /><br />
The "list", or the sign-up queue at parties/bars, often gets discarded or simply ignored. This is solved via an electronic, un-editable list at the site of the table. We do not allow for remote signing up for the list via the site to prevent trolls from signing up while not attending the party. We do however, allow you to view <a href="thelist.php">The List</a> from the website for use on a smartphone. Now, you can check, from anywhere in a party/bar, how long until it is your turn at the table.
<br />*If you use our <a href="editpermission.php">Edit Profile</a> link from the website, you can add a cell number that will also automatically text you when it is your turn at the table.
<br /><br />
At the time of profile creation, each user will be awarded 1000 "credits". These credits can be used in bets at the beginning of each game. If you have 0 credits, you can not play for the rest of the night. The first time you play a game each night, however, you are awarded 250 credits. Credits are kept track of and ranked on the <a href="leaderboards.php">Leaderboards</a> page.
<br /><br />
A simple algorithm produces a rank using wins, losses, cups hit, and cups surrendered to determine a "rank score", which is invisible to the user. The algorithm then sorts rank scored in ascending orders, giving them a rank. The algorithm gives preference to those who signed up first in case of a tie. (So SIGN UP NOW!!)
<br /> <br />
<b>Business Plan:</b> <br />
Best case scenario, we could create, sell, and maintain tables for bars wherever they are requested. We are of course keeping this table with us for personal use for at least the duration of our stay at UW Madison. However, a start to our business strategy MAY include giving this table to a bar post graduation- for FREE. If you own a bar (in Madison, ideally), or know someone who does, and would like to give this table a home, contact Phildo.
<br /> <br />
<b>Current Issues:</b> <br />
FUNDING.
Ideally, we would like a glass top for our table using sensors invisible to the user (capacitive, IR, etc...). This way, the table in NO WAY inhibits normal play of the game. It only adds to it. Sadly, the only thing stoping us from this is dolla dollas. We currently are stuck using a particle board top (with water sealant paint), and crude physical switches that require direct contanct with the cup. The SADDER (is that a word?) thing, is that WE HAVE THE TECHNOLOGY to implement our ideal solution! The code is written, the work is done! Truly, we get the money, we buy the products, and we have the glory that this table can potentially offer. 
<br>
So- if you feel moved to donate, contact Phildo, and we will gladly accept whatever anyone can offer. :)
</div> <!-- contents --!>
</div> <!-- maincontent --!>


</body>
</html>