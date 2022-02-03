<?php

require __DIR__."/vendor/autoload.php";
require_once __DIR__."/dbconnect.php";

$sql="select * from emp";
$datas=mysqli_query($conn,$sql);


$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('SR. NO.')
    ->addHeader('ID')
    ->addHeader('NAME')
    ->addHeader('Email Name');
$i=1;
foreach($datas as $data)
{
    $table->addRow()
        ->addColumn($i)
        ->addColumn($data['id'])
        ->addColumn($data['name'])
        ->addColumn($data['email']);
        $i++;
}
$table->display();

?>
