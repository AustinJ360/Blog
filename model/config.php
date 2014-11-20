
<link rel="stylesheet" type="text/css" href="main.css">
<?php
	require_once(__DIR__ . "/Database.php");
	$path = "/Blog/";
	//REFACTORING store variables , fixing files , both database and config had variables so merged 
	$host = "localhost";//blog variables moved from database
	$username = "root";//merged database with config
	$password = "root";
	$database = "blog_db";

	$connection = new Database($host, $username, $password, $database);

?>