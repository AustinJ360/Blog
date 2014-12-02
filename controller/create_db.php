<?php
require_once(__DIR__ . "/../model/config.php");//changed database to config from refactoring
//find a file once
//database already exist 
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	         . "id int(11) NOT NULL AUTO_INCREMENT,"//blog post unique id
	         . "title varchar(255) NOT NULL,"
	         . "post text NOT NULL,"
	         . "PRIMARY KEY (id))");

if($query){

	echo"Successfully created table: post";//check if query is created

}
else{

	echo "<p>" . $_SESSION["connection"]->error ."</p>"; //check for error

}

?>