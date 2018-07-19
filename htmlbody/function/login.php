<?php
//session_start();
require('../classes/core.php');
$user= new User;

if(isset($_POST['btn-login']))
{

 $uname = $_POST['user_email'];
 //$umail = $_POST['txt_uname_email'];
 $upass = $_POST['password'];
  
$output=$user->Login($uname,$upass);
if($output)
 {
     echo 'ok';
    //$success = "success!";
 }
 else
 {
  echo "no login  Details !";
 } 
}
?>