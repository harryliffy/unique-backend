<?php
	session_start();
	unset($_SESSION['authentication_session']);
	
	if(session_destroy())
	{
		header("Location: index");
	}
?>