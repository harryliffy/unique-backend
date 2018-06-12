 <?php
 try{
	
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE vendor SET vendor_name='Doe' WHERE vendor_id='zainazeezinfo@zainazeez.com'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
	
		 
	 } 
	  catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
	
	?>