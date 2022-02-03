<?php

//wap in php to show global scope defined from local scope.

	$a=10;
	echo "The value of a from global:$a";
	echo PHP_EOL;

function test1()
{
   global $a;
   $b=30;
   echo "The value of a from global inside test1 :$a";
   echo PHP_EOL;
   echo "The value of b from local inside test1 :$b";
   echo PHP_EOL;
}

test1();

function test2()
{
   global $a;
   echo "The value of a from global inside test2 :$a";
   echo PHP_EOL;
}

test2();

?>