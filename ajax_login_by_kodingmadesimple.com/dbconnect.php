<?php
// mysql connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'dbreg';

$db = new mysqli($hostname, $username, $password, $database);
if($db->connect_errno)
	die('Error ' . $this->db->connect_error);

include_once('UserClass.php');
$con = new UserClass($db);
?>