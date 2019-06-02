  
<<?php session_start() ?>
	<header class="header">
		<div class="container">
			<div class="logo">
				<img src="images/logo9.png" style="width:314px;height:100px;">
			</div>
				<nav class="nav">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="game.php">Game</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contact.html">Contact</a></li>
							
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
			echo "<div class=\"signin\">
				  <a href=\"logout.php\">Log out</a>
			      </div>             
			      ";
			?>
		</div>	
	</header>
