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
	</head>
	<body>
		<div id="content">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h2>Let's Play Tic Tac Toe!</h2>
		<?php
			$_SESSION['game']['tictactoe']->playGame($_POST);
		?>
		</form>
		</div>
	</body>
</html>