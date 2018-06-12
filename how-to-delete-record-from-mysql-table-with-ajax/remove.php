<?php 
include "config.php";

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM posts WHERE id=".$id;
mysqli_query($con,$query);

echo 1;