<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $link = mysqli_connect("localhost","root","root","piproject");

            if(mysqli_connect_error())
            {

                die("There was an error connecting to the database");
            }
$output='';
$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{

 echo "Name is required<br>";
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 echo  "Comment is required<br>";
}
else
{
 $comment_content = $_POST["comment_content"];
}

if(!empty($_POST["comment_name"]) && !empty($_POST["comment_content"]))
{

	$name = $_POST['comment_name'];
	$comment = $_POST['comment_content'];
	$query = "INSERT into tbl_comment (name,comment,data) VALUES ('".mysqli_real_escape_string($link, $name)."',
                '".mysqli_real_escape_string($link,$comment)."',sysdate())";

if (mysqli_query ( $link, $query )) {
    echo " ";
} else {
    echo "Error occurred: " . mysqli_error ( $link );
}
    $query2 = "SELECT * FROM tbl_comment ORDER BY 
comment_id desc";
    $result = mysqli_query($link,$query2);
    

    while ($row = mysqli_fetch_assoc($result))
    {
    	$output .= '
 <div class="commwidth">
  <div class="namendate"><b>'.$row['name'].'</b><i style="float:right;margin-right:6px;">'.$row['data'].'</i></div>
  <div class="comment">'.$row['comment'].'</div>
 </div>
 ';
 
    }

    echo $output;
}
}

?>