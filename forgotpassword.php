<!DOCTYPE html>
<html>
<head>
	<?php
	require_once "php/somefunctions.php";

		
	if(isset($_POST['email'])){
		
		$link = mysqli_connect('localhost','root','root','piproject');

		$email = $link -> real_escape_string($_POST['email']);

		$sql = $link ->query("SELECT ID from signuptable WHERE Email = '$email'");
		if($sql ->num_rows > 0){
			$str = generateString();

			$link -> query("UPDATE signuptable SET token ='$str' , tokenExpire = DATE_ADD(now(),INTERVAL 5 MINUTE) WHERE Email = '$email'");

            $to      = "$email";
            $subject = 'Reset Password';
            $message = 'Hi
In order to reset your password, please click on the link below:
http://localhost:3030/PHPproject/forgotpasswordsystem.php?Email='."$email".'&token='."$str".'


Kind Regards,
TechShop com.';
           $header = "From:techshop@gmail.com";
                
            mail($to, $subject, $message,$header);
            $response = "mail sent";

    }

		else{
			exit('Please check your inputs!');
		}
	}
	?>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/forgotpass.css">

</head>
<body>
	<body background="images/sg10.jpg">
	<div id="logo"><img src="images/logo9.png"><h1 id="text1">Forgot Password</h1></div>


<div class="contain">
	

		<form class="form2" method="POST">
			<input id="email" type="email" name="email" placeholder="Type your email..." style="margin-top: 100px;min-width: 400px;margin-left: 40px; ">
			<input id="button" type="submit" name="reset" value="Reset" style="margin-left: 50px;min-width: 400px;" >

		</form>
	


	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

		var email = $("#email");
		$(document).ready(function(){
			$('#button').on('click',function(){
				if( email.val() != ""){
					email.css('border','3px solid green');
				}else{
					email.css('border','3px solid red');
				}
			});
		});
	</script>
</div>
</body>
</html>