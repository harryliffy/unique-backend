<?php
//session_start();
require('../classes/core.php');
$user= new User;

if(isset($_POST['btn-login']))
{

 $uname = $_POST['txt_uname_email'];
 //$umail = $_POST['txt_uname_email'];
 $upass = $_POST['txt_password'];
  



$output=$user->Login($uname,$upass);
if($output)
 {
    $success = "success!";
 }
 else
 {
  $error = "no login  Details !";
 } 
}
?>