<?php

//wap in php to show re-declaration error in constants

define('gravity',10);
echo gravity;

echo PHP_EOL;

//echo GRAVITY; // undefined constant

define('GRAVITY',9.8);
echo GRAVITY;

//redefine
define('gravity',9.8);
echo gravity;
echo PHP_EOL;

printf("The value of predefine cvonstant true is:%d \n",TRUE);
define('TRUE','yes');
printf("The value of predefine cvonstant true is:%d \n",TRUE);//E_NOTICE
printf("The value of predefine cvonstant true is:%d \n",TRUE);//E_USER_NOTICE
define('gravity',9.8);
printf("The value of user-define costly gravity:%d \n",gravity);



?>