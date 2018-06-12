<?php
	session_start();
	unset($_SESSION['vendor_session']);
	
	//if(session_destroy())
	//{
		header("Location: index");
	//}
?>