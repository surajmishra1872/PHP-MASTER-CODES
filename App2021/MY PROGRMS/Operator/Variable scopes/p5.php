<?php

function demo()
{
	global $a;
	$a=100;
	echo $a;
	echo PHP_EOL;
}
demo();
echo "out  ".$a;
echo PHP_EOL;
?>