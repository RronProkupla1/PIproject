<?php

$vote = $_REQUEST['vote'];

$filename = "poll_result.txt";

$content = file($filename);


$array = explode("||", $content[0]);

$Phones = $array[0];

$Laptops = $array[1];

$Pc = $array[2];



if ($vote == 0) {
  $Phones = $Phones + 1;
}

if ($vote == 1) {
  $Laptops = $Laptops + 1;
}

if ($vote == 2) {
	$Pc = $Pc + 1;
}



$insertvote = $Phones."||".$Laptops."||".$Pc;

$fp = fopen($filename,"w");

fputs($fp,$insertvote);

fclose($fp);

?>


<h2>Result:</h2>

<table>

<tr>

<td>Phones</td>

<td>
<img src="images/poll.gif"
width='<?php echo(100*round($Phones/($Laptops+$Phones+$Pc),2)); ?>'
height='20'>
<?php echo(100*round($Phones/($Laptops+$Phones+$Pc),2)); ?>%
</td>

</tr>


<tr>

<td>Laptops</td>

<td>
<img src="images/poll.gif"
width='<?php echo(100*round($Laptops/($Laptops+$Phones+$Pc),2)); ?>'
height='20'>
<?php echo(100*round($Laptops/($Laptops+$Phones+$Pc),2)); ?>%
</td>
</tr>

<tr>

<td>PC</td>
<td>
<img src="images/poll.gif"
width='<?php echo(100*round($Pc/($Laptops+$Phones+$Pc),2)); ?>'
height='20'>
<?php echo(100*round($Pc/($Laptops+$Phones+$Pc),2)); ?>%
</td>

</tr>

</table>