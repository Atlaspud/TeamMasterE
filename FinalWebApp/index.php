<?php
include("connectDataBase.php");


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PINPIN BOWLING</title>
<link href="CSS/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="container_webApp">
<div id="banner" class="bannerMain">
<h1>PINPIN BOWLING</h1>
</div>
<div id="imgMain">
<img src="images/DwIIahQ8-thumb.gif" width="150" height="134" alt=""/></div>
<div class="style_center contentMain">
<a href="setupMatch.php"><input class="button" type="button" value="NEW MATCH" ></input></a><a href="loadMatch.php">
<input class="button" type="button" value="LOAD MATCH" ></a></input><br />
<a href="viewStats.php"><input class="button" type="button" value="VIEW STATS" ></input></a>
</div>
</div>
</body>
</html>
