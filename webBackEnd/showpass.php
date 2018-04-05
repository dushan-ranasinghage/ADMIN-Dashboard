<?php

include 'dbh.php';

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

$sql = "SELECT name,email,phone_no FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>". $row["phone_no"]. "</td></tr>";
    }
    
} else {
    echo "0 results";
}

$conn->close();


$type=$_POST['type'];
$fuel=$_POST['fuel'];
$year=$_POST['year'];
$price=$_POST['price'];
$color=$_POST['color'];
$quantity=$_POST['quantity'];
$class=$_POST['class'];
$dat=$_POST['dat'];

$sql ="INSERT INTO vehicle_type(name,fuel_type,model_year,price,color,quantity,vehicle_class,dat) VALUES('$type','$fuel','$year','$price','$color','$quantity','$class','$dat')";

$result= $conn->query($sql);

if(!$result){
   die('Error : ('. $conn->errno .') '. $conn->error);

}else{

header("refresh:1 ; url= ../sites/vd.php ");

}



?>