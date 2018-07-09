<?php
class UserClass
{
	private $db;
	
	// constructor
	function __construct($db)
	{
		$this->db = $db;
	}
	
	function userLogin($email, $pwd)
	{
		$result = $this->db->query("SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($pwd) . "'");
		
		if ($result->num_rows > 0)
		{
			// success
			@session_start();
			$row = $result->fetch_assoc();
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];
			return true;
		}
		else
		{
			// login fail
			return false;
		}

	}
	
	function userLogout()
	{
		session_destroy();
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		return;
	}
	
	function escapeString($str) {
		return $this->db->real_escape_string($str);
	}
}
?>