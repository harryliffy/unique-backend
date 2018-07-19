<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		// $event_id="";

		$event_title = trim($_POST['event_title']);
		$event_location = trim($_POST['event_location']);
		$datettime= date("h:i:s a");
		$event_date = trim($_POST['event_date']);
		$event_date=$event_date." ".$datettime;
		/*$event_description = trim($_POST['event_description']);
		$event_image = trim($_POST['event_image']);*/
		$event_description = '';
		$event_image ='';
		
		try
		{	
		
			$sql = "INSERT INTO sch_events (event_id, event_name, event_location, event_date, event_description, event_image )
			VALUES ('', '$event_title', '$event_location', '$event_date','$event_description' ,'$event_image' )";
			  // use exec() because no results are returned
			  $db_con->exec($sql);
			  //echo $Fname;
			   echo "ok";
			   
			}
			catch(PDOException $e)
			{
			echo $sql . "<br>" . $e->getMessage();
			}
		
			if ( $event_title==!""){
				//echo $event_title."Event added successfully";
			}
	}

?>