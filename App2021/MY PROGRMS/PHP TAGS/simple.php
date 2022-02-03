<?php

echo"This is working fine sir";
echo PHP_EOL;

$x=20;

function demo()
{ 
     echo "This is simple php file i am say you Hello From Function";
     echo PHP_EOL;
}

demo();

class test{

public function demo()
{
   echo "This line print from class function";
   echo PHP_EOL;
}

}
 $test=new test();
$test->demo();

echo "<h1>Hello from Heading tag</h1>";

//php closing is optional

?>

<h1>The value of x =<?php echo $x; ?></h1>
<h1>The value of x =<?=$x; ?></h1>