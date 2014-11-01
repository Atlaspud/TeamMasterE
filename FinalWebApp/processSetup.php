<?php
include("connectDataBase.php");
include("sqlDataBaseQuerise.php");

$_INSERTnewTeam = $Sql->INSERTnewTeam . $_POST['newTeam'] ."')";
echo $_INSERTnewTeam;
$dbh->query($_INSERTnewTeam);

header('Location: http://localhost/PINPINBowling/setupMatch.php');

?>
