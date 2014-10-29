<?php
require_once(__DIR__ . "/../model/database.php");
//find a file once
$connection = new mysqli($host, $username, $password);
//checks connection error
if($connection->connect_error) {

	die("Error:" . $connection->connect_error);
}
//checks if there is database
	$exists = $connection->select_db($database);
//destroys the program if there is a connection error
if(!$exists){
//sends commands to the database
	$query = $connection->query("CREATE DATABASE $database");//database string
		if($query){
			echo "Successfully created database:" . $database;
		}
}
else{
	echo "Database already exists";
}
$connection->close();

?>