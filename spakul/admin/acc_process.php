<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-login']))
	$username= trim($_POST['username']);
	$email= trim($_POST['email']);
	$password= trim($_POST['password']);
	$lock=md5($password);
	$join=date("d/m/Y");
	$a=$username.$email;
try {
	
	
	$user_email = $email;
	
	
			$stmt = $db_con->prepare("SELECT * FROM v_users WHERE email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
if($row['email']==$user_email){
				echo "Account with this email already exist."; 
				//echo "ok"; // log in
				//$_SESSION['vendor_session'] = $row['vendorid'];
			}
else{
    $sql = "INSERT INTO v_users (vendorid, username, email, password,joindate)
 VALUES ('$a','$username', '$email', '$lock','$join' )";
   // use exec() because no results are returned
   $db_con->exec($sql);
   //echo $Fname;
    echo "Registration successful";
	
	
$_SESSION['vendor_session'] = $a;}
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>