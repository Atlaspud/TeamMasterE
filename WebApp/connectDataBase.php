<?php
try {
	/* connect to database */
	 $dbh = new PDO("sqlite:PINPIN_DB.sqlite");
	} catch(PDOExeption $e){
		echo $e-getMessage();
		}
?>
