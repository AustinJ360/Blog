<?php
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error) {//tells if database has problems

	die("Error:" . $connection->connect_error);
}
$exists = $connection->select_db($database);
if(!$exists){//if else statement
	$query = $connection->query("CREATE DATABASE $database");//database string
	if($query){
		echo "Successfully created database:" . $database;
	}
}
else {
	echo "Success" . $connection->host_info;
}
$exists = $connection->select_db($database);
$connection->close();

?>