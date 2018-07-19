<?php

	session_start();

	require_once 'dbconfig.php';



if(isset($_POST['btn-login']))
$userid="";
	$fullname= trim($_POST['Fname']);
$lname="";
	$email= trim($_POST['email']);

$phone= "";
$address="":
$dob="";
	$join=date("d/m/Y");
		$password= trim($_POST['password']);
	$lock=md5($password);
	
	$cat="";
	

try {



    $sql = "INSERT INTO user ( userid, fname, lname, email, phone, address, dob, joining_date, cat,user_password )

 VALUES ('$userid','$fullname','$lname', '$email', '$phone', '$address', '$dob', '$join', '$lock','$cat' )";

   // use exec() because no results are returned

   $db_con->exec($sql);

  // echo $Fname;

    echo "Account created successfully";

    }

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }



$conn = null;



?>