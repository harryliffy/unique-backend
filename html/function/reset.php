<?php
//session_start();
require('../classes/core.php');
$user= new User;

if(isset($_POST['btn-reset']))
{

 $resetUsername = $_POST['reset_user_email'];

$output=$user->resetPassword($resetUsername);
if($output)
 {
     echo 'ok';
    //$success = "success!";
 }
 else
 {
  echo "Email does not exist ";
 } 
}
?>