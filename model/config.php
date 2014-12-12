 
<link rel="stylesheet" type="text/css" href="main.css">
<?php
	require_once(__DIR__ . "/Database.php");
	session_start();
	session_regenerate_id(true);
	$path = "/Blog/";
	//REFACTORING store variables , fixing files , both database and config had variables so merged 
	$host = "localhost";//blog variables moved from database
	$username = "root";//merged database with config
	$password = "root";
	$database = "blog_db";
	if(!isset($_SESSION["connection"])){
	$connection = new Database($host, $username, $password, $database);
	$_SESSION["connection"] = $connection;
}
?>