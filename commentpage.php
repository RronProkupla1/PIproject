<html>
<head>
	
	<title>Comment</title>

	<link rel="stylesheet" type="text/css" href="styles/comment.css">

</head>

<body>
  <div class="container">
   <form method="POST" id="comment_form" action="">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="pagew" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="pagew" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" value="Comment" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
 	
 	<?php

include ("php/add_comment.php");

 	?>
</html>