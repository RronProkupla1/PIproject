
<html>
<head>
	
	<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $password = '';

if (empty($_POST['email'])) {
		$emailError = 'Please add your email*';
	}
	 else {
		$email = trim(htmlspecialchars($_POST['email']));
     }


if(empty($_POST['password'])){
    	$passwordError = 'Password is required*';
    }
    else {
    	$password = trim(htmlspecialchars($_POST['password']));
    }

}

	?>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/login.css">

</head>
<body background="images/sg10.jpg">
	<div id="logo"><img src="images/logo9.png"><h1 id="text1">Log In</h1></div>
<div class="form1">
	<table id="table1" style="max-width: 250px">
		<form method="post">
			<div style="padding: 20px;">
			<br><br>
			<tr><td><input type="text" name="email" placeholder="Email...">
				<span style="font-size: 12px;color: red;"><?php if (isset($emailError)) echo $emailError ?></span>
			</td></tr><br>
			<tr></tr>
			<tr><td><input type="text" name="password" placeholder="Password...">
				<span style="font-size: 12px;color: red;"><?php if (isset($passwordError)) echo $passwordError ?></span>
			</td><br></tr><br>
			<tr></tr>
			<tr><td style="padding-left: 70px;"><input type="submit" name="login" value="Log In"></td></tr>
			<tr></tr>
			<tr></tr>
			<tr><td style="position: relative;vertical-align: center;">
				<p style="color: white;font-size: 12px;"><br><br><br>If you don't have an account create one for free!</p></td></tr>
			<tr><td style="padding-left: 70px;padding-right: 27px;"><input type="button" name="newacc" value="Register" 
			onclick="window.location.href='SignUp.php'"></a></td></tr>
			</div>
		</form>
	</table>
</div>
</body>
</html>