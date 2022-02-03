<?php
// wap in php to show var-to-var reference

$z="chaman";
$$z=500;
printf("Value of chaman is:  %d\n",$chaman);
printf("Value of chaman is:  %d\n",$$z);

$w='_100';
$$w='king';
printf("The Valueof w is:%s \n",$w);
printf("The Valueof king is:%s \n",$$w);
printf("The Valueof _100 is:%s \n",$_100);

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;

echo PHP_EOL;

$student['name']='Suraj';
$student['class']='B.Tech';
foreach($student as $key=>$value)
{
	//$$key=$value
	echo $key;
	echo PHP_EOL;
	echo $value;
	echo PHP_EOL;
	printf("%s:%s \n",$key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;

echo 'Without using variable to variable';
echo PHP_EOL;
$car['name']='Maruti';
$car['class']='A class';
$car['price']='5.5 Lacks';

printf("The name of car:%s \n",$car['name']);
printf("The class of car:%s \n",$car['class']);
printf("The price of car:%s \n",$car['price']);

extract ($car);

printf("The name of car:%s \n",$name);
printf("The class of car:%s \n",$class);
printf("The price of car:%s \n",$price);


?>