<?php

$a=10;
function func()
{  
     // $b=100; // here $b is local varaible of func function
	//here a is not a global scope
	//global $a; // make a as global
	GLOBAL $a; // make a as global
	Echo "\nthis line print under function and here value of a is :".$a;
}
echo "\nHere The value of a is :".$a; // this is global scope
//echo "\nHere The value of a is :".$b; // this is global scope

func();
?>