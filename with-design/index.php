

<?php  

require_once('inc/class.crud.php');
//require_once('inc/dbconfig.php');

//$database= new Database();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Show Table</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <script type="text/javascript" src="js/bootstrap.js"></script>
 </head>

<?php

//function __autoload($class){
 //include_once($class.".php");
// }
 $obj=new oopCrud;

if(isset($_REQUEST['status'])){
 echo"Your Data Successfully Updated";
}

if(isset($_REQUEST['status_insert'])){
 echo"Your Data Successfully Inserted";
}

if(isset($_REQUEST['del_id'])){
if($obj->deleteData($_REQUEST['del_id'],"students")){

 echo"Your Data Successfully Deleted";
}
}
?>
<div class="container">
 <div class="btn-group">
 <button class="btn"><a href="show.php">Home</a></button>
 <button class="btn"><a href="insert.php">Insert</a></button>
</div>
 <h3 >All The Data</h3>
 <table width="750" border="1" class="">
 <tr class="success">
 <th scope="col">Name</th>
 <th scope="col">Email</th>
 <th scope="col">Mobile</th>
 <th scope="col">Address</th>
 <th scope="col">Action</th>
 </tr>
 <?php
 foreach($obj->showData("students") as $value){
 extract($value);
 echo <<<show
 <tr class="success">
 <td>$name</td>
 <td>$email</td>
 <td>$mobile</td>
 <td>$address</td>
 <td><button class="btn"><a href="update.php?id=$id">Edit</a>
</button>&nbsp;&nbsp;<button class="btn"><a href="show.php?del_id=$id">Delete</a></button></td>
 </tr>
show;
 }
 ?>
