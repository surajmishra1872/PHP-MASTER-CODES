<?php
// wap in php to nullable and empty
$x="";
var_dump($x);

PHP_EOL;
var_dump($x=="");

PHP_EOL;
var_dump($x=='');

PHP_EOL;
var_dump($x==="");

PHP_EOL;
var_dump($x==='');

PHP_EOL;
var_dump(empty($x));

PHP_EOL;
var_dump(empty(''));

PHP_EOL;
var_dump(empty(""));

$y="";

var_dump($x);
PHP_EOL;

echo "Comparison of empty and space";
echo PHP_EOL;
var_dump(""==" ");

echo PHP_EOL;
var_dump(""===" ");


?>