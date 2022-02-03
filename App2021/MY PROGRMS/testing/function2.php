<?php
$no1=readline('Enter the No 1:');
$no2=readline('Enter the No 2:');
echo add($no1,$no2);

function add($no1=0,$no2=0)
{
return $no1+$no2;
}

printf("The result with 0 argument=%d\n",add());

printf("The result with 1 argument $no1=%d\n",add($no1));

printf("The result with 1 argument $no2=%d\n",add($no2));

printf("The result with 2 argument=%d\n",add($no1,$no2));
?>