<?php
include("connectDataBase.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PINPIN BOWLING</title>
<link href="CSS/styleSheet.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<div id="container_webApp">
<a href="index.php"><div id="banner">
   <h2> PINPIN</h2><img src="images/ULMxyOBJ-thumb.gif" width="47" height="50"></div></a>


<div class="content">

<form action="" method="get" name="setMatch">

  <h3>View Stats</h3><br/>
  <table>
  <tr>
  	<td >
    
    <div id="statsContainer">
   
   <?php
   
   $sql_Team = "SELECT * FROM team";
   
   echo "<div class='statsCol'>
         <div class='containerTeamName'>Team Name</div>
		<div class='containerWiningsLosings'>Winnings</div>
		<div class='containerWiningsLosings'>Losings</div>
		</div>";
		
		foreach($dbh->query($sql_Team)as $row){
			echo "<div class='containerTeamName'>$row[teamName]</div>";
			echo "<div class='containerWiningsLosings'>$row[teamWinnings]</div>";
			echo "<div class='containerWiningsLosings'>$row[teamLosings]</div>";
			}
   
   ?>  
    
    
    
    
    </div>
    
    <td>
    
    <tr>
            <td><a href="index.php"><input name="Back" type="button" value="Back"></a></td>
            
            
            </tr>
 </table>
</form>
</div>
</div>
</body>
</html>




