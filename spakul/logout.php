<?php
	session_start();
	unset($_SESSION['user_session']);
	
	//if(session_destroy('user_session'))
	//{
		header("Location: index.php");
	//}
?>