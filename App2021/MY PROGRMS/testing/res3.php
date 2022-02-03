<?php
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];

	
		$ans1=$num1+$num2;
        echo "Addition of Number is:",$ans1;
        
		$ans2=$num1-$num2;
        echo "<br/>Substraction of Number is:",$ans2;
	
		$ans3=$num1*$num2;
        echo "<br/>Multiplication of Number is:",$ans3;

		$ans4=$num1/$num2;
        echo "<br/>Division of Number is:",$ans4;
?>