<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-login']))
	$firstname= trim($_POST['Fname']);
	$Lname= trim($_POST['Lname']);
	$phone= trim($_POST['phone']);
	$email= trim($_POST['email']);
	$password= trim($_POST['password']);
	$lock=md5($password);
	$join=date("d/m/Y");
try {

    $sql = "INSERT INTO tbl_users (user_id, last_name, phone, user_email,user_password,joining_date)
 VALUES ('','$Lname', '$phone', '$email', '$lock','$join' )";
   // use exec() because no results are returned
   $db_con->exec($sql);
   echo $Fname;
    echo "Account created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>