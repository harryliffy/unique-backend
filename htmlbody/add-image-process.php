<?php
	include('classes/core.php');
	$user=new user();

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'galleryUploads/'; // upload directory
$a=$_POST['imagedesc'];
$b=$_POST['imagecat'];
$c=$_POST['date'];
$by= $_SESSION['loggedName'];
//$d=$_POST['event_description'];

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
  $path = $path.strtolower($final_image);  // upload image uri
    $output=$user->addImage($a, $final_image, $b, $by);  // Save ddata to database
  if($output) 
  {
    move_uploaded_file($tmp,$path); //move file to storage folder
  
  // output success tab 
      echo '<div class="alert alert-success">Image Uploaded successfully</div>';
      echo'<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add New</strong> Event</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body"><div id="err"></div>
                                    <p>'.$a.'&nbsp;'.$b.'&nbsp;'.$c.'&nbsp;'.$by.'&nbsp;'.$final_image.'</p>
                                </div>
                                <div class="panel-body"> ';
   echo "<img width='200px' src='$path' />";
   echo'</div>
   <div class="panel-footer">
                                   <span><span class="fa fa-info-circle"></span> &nbsp;Do you want to add another event? &nbsp; <a href="gallery"><b>No </b></a> &nbsp; <a class="text-success " href="add-image"><b>Yes</b></a></span>

                                    
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