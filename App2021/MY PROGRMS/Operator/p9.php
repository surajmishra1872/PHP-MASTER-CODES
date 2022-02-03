<?php

//wap in php to find perfect Number using Recursion and Ternary operator

$n=readline("Enter Your Number:");
if(is_perfect($n))
{
echo "$n is Perfect Number.";
}
else
{
echo "$n is Not Perfect Number.";
}


function is_perfect($n,$i=1,$sum=0)
{
if($i==$n)
{
return false;
}
else
{
if($n%$i==0)
{
$sum=$sum+$i;
}
if($sum==$n)
{
return true;
}
return is_perfect($n,$i+1,$sum);
}
}
?>