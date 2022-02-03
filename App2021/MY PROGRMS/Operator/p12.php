<?php
// wap in php to make udf str_multiply function which,repeat the string no of 

function str_multiply($name,$num)
{
$res='';
for($n=1;$n<=$num;$n++)
{
$res.=$name;
}
echo($res);
}

str_multiply("Hello",10);

?>