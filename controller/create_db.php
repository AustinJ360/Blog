<?php
require_once(__DIR__ . "/../model/config.php");//changed database to config from refactoring
//find a file once
//database already exist 
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	         . "id int(11) NOT NULL AUTO_INCREMENT,"//blog post unique id
	         . "title varchar(255) NOT NULL,"
	         . "post text NOT NULL,"
	         . "DateTime datetime NOT NULL,"//adding a table to query
	         . "PRIMARY KEY (id))");

if($query){

	echo"<p>Successfully created table: post</p>";//check if query is created

}
else{

	echo "<p>" . $_SESSION["connection"]->error ."</p>"; //check for error

}
//creating new query using a session.creating a query a for users
$query = $_SESSION["connection"]->query("CREATE TABLE users ("//query able to send to database 
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "username varchar(30) NOT NULL,"
		. "email varchar(50) NOT NULL,"
		. "password char(128) NOT NULL,"
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

if($query){
  	echo"<p>Successfully created table: users</p>";
}
else{
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
?>