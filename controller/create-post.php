
<link rel="stylesheet" type="text/css" href="duke.css">
<html>
<body>
</form>
<?php //creates a play so title and post can be sent to. 
require_once(__DIR__ . "/../model/config.php"); //so we have access, changed databse to config from refactoring

$title = filter_input(INPUT_POST, "title",FILTER_SANITIZE_STRING);//filter the input to make sure there is no mellicious things.
$post = filter_input(INPUT_POST, "post",FILTER_SANITIZE_STRING);
$date = new DateTime('today');
$time = new DateTime('America/Los_Angeles');

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");//able to insert information

if ($query) {
	//echo "<p>Successfully inserted post : $title</p>";//tells if the var title was sent successfully 
	echo "Posted on:" . $date->format("m/d/y") . " at " . $time->format("g:i");//post time and date after posting 
}
else{
	echo "<p>" . $_SESSION["connection"]->error . "</p>";//checks for errors on connection
}

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="readmore"></script>
</body>
</html>