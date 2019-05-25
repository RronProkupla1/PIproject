<!DOCTYPE html>
<html>
<head>
	
<?php include('php/signupVDB.php') ?>

	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/SignUp.css">

</head>
<body background="images/sg10.jpg">


	<div id="logo"><img src="images/logo9.png"><h1 id="text1">Sign Up</h1></div>
	<div class="form1" style="">
		<table id="table1" style="max-width: 350px">
			<form action="" method="post">
			</br>
			</br>
				<tr class="tr1">
					<td id="td1"><input type="text" name="name" placeholder= " First Name">
						<span style="font-size: 12px;color: red;"><?php if (isset($nameError)) echo $nameError ?></span>
						<input type="text" name="lastname" placeholder=" Last Name">
						<span style="font-size: 12px;color: red;"><?php if (isset($lastnameError)) echo $lastnameError ?></span></td>
					
				</tr>
				<tr>
					<td><div style="display: flex;"><input type="radio" name="gender" value="Mashkull" checked><span style="margin-top: 8px">Male</span>
			       <input type="radio" name="gender" value="Femer"><span style="margin-top: 8px;">Female</span><br></td></div>

				</tr>
				<tr><td><input type="date" name="date">
					<span style="font-size: 12px;color: red;"><?php if (isset($DateError)) echo $DateError ?></span></td></tr>
				
				
				<tr>
					<td id="td4"><input type="Email" name="email"  placeholder=" Email">
					<span style="font-size: 12px;color: red;"><?php if (isset($emailError)) echo $emailError ?></span></td>
				</tr>
				<tr>
					<td id="td5"><input type="Password" name="pass" placeholder =" Password">
						<span style="font-size: 12px;color: red;"><?php if (isset($passError)) echo $passError ?></span></td>
				</tr>
				<tr>
					<td id="td6"><input type="Password" name="pass1" placeholder= " Confirm Password">
						<span style="font-size: 12px;color: red;"><?php if (isset($pass1Error)) echo $pass1Error ?></span>
						<span style="font-size: 12px;color: red;"><?php if (isset($passwError)) echo $passwError ?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Register Now"></td>
				</tr>

			
			</form>
		</table>
	</div>

</body>
</html>