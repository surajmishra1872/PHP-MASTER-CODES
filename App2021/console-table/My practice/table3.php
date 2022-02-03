<?php

require __DIR__."/vendor/autoload.php";
require_once __DIR__."/jsonencoder.php";

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('NAME')
    ->addHeader('FATHER NAME')
    ->addHeader('MOTHER NAME')
    ->addHeader('EMAIL')
    ->addHeader('AMOUNT');
$i=1;
foreach($datas as $data)
{
    $table->addRow()
        ->addColumn($data['name'])
        ->addColumn($data['FatherName'])
        ->addColumn($data['MotherName'])
        ->addColumn($data['email'])
        ->addColumn($data['Amount']);
        
        $i++;
}
$table->display();

?>
