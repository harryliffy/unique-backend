<?php

	require_once 'dbconfig.php';
	
	if ($_REQUEST['delete']) {
		
		$pid = $_REQUEST['delete'];
		$query = "DELETE FROM tbl_products WHERE product_id=:pid";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));
		
		if ($stmt) {
			echo "Product Deleted Successfully ...";
		}
		
	}