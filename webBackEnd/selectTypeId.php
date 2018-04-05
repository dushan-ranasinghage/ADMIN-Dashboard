<?php

$useremail=$_POST['useremail'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toyota";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT type_id FROM vehicle,user where email='$useremail' and user.id=vehicle.user_id";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {

 echo $row['type_id'];

		        }
    }
    
else {
    echo "0 results";
}

$conn->close();

?>
