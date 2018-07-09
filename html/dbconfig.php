<?php

$db_host = "server105.web-hosting.com";
$db_name = "harrpybz_ubsschool";
$db_user = "harrpybz_ubsschool";
$db_pass = "F1nalfantas7";
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>