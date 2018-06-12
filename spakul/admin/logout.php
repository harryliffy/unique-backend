<?php
	session_start();
	unset($_SESSION['vendor_session']);
	unset($_SESSION['vendor_category']);
	
	//if(session_destroy())
	//{
		header("Location: index");
	//}
?>