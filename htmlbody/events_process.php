<?php
$a=$_POST['event_title'];
$b=$_POST['event_location'];
$c=$_POST['event_date'];
$d=$_POST['event_description'];
if(!empty($_POST['event_title']) || !empty($_POST['event_location']) || !empty($_FILES['file']['name'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
				$uploadedFile = $fileName;
				
			}
			include('classes/core.php');
	$user=new user();
	$output=$user->addEvent($a, $b, $c, $d, $uploadedFile);
	
        }
	}
	
	
}