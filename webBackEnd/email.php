<?php
	//Connect with mysql
	$con = mysqli_connect("localhost","root","");
	//Select Database
			mysqli_select_db($con,"toyota");

//if(isset($_POST['submit'])){

$to=$_POST['email'];
$subject='Toyota order handling';
$name='Toyota';
$email='dushanrandikalive@gmail.com';
$message=$_POST['message'];

$message=<<<EMAIL
hi,We are from $name.
$massage;
my email is $email;
EMAIL;
$header = '$email';


mail($to,$subject,$message,$header);

header("LOCATION: ../webContent/orders.php");

//}

?>