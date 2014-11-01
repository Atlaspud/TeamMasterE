<?php
include("connectDataBase.php");
include("sqlDataBaseQuerise.php");
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

<div id="container_webApp"> <a href="index.php">
  <div id="banner">
    <h2> PINPIN</h2>
    <img src="images/ULMxyOBJ-thumb.gif" width="47" height="50"></div>
  </a>
  <div class="content">
    <form action="processSetup.php" method="post" name="setMatch">
      <h3>Setup Match</h3>
      <br/>
      <table>
        <tr>
          <td><label> Team A </label></td>
          <td><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
              <?php		  
			  
			  #if $_REQUEST['teamName'] not defined $_teamName = Select Team, else $_teamName =$_REQUEST['teamName']
			  if (!empty($_REQUEST['teamName_a'])){
				  	$_teamName_a = $_REQUEST['teamName_a'];
					$_teamID_a = $_REQUEST['teamID_a'];
				  } else {
					  $_teamName_a = "Select Team";
					  $_teamID_a = 0;
					  }
					  
				if (!empty($_REQUEST['teamName_b'])){
				  	$_teamName_b = $_REQUEST['teamName_b'];
					$_teamID_b = $_REQUEST['teamID_b'];
				  } else {
					  $_teamName_b = "Select Team";
					  $_teamID_b = 0;
					  }	
				#display $_teamName as selected	  		  
			  echo "<option>$_teamName_a</option>";
			  	
				#present other options in jumpMenu
			$sql_team = "SELECT * FROM team";  
			  foreach ($dbh->query($sql_team) as $row){
				  echo"<option value='setupMatch.php?teamName_a=$row[teamName]&teamID_a=$row[teamID]&teamName_b=$_teamName_b&teamID_b=$_teamID_b'>$row[teamName]</option>";
				  }	
				  				  	  
			  ?>
            </select></td>
        </tr>
        <tr>
          <td><label>Team B</label></td>
          <td><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
              <?php	
			  		  
			  #display $_teamName as selected
			  echo "<option>$_teamName_b</option>";
			  
			  #present other options in jumpMenu
			  foreach ($dbh->query($sql_team) as $row){
				  echo"<option value='setupMatch.php?teamName_a=$_teamName_a&teamName_b=$row[teamName]&teamID_a=$_teamID_a&teamID_b=$row[teamID]'>$row[teamName]</option>";
				  }	
				 	  
			  ?>
            </select></td>
        </tr>
        <tr>
          <td> 
          <input type="submit"  value="New Team"></input></td>
          <td><input id="newTeam" name="newTeam" type="text"/></td>
        </tr>
        <tr>
          <td><br/><div id="status"></div></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><br/>

          </td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><a href="index.php">
            <input name="Back" type="button" value="Back">
            </a></td>
          <td><br/></td>
          <td><?php
          echo"<a href='match.php?teamName_a=$_teamName_a&teamName_b=$_teamName_b&teamID_a=$_teamID_a&teamID_b=$_teamID_b&from=setup'>"
		  ?>
            <input name="Continue" type="button" value="Continue"></td>
        </tr>
      </table>
    </form>
  </div>
</div>

</body>
</html>