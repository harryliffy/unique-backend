<?php
@session_start();
include_once('dbconnect.php');
$con->userLogout();
header('Location: index.php');
?>