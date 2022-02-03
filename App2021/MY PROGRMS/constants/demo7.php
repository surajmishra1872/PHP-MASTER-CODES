<?php

//wap in php to show difference b/w predefine error level and user-defined error level

error_reporting(E_NOTICE);
//error_reporting(E_USER_NOTICE);

printf("The value of true is :%d\n",true);
printf("The value of TRUE is :%d\n",TRUE);
printf("true is Incase-senstive constant:%d \n",(True ==1));
define('true',10,1);
printf("The value of true after redeclaration:%d \n",true);

?>