<?php

include('classes/core.php');
$user=new user();
	
	if ($_REQUEST['delete']) {


$deleteId = $_REQUEST['delete'];

		 $output=$user->deleteEvent($deleteId);
		
		/* $pid = $_REQUEST['delete'];
		$query = "DELETE FROM tbl_products WHERE product_id=:pid";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':pid'=>$pid)); */
		
		if ($output) {
			echo "Product Deleted Successfully ...";
		}
		else{
			echo 'Not deleted';
		}
		
	}