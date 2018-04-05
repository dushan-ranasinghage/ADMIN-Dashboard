<?php
session_start(); // Starting Session 

include 'dbh.php';

if (isset($_POST['submit'])) {

$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$adminid=$_SESSION['id'];
$err1="";

if($password==$confirmpassword){

	

$sql = "UPDATE admin SET username = '$username',password = '$password' WHERE id=$adminid";
$result= $conn->query($sql);



if ($result === TRUE) {
	header("refresh:1 ; url= ../webContent/adminSettings.php ");
} else {
    echo "Error updating record: " . $conn->error;
}

}else{
	$err1 = "Doesn't match password";
	header("refresh:1 ; url= ../webContent/adminSettings.php ");
	$_SESSION['errc'] = $err1;
}

}

?>