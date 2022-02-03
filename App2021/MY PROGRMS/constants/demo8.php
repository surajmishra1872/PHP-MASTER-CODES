<?php

//wap in php to show constants are global

define("wife","Katreena");
printf("**************  Start of Global scope **************\n\n");
printf("No one can ,Seperate Awanish From :%s\n",wife);

$villan="Vicky Kaushal";
printf("The only villan in Awanish Life is:%s \n\n",$villan);
printf("**************  End of Global scope **************\n\n\n");
printf("**************  Start of local scope **************\n\n\n");
function test()
{
printf("No one can ,Seperate Awanish From :%s\n",wife);	
printf("The only villan in Awanish Life is:%s \n",$villan);	
printf("**************  End of local scope **************\n\n");
}

test();
?>