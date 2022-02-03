<?php
// wap in php to check an array is Homogenous or Hetrogenous

function is_homo($array=[])
{
$key_type=getType($array[0]);
for($i=0;$i<count($array);$i++)
{
if($key_type===getType($array[$i]))
{
}
else{
return false;
}
}
return true;
}
var_dump(is_homo([1,2,3,4,5,"suraj"]));
?>
