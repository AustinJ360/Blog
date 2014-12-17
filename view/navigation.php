<?php 
//Blog post points to post.php as a link
require_once(__DIR__ . "/../model/config.php")
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Life of the World</title>
	
	</head>
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>
</html>
