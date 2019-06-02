<?php 

$id = $_POST['idelete']; 

$connect = mysqli_connect('localhost','root','root','piproject');
if (!$connect) {
    die('Could not connect: ' . mysqli_error($con));
}

$query = "Delete from signuptable  where id = '".$id."'"; 

$result = mysqli_query($connect,$query);
             
if($result){ 
 echo "deleted id ".$id." ";
 echo "<a href='admin.php'>Go back</a>";
 }
 else{ 
 echo "Delete fail";
} 
?>