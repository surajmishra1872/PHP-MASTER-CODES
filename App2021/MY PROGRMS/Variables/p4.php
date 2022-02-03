<?php
//wap in php to show boolean false storedin variable.

$x=fasle;
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);
echo PHP_EOL;
echo json_encode($x);

echo 'On comparing the value.';
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
echo (0==FALSE);
echo PHP_EOL;
echo (0==false);// type is optional match content
echo PHP_EOL;
var_dump(0==false);
var_dump(0==(int)false);//implicit Type conversion // PHP Dynamic
echo PHP_EOL;
var_dump(0===false);//content match and type match=false


printf("%s","Katreena");
echo PHP_EOL;
printf("%d",10);
echo PHP_EOL;
printf("The value of  %b",true);
echo PHP_EOL;
printf("%d",1);
echo PHP_EOL;
printf("%d",true);
echo PHP_EOL;
printf("%s",true);
echo PHP_EOL;
printf("%s",false);
echo PHP_EOL;
printf("%b",false);
echo PHP_EOL;
printf("%d",true);
echo PHP_EOL;


?>