<?php
class Database{//Classes are a convenient way to group data and functionality.You could make a class to contain a persons information.
//to create your own object to make variables and use function.  a Class is a blueprint for an object.
//A class is a collection of variables and functions working with these variables. Variables are defined by var and functions by function. 

 private $connection;//variable only able to access within this file
 private $host;
 private $username;
 private $password;
 private $database;

 public function __construct($host, $username, $password, $database){//database class
 	$this->host = $host;//access to all global variables
 	$this->username = $username;
 	$this->password = $password;
 	$this->database = $database;
 }

 public function openConnection() {
 	$this->connection = new mysqli($this->host, $this->username,$this->password,$this->database);//new connection , establish connection

 	if($connection->connect_error) {//checking whether or not we have a connection error

	die("Error:" . $this->connection->connect_error);
	}
 }

 public function closeConnection() {
 	if(isset($this->connection))){//checking if the variable has bin set or not
		$this->connection->close();//checking connection
 	}
 }

 public function query($string) {
 	$this->openConnection();

 	$query = $this->connection->query($string);//refactored code useing variable

 	$this->closeConnection();

 	return $query();
 }

}
?> 