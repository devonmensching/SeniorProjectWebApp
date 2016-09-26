<?php

$DB_SERVER = "localhost";
$DB_NAME = "SeniorProject";
$DB_USER = "root";
$DB_PASS = "shiraz";

// 1. Create a database connection and select database

try {

	$connection = new PDO('mysql:host=' . $DB_SERVER . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);	
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {

	echo "Could not connect.";
	echo $e;
	exit();

}

?>