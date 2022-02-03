<?php

// wap in php to show non-case-sensative constants

echo true;
echo PHP_EOL;
echo TRUE;
echo PHP_EOL;
echo TrUE;
echo PHP_EOL;
echo tRUE;
echo PHP_EOL;
echo trUe;

var_dump(true==TRUE);
var_dump(True==TRUE);
var_dump(True==trUe);

?>