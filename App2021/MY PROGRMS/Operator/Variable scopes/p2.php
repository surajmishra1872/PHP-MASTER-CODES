<?php

// wap in php to show global and local varaible priority

$a=10;
function demo()
{
	$b=300;
	global $a;
	
	echo"The value of global a at local scope is :$a";//10
	echo PHP_EOL;
	echo"The value of local b at local scope is :$b";//300
	echo PHP_EOL;
	$a=200;
	echo"The value of local a at local scope is :$a";//200
	echo PHP_EOL;
	   
}

demo();
echo PHP_EOL;
echo "The value of a at global scope is:$a"; //200

?>