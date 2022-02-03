<?php
//wap to find the sum of all argument of all the arguments supplied ,from commnd line and Average

print_r($argv);
$sum=0;
$avg=0;
for($i=1;$i<$argc;$i++)
{
$sum+=(int)$argv[$i];
}
echo "sum is:",$sum;
echo PHP_EOL;
echo "Average is:",$sum/($argc-1);

?>