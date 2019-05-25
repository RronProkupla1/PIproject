<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $link = mysqli_connect("localhost","root","root","piproject");

            if(mysqli_connect_error())
            {

                die("There was an error connecting to the database");
            }
       

    $name = $email = $lastname = $pass = $pass1 = '';
    $nameError=$emailError=$emailErr=$lastnameError=$DateError=$passError=$pass1Error =$passwError = '';

    if (empty($_POST['name'])) 
        {
    		$nameError = 'Name should be filled*';
    	}
        elseif(!preg_match("/^[a-zA-Z\s]*$/",$_POST['name'])) 
        {
          $nameError = "Only letters allowed"; 
        } 
    	else 
        {
    		$name = trim(htmlspecialchars($_POST['name']));
        }


    if (empty($_POST['email']))
        {
    		$emailError = 'Please add your email*';
    	}
    	else 
        {
    		$email = trim(htmlspecialchars($_POST['email']));
    		  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                $emailErr = "Invalid email format"; 
                }
    	}


     if (empty($_POST['lastname'])) 
        {
    		$lastnameError = 'Lastname shoud be filled*';
    	} 
    	else 
        {
    		$lastname = trim(htmlspecialchars($_POST['name']));
    	}
        
     
     if(empty($_POST['date']))
        {
        	$DateError = 'Date is required*';
        }
        else 
        {
        	$Date = trim(htmlspecialchars($_POST['date']));
        }

     
     if(empty($_POST['pass']))
        {
        	$passError = 'Password is required*';
        }
        else 
        {
        	$pass = trim(htmlspecialchars($_POST['pass']));
        }


    if(empty($_POST['pass1']))
        {
        	$pass1Error = 'Password is required*';
        }
        else 
        {
        	$pass1 = trim(htmlspecialchars($_POST['pass1']));
        }

        
        if($pass != $pass1)
        {
    	 	$passwError = 'Passwords should match!*';

        }
        
        if($nameError !="" || $emailError !="" || $emailErr !="" || $lastnameError !="" || $DateError !="" || $passError !="" || $pass1Error !="" || 
            $passwError !="" )
        {
            echo "<div>There was a mistake in your input please try again!</div>";
        }
        else
        {


        
            

            $query = "SELECT ID FROM signuptable WHERE Email = '".mysqli_real_escape_string($link,$_POST['email'])."' LIMIT 1";
            $result = mysqli_query($link,$query);
            $row = mysqli_fetch_assoc($result);
            if($row > 0)
            {
            $msg = "Email is taken chose another one ";      
            echo "<script type='text/javascript'>alert(\"$msg\");</script>";
            }
              
        
            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Lastname = $_POST['lastname'];
            $Gender = $_POST['gender'];
            $Date = $_POST['date'];
            $Password = $_POST['pass'];


                $query = "INSERT INTO signuptable (Emri,Mbiemri,Gjinia,Datelindja,Email,Password) VALUES (
                '".mysqli_real_escape_string($link, $Name)."',
                '".mysqli_real_escape_string($link,$Lastname)."',
                '".mysqli_real_escape_string($link,$Gender)."',
                '".mysqli_real_escape_string($link,$Date)."',
                '".mysqli_real_escape_string($link,$Email)."',
                '".mysqli_real_escape_string($link,$Password)."')";

                if(!mysqli_query($link,$query))
                {
                    $msg2 = "Could not sing you up, please try again later." ;       
                   echo "<script type='text/javascript'>alert(\"$msg2\");</script>";
                }
                else
                {
                    
                    $query = "UPDATE signuptable SET Password = '".md5(md5(mysqli_insert_ID($link)).$Password)."' WHERE ID= ".mysqli_insert_ID($link)." LIMIT 1 ";

                    mysqli_query($link,$query);
                }
            


            }
        
        }

 


?>