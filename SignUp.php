<!DOCTYPE html>
<html>
<head>
	

<?php
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $email = $lastname = $pass = $pass1 = '';

if (empty($_POST['name'])) {
		$nameError = 'Name should be filled*';
	}elseif(preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameError = "Only letters allowed"; 
    } 
	else {
		$name = trim(htmlspecialchars($_POST['name']));
   
	}


if (empty($_POST['email'])) {
		$emailError = 'Please add your email*';
	}
	 else {
		$email = trim(htmlspecialchars($_POST['email']));
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
	}


 if (empty($_POST['lastname'])) {
		$lastnameError = 'Lastname shoud be filled*';
	} 
	else {
		$lastname = trim(htmlspecialchars($_POST['name']));
	}
    
 
 if(empty($_POST['date'])){
    	$DateError = 'Date is required*';
    }
    else {
    	$Date = trim(htmlspecialchars($_POST['date']));
    }

 
 if(empty($_POST['pass'])){
    	$passError = 'Password is required*';
    }
    else {
    	$pass = trim(htmlspecialchars($_POST['pass']));
    }


if(empty($_POST['pass1'])){
    	$pass1Error = 'Password is required*';
    }
    else {
    	$pass1 = trim(htmlspecialchars($_POST['pass1']));
    }

    
    if($pass != $pass1){
	 	$passwError = 'Passwords should match!*';

    }

}

?>

	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/SignUp.css">

</head>
<body background="images/sg10.jpg">


	<div id="logo"><img src="images/logo9.png"><h1 id="text1">Sign Up</h1></div>
	<div class="form1">
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
					<td><div style="display: flex;"><input type="radio" name="gender" ><span style="margin-top: 8px">Male</span>
			       <input type="radio" name="gender" ><span style="margin-top: 8px;">Female</span><br></td></div>

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