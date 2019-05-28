
<html>
<head>
	

	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/login.css">

</head>
<body background="images/sg10.jpg">
	<div id="logo"><img src="images/logo9.png"><h1 id="text1">Log In</h1></div>
<div class="form1">
	<table id="table1" style="max-width: 250px">
		<form method="post" action="loginpage.php">
			<div style="padding: 20px;">
			<br><br>
			<tr><td><input type="text" name="email" placeholder="Email...">
			</td></tr><br>
			<tr></tr>
			<tr><td><input type="password" name="password" placeholder="Password...">
			</td><td><br></td></tr><br>
			<tr></tr>
			<tr><td style="padding-left: 70px;"><input type="submit" name="login" value="Log In"></td></tr>
			<tr><td><br></td></tr>
			<tr><td style="font-size: 12px;text-align: center;padding-left: 100px;"><a href="forgotpassword.php">Forgot password?</a></td></tr>
			<tr><td>
				<span style="font-size: 12px;display: flex;">
					<input type="checkbox" name="remember">
				<p style="margin-left: -140px;">Remember me</p>
			</span>
		    </td> </tr>
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