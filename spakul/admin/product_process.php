<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-login']))
	//trim inputs
	$prodname= trim($_POST['prodname']);
	$proddesc= trim($_POST['proddesc']);
		$prodcat= trim($_POST['prodcat']);
			$prodtag= trim($_POST['tag_2']);
				
				
				
				//temporarily store  input values in session for data call back after next button
	$_SESSION['product_name'] = $prodname;
	$_SESSION['product_desc'] = $proddesc;
	$_SESSION['product_category'] = $prodcat;
	$_SESSION['product_tag'] = $prodtag;

	
try {

	    echo "Registration successful";
	
	/*
	
			$stmt = $db_con->prepare("SELECT * FROM v_users WHERE email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
	/*		
if($row['email']==$user_email){
				echo "Account with this email already exist."; 
				//echo "ok"; // log in
				//$_SESSION['vendor_session'] = $row['vendorid'];
			}*/
			// if($prodname =""){
				 // echo "Registration successful";
					
	//$_SESSION['product_name'] = $prodname;
	$_SESSION['product_name'] = $prodname;
	$_SESSION['product_desc'] = $proddesc;
	$_SESSION['product_category'] = $prodcat;
	$_SESSION['product_tag'] = $prodtag;
			}

  /*  $sql = "INSERT INTO v_users (vendorid, username, email, password,joindate)
 VALUES ('$a','$username', '$email', '$lock','$join' )";
   // use exec() because no results are returned
   $db_con->exec($sql);
   //echo $Fname;*/
  //  echo "Registration successful";
	
	//
//	$_SESSION['product_name'] = $prodname;
    

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>