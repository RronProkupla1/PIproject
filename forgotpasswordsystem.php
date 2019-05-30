
<?php

require_once "php/somefunctions.php";

if(isset($_GET['Email']) && isset($_GET['token']))
{
	$link = mysqli_connect('localhost','root','root','piproject');
	if(mysqli_connect_error())
	{
		die("There was an error connectiong to the database!");
	}

	$email = $link -> real_escape_string($_GET['Email']);
	$token = $link -> real_escape_string($_GET['token']);

	$sql = $link -> query("SELECT ID FROM signuptable WHERE Email = '$email' AND token = '$token' AND token <> '' AND tokenExpire>NOW()");

	if($sql -> num_rows > 0)
	{
			$password = generateString();
		
		
			$options = [
                            'cost' => 12,
                                ];

			$link-> query("UPDATE signuptable SET token = '' ,Password = '".password_hash($password,PASSWORD_BCRYPT,$options)."'  WHERE Email = '$email'");

			echo "Your new password is $password ";
			echo "<br><a href='login.php'>Click here to login</a>";
			}
		else{
			
				redirecttologin();
			}
	
		

	}
else
{
	redirecttologin();
}

?>
