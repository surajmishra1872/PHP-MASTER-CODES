<?php

//wap in php to show,floating point number.
$x=010;// octal number.
$x1=-010;// octal number.
//$x2=08;
/*Invalid Numeric Literal(conversion to octal range not possible. octal range is 0 to 7)*/
$x2=07;
echo $x;
echo PHP_EOL;
echo $x1;
echo PHP_EOL;
echo $x2;
echo PHP_EOL;
$b=10.5;
echo $b;
echo PHP_EOL;
echo gettype($b);
echo PHP_EOL;
echo var_dump($b);

$c=10.0;
echo PHP_EOL;
$d=10.0000;
echo $c;
echo PHP_EOL;

echo $d;
echo PHP_EOL;
echo getType($c);
echo PHP_EOL;
var_dump($c);

echo PHP_EOL;

$z=0.5;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;

$w=.5;
echo $w;
echo PHP_EOL;
echo getType($w);
echo PHP_EOL;
var_dump($w);

echo PHP_EOL;

$p='a';
$p.=$w;

echo $p;
echo PHP_EOL;
echo getType($p);

echo PHP_EOL;
$marks=9.99999999999999;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);

//rules of rounding a number.

echo PHP_EOL;
$m=9.9299993;
echo $m;
echo PHP_EOL;

echo getType($m);
echo PHP_EOL;
var_dump($m);

echo PHP_EOL;
printf("%.2f",$m);


















?>