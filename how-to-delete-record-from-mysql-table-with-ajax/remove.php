<?php 
include "../dbconfig.php";

$id = $_POST['id'];

// Delete record
try {
   
    $del = $db_con->prepare("DELETE FROM blogpost WHERE postid=:ref LIMIT 1");
    $del->execute(array(":ref"=>$id));
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db_con = null;







echo 1;