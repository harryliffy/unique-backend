<?php
	session_start();
	require_once 'dbconfig.php';

if(isset($_POST['btn-save']))
	$productname= trim($_POST['productname']);

try {

    $sql = "INSERT INTO tbl_products (product_id, product_name )
 VALUES ('','$productname',  )";
   // use exec() because no results are returned
   $db_con->exec($sql);
   mkdir($productname);
    echo "added";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>