<?php

// TO DO
    //complete update stement and function to update all fields and 
    // update when no new image is selected to repkace old image
    //
	

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'galleryUploads/'; // upload directory


if(isset($_FILES['image']))
{
 $img = $_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 $final_image = rand(1000,1000000).$img;
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.strtolower($final_image); 
  $a=$_POST['image_desc'];
$c=$_POST['image_cat'];
$d=$_POST['image_date'];
 $f=$_POST['currentid'];
$g=$_POST['currentimage'];
$g='galleryUploads/'.$g;
 include('classes/core.php');
	$user=new user();
 $output =$user->fetchEditImage($f, $a, $final_image, $c );
  if($output) 
  {
      move_uploaded_file($tmp,$path);
      if ($g==""){
    
    }
    else{
        unlink($g);
    }
   
      echo '<div class="alert alert-success">Uploaded successfully</div>';
      echo'<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add New</strong> Event</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body"><div id="err"></div>
                                    <p>'.$a.'&nbsp;'.$f.'&nbsp;'.$c.'&nbsp;'.$final_image.'</p>
                                </div>
                                <div class="panel-body"> ';
   echo "<img width='200px' src='$path' />";
   echo'</div>
   <div class="panel-footer">
                                   <span><span class="fa fa-info-circle"></span> &nbsp;Do you want to add another event? &nbsp; <a href="events"><b>No </b></a> &nbsp; <a class="text-success " href="test"><b>Yes</b></a></span>

                                    
                                </div>
   
   
   </div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
}

?>