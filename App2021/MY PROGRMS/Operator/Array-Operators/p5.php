<?php

//never use @ operator because ,Debugging is important.
/*
$x=20;
echo "The value of x:$x"; //20

echo PHP_EOL;
echo"The value of y :".@$y;  // undefined variable y

$z=isset($z)?$z:null;
echo PHP_EOL;
echo "The value of z using ternary :".$z; // undefined variable z.
var_dump($z);

$z=isset($z) ?? null;

echo "The value of z Using Nullcoalescing:".$z;  //undefined variable z.
var_dump($z);
*/

$p=(5<2)??null;
var_dump($p);

?>