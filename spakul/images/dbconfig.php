<?php


	$db_host = "server105.web-hosting.com";
	$db_name = "harrpybz_spakul";
	$db_user = "harrpybz_spakul";
	$db_pass = "(0)(0)sAreVery%al";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>