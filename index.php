<html>
	    <link rel="stylesheet" type="text/css" href="main.css">
	<head>
	<meta charset="UTF-8">
	<title></title>
	
	</head>
	<body>
	<?php
	   require_once(__DIR__ . "/view/header.php");//checks for file
	   require_once(__DIR__ . "/controller/create_db.php");//look for file
	   require_once(__DIR__ . "/view/footer.php");//checks for file
	   require_once(__DIR__ . "/view/navigation.php");//looks for file
	   require_once(__DIR__ . "/controller/read-posts.php");
	?>
	</body>
</html>