<!--
Tori Cox
PHP Website Example

This is the PHP to connect to the database
-->

<?php
$dsn = 'mysql:host=localhost;dbname=cox_tori_universe';
$username = 'toriinternet';
$password = 'toricinema';

//connect to database
try {	
	$db = new PDO($dsn, $username, $password);
	//echo "Successful in connecting to database<br>\n";
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	//echo $error_message;
	include('../errors/cox_tori_database_error.php');
	exit();
}


?>