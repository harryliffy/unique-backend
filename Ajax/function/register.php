<?php
//session_start();
require('../classes/core.php');
$user= new User;

if(isset($_POST['btn-register']))
{

 $fullname = $_POST['fullname'];
 $useremail = $_POST['useremail'];
 $password = $_POST['password'];
   $userrole = 'user';
$output=$user->Register($fullname,$useremail,$password,$userrole);
if($output)
 {
     echo 'ok';
    //$success = "success!";
 }
 else
 {
  echo "regustration failed! try again";
 } 
}
?>