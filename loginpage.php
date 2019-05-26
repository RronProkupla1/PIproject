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

	if($email == "" || $password == "")
	{
		$msg = "Fill the inputs!";
		echo "
		<script type='text/javascript'>alert(\"$msg\");
				window.history.go(-1);</script>
			";

	}
	else{


$query1 = mysqli_query($link,"SELECT ID from signuptable where Email = '$email'");
$row1 = mysqli_fetch_array($query1);
$id = $row1[0];
$query = "SELECT * FROM signuptable WHERE  Email = '$email'";
$result = mysqli_query($link,$query) or die("Failed to query database ".mysqli_error($link));
$row = mysqli_fetch_array($result);

if($row['Email'] == $email && password_verify($password,$row['Password']) == 1 )
{
	echo "login successful!";
	
}
else
{
	$msg2 = "You did a mistake while typing email-password or you aren't registered.";
	echo "
		<script type='text/javascript'>alert(\"$msg2\");
				window.history.go(-1);</script>
			";
}

}


?>