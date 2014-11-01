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
<a href="index.php"><div id="banner">
   <h2> PINPIN</h2><img src="images/ULMxyOBJ-thumb.gif" width="47" height="50"></div></a>


<div class="content">

<form action="" method="get" name="setMatch">

  <h3>Select Saved Game</h3><br/>
  <table>
  <tr>
  	<td colspan="3">
    
    <div id="statsContainer">
    
    <?php 
	$sql_Match = "SELECT * FROM match";
	$sql_Team = "SELECT * FROM team";
	
	foreach ($dbh->query($sql_Match) as $row){
				
		$sql_TeamID_a = "SELECT teamName FROM team WHERE teamID =" .$row['matchTeamID_a'];
		$result_TeamID_a = $dbh->query($sql_TeamID_a);
		$row_TeamID_a = $result_TeamID_a->fetch(PDO::FETCH_ASSOC);
		
		$sql_TeamID_b = "SELECT teamName FROM team WHERE teamID =" .$row['matchTeamID_b'];
		$result_TeamID_b = $dbh->query($sql_TeamID_b);
		$row_TeamID_b = $result_TeamID_b->fetch(PDO::FETCH_ASSOC);
		
		
		echo "<a href='match.php?matchID=$row[matchID]&from=load'><div class='statsCol'>$row_TeamID_a[teamName] vs $row_TeamID_b[teamName] $row[matchDate]</div></a>";
		}
		
		
	?>
    
    </div>
    
    <td>
    
    <tr>
            <td><a href="index.php"><input name="Back" type="button" value="Back"></a></td>
            <td><a href="index.php"><input name="Continue" type="button" value="Continue"></a><td>
            
            
            </tr>
 </table>
</form>
</div>
</div>
</body>
</html>




