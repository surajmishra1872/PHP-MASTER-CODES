<?php

//wap in PHP to convert Array of Object to Associative Array

$json = file_get_contents(__DIR__.'/student.json');
$student_Array = json_decode($json,true);
//print_r($student_Array);
$students = $student_Array['data'];




