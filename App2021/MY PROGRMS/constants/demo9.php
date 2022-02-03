<?php

//wap in php to show constants are global inside class

define('GRAVITY',10);
printf("Value of GRAVITY is: %d",$GRAVITY);

define('gravity',9.8);
printf("Value of gravity is: %d",$gravity);

class Test{
	
	private $g;
	private $G;
	public function __construct()
	{   
		$this->G=GRAVITY;
		$this->g=$gravity;
		printf("The value of GRAVITY inside method :%d \n",GRAVITY); // constant
		printf("The value of gravity inside method :%d \n",$gravity);// undefined variable g
		
		printf("The value of gravity using g for class :%d \n",$this->g);//undefined variable g
		printf("The value of gravity using G for class :%d \n",$this->G);
	}
}
?>