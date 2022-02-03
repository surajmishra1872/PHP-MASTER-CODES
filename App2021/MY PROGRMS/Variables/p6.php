<?php
// wap in php to assign the array to variable 
$color[0]='red';
$color[1]='Orange';
$color[2]='Blue';
$color[3]='Green';
$color[4]='Black';

echo gettype($color);
echo PHP_EOL;
print_r($color);

$color[]='red';
$color[]='orange';
$color[]='Black';
$color[]='Yellow';
$color[]='green';
echo PHP_EOL;
print_r($color);

$colors[]='red';
$colors[]='orange';
$colors[]='Black';
$colors[]='Yellow';
$colors[]='green';
echo PHP_EOL;
print_r($colors);

echo PHP_EOL;
echo "NEW ARRAY START HERE";

$arr=["Red Label","Blenders Pride","8PM","8PM Black","Bunty and Bubbly","Tuborg","Appie Fiz",
"Magic Moment","Black","Kingfisher","Desi","Royal Stck","Windies Lime"];
echo PHP_EOL;
print_r($arr);
?>