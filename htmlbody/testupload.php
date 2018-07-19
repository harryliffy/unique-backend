<?php
	include('classes/core.php');
	$user=new user();

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory
$a=$_POST['event_title'];
$b=$_POST['event_location'];
$c=$_POST['event_date'];
$d=$_POST['event_description'];

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
   
  if(move_uploaded_file($tmp,$path)) 
  {
   $output=$user->addEvent($a, $b, $c, $d, $final_image);

      echo '<div class="alert alert-success">Uploaded successfully</div>';
      echo'<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add New</strong> Event</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body"><div id="err"></div>
                                    <p>'.$a.'&nbsp;'.$b.'&nbsp;'.$c.'&nbsp;'.$d.'&nbsp;'.$final_image.'</p>
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