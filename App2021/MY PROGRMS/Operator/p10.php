<?php

//wap in php to show string concatenation

$x='Life';
$y='Line';

var_dump($x.$y);
var_dump(getType($x));
var_dump(getType($y));
var_dump(getType($x.$y));

$x=10;
$y=20;
var_dump($x.$y);
var_dump(getType($x.$y));

$result='The result is = ';
echo $result.($x+$y);

/*
Note:- PHP allows Mathematicall
Evalutaion ,only after using brackets
other wise non-numeric encountered
Error Will be thrown.

*/

?>