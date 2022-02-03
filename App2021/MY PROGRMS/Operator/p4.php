<?php

//wap to find mod of given number without using if else.
//wap to find odd even of given number without using if else.

$num=readline("Enter Number:");
//$res=($num>0)?"|".abs($num)."|" :"|".abs($num)."|";


$res=($num>0)?"|".($num)."|" :"|".-($num)."|";
echo $res;

?>