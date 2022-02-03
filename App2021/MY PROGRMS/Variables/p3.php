<?php

//wap in php to boolean data type stored in variables.

$x=true;
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;

$x=True;
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;

$x=tRue;
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;

$x=TRUE;
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;

$z=TRUE;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;
echo 'On Comparing all the three values';
echo PHP_EOL;
echo(true==TRUE);
echo PHP_EOL;
echo PHP_EOL;
echo(1==true);
echo PHP_EOL;
var_dump(1==true);
?>