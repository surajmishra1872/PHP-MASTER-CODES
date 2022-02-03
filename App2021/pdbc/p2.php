<?php

//wap in php to connect to mysql database

define('HOST','localhost');
define('USER','root');
define('PASSWORD','123');
define('DBNAME','app2021');

try{	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	if($conn = mysqli_connect(HOST,USER,PASSWORD,DBNAME)){	
	print_r($conn);
	}else{
		throw new Exception();
	}
	
}catch(Exception $e){
	echo $e->getMessage();
	exit('DB Connection Failed '.mysqli_connect_error());
}




