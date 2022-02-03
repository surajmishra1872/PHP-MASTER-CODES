<?php
include_once __DIR__."/jsonencoder.php";

$json=file_get_contents('data.json');
$student=json_decode($json,true);
$datas=$student['data'];

?>
