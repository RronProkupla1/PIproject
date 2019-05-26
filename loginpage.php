<?php

$link = mysqli_connect('localhost','root','root','piproject');

if(mysqli_connect_error())
            {

                die("There was an error connecting to the database");
            }

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($link,$email);
$password = mysqli_real_escape_string($link,$password);


$query1 = mysqli_query($link,"SELECT ID from signuptable where Email = '$email'");
$row1 = mysqli_fetch_array($query1);
$id = $row1[0];
$query = "SELECT * FROM signuptable WHERE Password = '".md5(md5($id).$password)."' and Email = '$email'";
$result = mysqli_query($link,$query) or die("Failed to query database ".mysqli_error($link));
$row = mysqli_fetch_assoc($result);

if($row['Email']= $email && $row['Password'] = $password)
{
	echo "login successful!";
}else {
	echo "not a user";
	}





?>