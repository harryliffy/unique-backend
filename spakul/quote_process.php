<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-login']))
	// echo "quote requested";
	$refid= trim($_POST['refid']);
	$itemcode= trim($_POST['itemcode']);
	$type= trim($_POST['type']);
	$date= trim($_POST['date']);
	$user= trim($_POST['user']);
	$vendor= trim($_POST['vendor']);
	$uname= trim($_POST['uname']);
	//$lock=md5($password);
	//$join=date("d/m/Y");
try {

    $sql = "INSERT INTO quote (refid, itemcode, type, date,user,vendor,uname)
 VALUES ('$refid','$itemcode', '$type', '$date', '$user','$vendor','$uname' )";
   // use exec() because no results are returned
   $a=$db_con->exec($sql);
   //echo $Fname;
    echo "ok";
	if ($a=true){
	 echo "Quote request sent !!Your Reply in less than 12 hr..";	
	}
	else{
		echo 'not done';
		
	}
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>