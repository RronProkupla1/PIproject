<?php

$link = mysqli_connect("localhost","root","root","piproject");

            if(mysqli_connect_error())
            {

                die("There was an error connecting to the database");
            }

session_start();

$email = $_SESSION['email'];

$query = "SELECT * FROM signuptable WHERE Email = '$email' AND privilege = 'admin'";
 			$result = mysqli_query($link,$query) or die( mysqli_error($link));
 			$row = mysqli_fetch_assoc($result);
        	
            if($row > 0)
            {
            	header("Location: admin.php");
            		
            }
            else
            {
            	$msg2 = "You don't have admin privilege";
				echo "
				<script type='text/javascript'>alert(\"$msg2\");
						window.history.go(-1);</script>
						";
            }


?>