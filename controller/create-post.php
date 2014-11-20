
<link rel="stylesheet" type="text/css" href="main.css">
<?php //creates a play so title and post can be sent to. 
require_once(__DIR__ . "/../model/config.php"); //so we have access, changed databse to config from refactoring

$title = filter_input(INPUT_POST, "title",FILTER_SANITIZE_STRING);//filter the input to make sure there is no mellicious things.
$post = filter_input(INPUT_POST, "post",FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");//able to insert information

if($query){
	echo "<p>Successfully inserted post : $title</p>";//tells if the var title was sent successfully 
}
else{
	echo "<p>$connection->error</p>";//checks for errors on connection
}


?>