<?php
include("connectDataBase.php");
include("sqlDataBaseQuerise.php");
 
 //if set from setupPage, setup game
 if($_REQUEST['from'] == "setup"){
		$_teamName_a = $_REQUEST['teamName_a'];
		$_teamName_b = $_REQUEST['teamName_b'];
		$_teamID_a = $_REQUEST['teamID_a'];
		$_teamID_b = $_REQUEST['teamID_b'];

		$_SELECTmaxSbID = $Sql->SELECTmaxSbID;
		$_SELECTmaxMatchID = $Sql->SELECTmaxMatchID;
		$_INSERTnewSbID = $Sql->INSERTnewSbID;



		//Get MaxMatchID and MaxSbID
		$result = $dbh->query($_SELECTmaxSbID);
		$resultCopy = $result;
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$_MAXSbID = $row;
		$_MaxSbIDint = current($_MAXSbID);
		
		$result = $dbh->query($_SELECTmaxMatchID);
		$resultCopy = $result;
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$_MAXMatchID = $row;
		$_MaxMatchIDint = current($_MAXMatchID);
		
		
				
		
		//create new scorebourdIDs
		$_sbID_a = $_MaxSbIDint + 1;
		$_sbID_b = $_MaxSbIDint + 2;
		$_matchID = $_MaxMatchIDint + 1;
		
		//create new scorebourds
		$_INSERTnewSbID_a = $_INSERTnewSbID .  $_sbID_a . ")" ; 
		$_INSERTnewSbID_b = $_INSERTnewSbID .  $_sbID_b . ")" ;
		$INSERTnewMatch = "INSERT INTO match (matchID, matchTeamID_a, matchTeamID_b, matchSbID_a, matchSbID_b) VALUES ('". $_matchID ."','". $_teamID_a ."','". $_teamID_b ."', '". $_sbID_a ."', '" .  $_sbID_b . "')"; 
		
		//create now match
		try{
			//$dbh->query($INSERTnewMatch);
			//$dbh->query($_INSERTnewSbID_a);
			//$dbh->query($_INSERTnewSbID_b);
		} catch(Exception $e) {
		  echo 'Message: ' .$e->getMessage();
		}
		
			 
	 //else if set from laodMatchPage, laod game 		 
	} else if ($_REQUEST['from'] == "load"){
		//get matchID row
		$_SELECTmatch = $Sql->SELECTmatch . $_REQUEST['matchID'];
		$result = $dbh->query($_SELECTmatch);
		$resultCopy = $result;
		$match = $result->fetch(PDO::FETCH_ASSOC);
		
		//get team rows
		$_teamID_a = $match['matchTeamID_a'];
		$_teamID_b = $match['matchTeamID_b'];
		
		$_SELECTmatchName_a = $Sql->SELECTteamName . $match['matchTeamID_a'];
		$_SELECTmatchName_b = $Sql->SELECTteamName . $match['matchTeamID_b'];
		
		$result = $dbh->query($_SELECTmatchName_a);
		$resultCopy = $result;
		$matchName = $result->fetch(PDO::FETCH_ASSOC);
		
		$_teamName_a = $matchName['teamName'];
		
		$result = $dbh->query($_SELECTmatchName_b);
		$resultCopy = $result;
		$matchName = $result->fetch(PDO::FETCH_ASSOC);
		
		$_teamName_b = $matchName['teamName'];
		
		
		
		 }


$string = "1,2,3,4,5,6,7,8,9";
$array = explode(",", $string, 9);

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
  <div id="banner">
    <h2> PINPIN </h2>
    <img src="images/ULMxyOBJ-thumb.gif" width="47" height="50"></div>
  <div class="content">
    <form action="" method="get" name="setMatch">
      <h3>Match</h3>
      <br/>
      <table>
        <tr>
          <td><label> Team A: <?php echo"$_teamName_a "; ?></label></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TAP1" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TAP2" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TAP3" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TAP4" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><label> Team B: <?php echo"$_teamName_b  ";?> </label></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TBP1" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TBP2" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TBP3" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><canvas id="canvas_TBP4" width="501px" height="52px" ></canvas></td>
        </tr>
        <tr>
          <td><br/></td>
        </tr>
        <tr>
          <td><label>Score:
              <input name="Score" type="text" value="Score" size="10" maxlength="5">
            </label>
            <label>
              <input type="radio" name="RadioGroup1" value="spare" id="RadioGroup1_0">
              Spare</label>
            <label>
              <input type="radio" name="RadioGroup1" value="strick" id="RadioGroup1_1">
              Strick</label></td>
        </tr>
        <tr>
          <td><a href="setupMatch.php?teamName_a=Select Team&teamName_b=Select Team">
            <input name="Back" type="button" value="Back">
            </a>
            <input name="Continue" type="button" value="Continue"></td>
        </tr>
      </table>
    </form>
    <script src="java/drawBoards.js"></script> 
    <script src="java/score.js"></script> 
    <!-- <script src="java/drawScores"></script>  !--> 
  </div>
</div>
</body>
</html>
