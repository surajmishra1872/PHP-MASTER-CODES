<?php 
$num1=$_POST["num1"];
$num2=$_POST["num2"];

$ra=$num1*$num2;
$pe=2*($num1+$num2);
echo "Area of Rectangle is:",$ra;
echo "<br/>Perimeter of Rectangle is:",$pe;
?>