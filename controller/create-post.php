<?php //creates a play so title and post can be sent to. 
require_once(__DIR__ . "/../model/database.php"); //so we have access
$connection = new mysqli($host, $username, $password, $database);
$title = filter_input(INPUT_POST, "title",FILTER_SANITIZE_STRING);//filter the input to make sure there is no mellicious things.
$post = filter_input(INPUT_POST, "post",FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
if($query){
echo "<p>Successfully inserted post : $title</p>";
}
else{
echo "<p>$connection->error</p>";
}

$connection->close();

?>