<?php //creates a play so title and post can be sent to. 
$title = filter_input(INPUT_POST, "title",FILTER_SANITIZE_STRING);//filter the input to make sure there is no mellicious things.
$post = filter_input(INPUT_POST, "post",FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>";//to echo out title.
echo "<p>Post: $post</p>";

?>