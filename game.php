<?php

require_once('php/class.game.php');
require_once('php/class.tictactoe.php');

session_start();

if (!isset($_SESSION['game']['tictactoe']))
	$_SESSION['game']['tictactoe'] = new tictactoe();

?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="styles/game.css" />
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	 <link rel="stylesheet" type="text/css" href="styles/carousel2.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	 <script src="js/dropdown.js"></script>
	 <style >
	 	
	 	 html{
            scroll-behavior: smooth;
        }

        i {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

        .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: blue;
  cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}


.dropdown {
  margin-top:  20px;
  margin-left: 150px; 
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {
  background-color: #ddd
}

.show {
  display:block;
}
   

	 </style>
	</head>
	<body>
		<?php
		include 'header.php';
		?>

		<div id="content21" style="margin-top: 6.5%;">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h2 style="text-align: center">Let's Play Tic Tac Toe!</h2>
		<?php
			$_SESSION['game']['tictactoe']->playGame($_POST);
		?>
		</form>
		</div>
		<?php

        include 'footer.php';

		?>
	</body>
</html>