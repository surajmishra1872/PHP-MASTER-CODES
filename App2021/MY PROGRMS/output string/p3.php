<?php

echo'This is a simple raw string';

echo"\nThis is a simple raw string";
echo PHP_EOL;

//escape sequence

echo'This is a simple \t raw \n string';

echo"\nThis is a simple\t raw \n string";

//with variable

$name='ravi';
$class='B.TECH';
$rollno=1001;

echo 'name=$name,class=$class,rollno=$rollno,inside single code';
echo PHP_EOL;
echo"name=$name,class=$class,rollno=$rollno, inside double code";

//with variable.

echo PHP_EOL;
$a=100;
echo 'The value $a is :"$a"';
echo PHP_EOL;
echo "The value of \$a is: '$a'"; //{}-ginger technie string complication
echo PHP_EOL;
echo 'The value of $a is :'.$a;
echo PHP_EOL;
echo 'The value of $a is :"'.$a.'"';
echo PHP_EOL;
echo 'The value of $a is :'."'$a'";

?>