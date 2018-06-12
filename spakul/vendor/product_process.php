<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-login']))
// set up vendor details validate input data
$vendorid=$_SESSION['vendor_session'];
$productname=trim($_POST['productname']);
$price='200';
$itemcode='#3324ECH';
$avial='1';
$descr='desc desc desc desc desc';
$img='desc';	
$cat='desc';	
	//execute insert function
try {
	
 $sql = "INSERT INTO product (vendor_id, prod_name, price, itemcode, avial, description, img, category)
 VALUES ('$vendorid','$productname', '$price', '$itemcode' ,'$avial' ,'$descr' ,'$img' ,'$cat' )";
   // use exec() because no results are returned
   $db_con->exec($sql);
  
  echo "product created"; 
  $mask=$vendorid;
  
// create vendor folder
//mkdir("data/$mask");	

			
if($vendorid=!""){
	 echo "product created"; 			
				//echo "ok"; // log in
				//$_SESSION['vendor_session'] = $row['vendorid'];
			}
else{
	// Error encountered
	echo "product issues";
   }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>