<?php

//wap in php to show userdefine procedural constants

define('gravity',10);//lowercase
define('GRAVITY',9.8);//uppercase
define('Gravity','Free fall');//Capatalise
define('GraVity','This is Gravity'); // mixed 

echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GraVity;
echo PHP_EOL;


?>