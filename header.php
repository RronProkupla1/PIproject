  
<<?php session_start() ?>
<style type="text/css">
	.dropdown-content2 {
	display: none;
	position: absolute;
	z-index: 1;
	background-color: white;
	width: 120px;
	border-radius: 10px;
	margin-right:2%;
	
	
}
.dropdown2:hover .dropdown2:focus{
	display: block;
	background-color: black;
	}
.dropdown2 {
	position: relative;
	display: inline-block;
	text-align: left;
	margin:0px;
	font-size: 18px;
    font-family: Arial, Helvetica, Verdana;

}
.dropdown2:hover{
	color:white;
	cursor: pointer;
}
.dropdown-content2 a {
  color:#216ae0;
  text-decoration: none;
  display: block;
}
.dropdown-content2 a:hover {background-color: #216ae0;}
.show {display:block;}
</style>
	<header class="header">
		<div class="container">
			<div class="logo">
				<img src="images/logo9.png" style="width:314px;height:100px;">
			</div>
				<nav class="nav">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><span onclick="myFunction2()" class="dropdown2">About us</span>

					<div id="myDropdown2" class="dropdown-content2">
    				<a href="person1.php">Jane Doe</a>
   					<a href="person2.php">John Doe</a>
    				<a href="person3.php">Joan Smalls</a>
  					</div>
			
				</a> </li>
							<li><a href="game.php">Game</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contact.php">Contact</a></li>
							
							<?php if(!isset($_SESSION['email']))
							echo "" ?>
							<?php if(isset($_SESSION['email']))
			                echo "<li><a href=\"commentpage.php\">Chat</a></li>"
							?>
						</ul>
				</nav>
			<?php if(!isset($_SESSION['email']))
			echo "<div class=\"signin\">
				  <a href=\"SignUp.php\">Sign up</a>
			      </div>
			      <div class=\"login\">
				  <a href=\"login.php\">Log in</a>
			      </div>"
			?>

			<?php if (isset($_SESSION['email'])) 
			echo "<div class=\"dropdown\">
  <button onclick=\"myFunction()\" class=\"dropbtn\"><img width=\"20px\" height=\"20px\" style=\"border-radius:20px\" src=\"images/person.png\">&nbsp<i style=\"padding-bottom:5px\" class=\"arrow down\"></i></button>
  <div id=\"myDropdown\" class=\"dropdown-content\">
    <a href=\"#\">".$_SESSION['email']."</a>
    <a href=\"adminverification.php\">Admin</a>
    <a href=\"logout.php\">Log out</a>
  </div>
</div>             
			      ";
			?>
		</div>	
		<script type="text/javascript" src="js/dropdown2.js"></script>
		<script type="text/javascript" src="js/dropdown.js"></script>
	</header>
