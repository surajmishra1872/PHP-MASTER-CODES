<?php 
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$num4=$_POST["num4"];
$num5=$_POST["num5"];
$res=($num1+$num2+$num3+$num4+$num5)*100/500;
echo "<br/>First Subject Number is:",$num1;
echo "<br/>Second Subject Number is:",$num2;
echo "<br/>Third Subject Number is:",$num3;
echo "<br/>Forth Subject Number is:",$num4;
echo "<br/>Fifth Subject Number is:",$num5;
echo "<br/>Over All Percentage is:",$res;
?>