<?php
require_once(__DIR__ . "/../model/config.php");
?>

<header><h2>Create Blog Post</h2></header>

<form method="post" action="<?php echo $path."controller/create-post.php"; ?>">
   <div>
   		<label for="title">Title: </label>
   		<input type ="text" name= "title"/> 
   		<?php // "input' is one line of text?>
   </div>

   <div>
   		<label for ="post">Post: </label>
   		<textarea name="post"></textarea>
   		<?php
         //"text area" to type anything in text box
   		?>
   </div>

   <div>

   <button type="submit">Submit</button>
   
   </div><?php//to submit text?>

</form>