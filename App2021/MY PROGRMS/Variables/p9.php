<?php

//wap in php to show the difference B/W null and undefined.

$x='a';
echo $x;	
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
echo PHP_EOL;
printf("The Momory x=%d",memory_get_usage($x));
unset($x);
printf("The Momory x=%d",memory_get_usage($x));

echo PHP_EOL;

echo "Info about z";
echo PHP_EOL;
$z='null';
echo $z;	
echo PHP_EOL;
var_dump($z);
var_dump(isset($z));
echo PHP_EOL;
printf("The Momory z=%d",memory_get_usage($z));
unset($z);
printf("The Momory z=%d",memory_get_usage($z));

?>