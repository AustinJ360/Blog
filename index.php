<html>
	    <link rel="stylesheet" type="text/css" href="main.css">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	
	</head>
	<body>
	<?php
	   require_once(__DIR__ . "/controller/login-verify.php");
	   require_once(__DIR__ . "/view/header.php");//checks for file
	   if(authenticateUser()){
	   		   require_once(__DIR__ . "/view/navigation.php");//looks for file
	   }
	   require_once(__DIR__ . "/controller/create_db.php");//look for file
	   require_once(__DIR__ . "/controller/read-posts.php");
	   require_once(__DIR__ . "/view/footer.php");//checks for file
	  
	?>
	</body>
</html>