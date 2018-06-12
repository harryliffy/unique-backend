<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-login']))
// set up vendor details validate input data
$vendorid=$_SESSION['vendor_session'];
$vendorname=trim($_POST['vendorname']);
$tag=trim($_POST['tag']);
$bphone=trim($_POST['bphone']);
$vendorcat=trim($_POST['vendorcat']);
$enroldate="date";
$rating="0";
$desc=trim($_POST['desc']);
$cname=trim($_POST['cname']);
$cemail=trim($_POST['cemail']);
$cphone=trim($_POST['cphone']);
$caddress=trim($_POST['caddress']);
$cage=trim($_POST['cage']);

	
	//execute insert function
try {
	
 $sql = "INSERT INTO vendor (vendor_id, vendor_name, vendor_address,vendor_phone,vendor_cat_id,enrol_date,rating,descrip,c_person,c_email,c_phone,c_add,c_age)
 VALUES ('$vendorid','$vendorname', '$tag', '$bphone','$vendorcat','$enroldate','$rating','$desc','$cname','$cemail','$cphone','$caddress','$cage' )";
   // use exec() because no results are returned
   $db_con->exec($sql);
  
  echo "Profile created"; 
  $mask=$vendorid;
  
// create vendor folder
mkdir("data/$mask");	

			
if($vendorid=!""){
				
				//echo "ok"; // log in
				$_SESSION['vendor_session'] = $row['vendorid'];
			}
else{
	// Error encountered
	echo "Profile issues";
   }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>