<?php
function generateString($len = 10){
			$str = "diufahewifhdkalhfewuincxb12345678900";
			$str = str_shuffle($str);
			$str = substr($str, 0,$len);

			return $str;
}

function redirecttologin(){
	header('Location: login.php');
	exit();
}

?>