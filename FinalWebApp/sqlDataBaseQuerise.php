<?php
include("connectDataBase.php");
require "Queries.php";

$Sql = new Queries();

$Sql->INSERTnewSbID = "INSERT INTO scoreboard (sbID) VALUES (";
$Sql->INSERTnewTeam = "INSERT INTO team (teamName) VALUES ('";
$Sql->SELECTmaxSbID= "SELECT MAX(sbID) AS maxSbID FROM scoreboard";
$Sql->SELECTmaxMatchID = "SELECT MAX(matchID) AS MaxMatchID FROM match";
$Sql->SELECTmatch = "SELECT * FROM match WHERE matchID = ";
$Sql->SELECTteamName = "SELECT teamName from team WHERE teamID = ";
?>





