<?php

$sum=10;
$x=10;
$sum=$sum+$x;
echo "The value of sum without assignment :  $sum\n";
echo PHP_EOL;
$sum=10;
$x=20;
$sum+=$x;
echo "The value of sum with Assignment : $sum";
echo PHP_EOL;
$sum=10;
$x=10;
$sum=$sum-$x;
echo "The value of substraction without assignment :  $sum\n";
echo PHP_EOL;
$sum=10;
$x=20;
$sum-=$x;
echo "The value of substraction with Assignment : $sum";
echo PHP_EOL;
$sum=10;
$x=10;
$sum=$sum*$x;
echo "The value of Multiplication without assignment :  $sum\n";
echo PHP_EOL;
$sum=10;
$x=20;
$sum*=$x;
echo "The value of Multiplication with Assignment : $sum";

echo PHP_EOL;
$sum=5;
$x=2;
$sum=$sum-$x;
echo "The value of division without assignment :  $sum\n";
echo PHP_EOL;
$sum=5;
$x=2;
$sum/=$x;
echo "The value of division with Assignment : $sum";

echo PHP_EOL;
$sum=5;
$x=2;
$sum=$sum%$x;
echo "The value of Modulo without assignment :  $sum\n";
echo PHP_EOL;
$sum=5;
$x=2;
$sum%=$x;
echo "The value of Modulo with Assignment : $sum";
echo PHP_EOL;

$sum="Good";
$x="Morning";
$sum=$sum.$x;
echo "The value of Result without assignment :  $sum\n";

echo PHP_EOL;

$sum="Good";
$x="Morning";
$sum.=$x;
echo "The value of Result with Assignment : $sum";



?>