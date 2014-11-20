 <link rel="stylesheet" type="text/css" href="main.css">
<?php

	require_once(__DIR__ . "/view/header.php"); //requires header php in view folder
	require_once(__DIR__ . "/view/form.php");//requires form php in view folder
	require_once(__DIR__ . "/view/footer.php");//requires footer in view folder
 $date = new Datetime('today');
 echo $date ->format('m/d/y') 

?>