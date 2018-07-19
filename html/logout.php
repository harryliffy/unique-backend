<?php
	//session_start();
	require_once('classes/core.php');

	$user=new user();
		$user->Logout();  //logout all sessions
	
?>