<?php
session_start();

include 'dbh.php';

$category=$_POST['category'];
$tutorialTitle=$_POST['tutorialTitle'];
$tutorialLinks=$_POST['tutorialLinks'];


$sql="INSERT INTO video_tutorial(category,title,link) VALUES('$category','$tutorialTitle','$tutorialLinks')";


$result= $conn->query($sql);

if($result){
print 'Success! ID of last inserted record is : ' .$conn->insert_id .'<br />'; 
}else{
die('Error : ('. $conn->errno .') '. $conn->error);
}

header("LOCATION: ../webContent/videoTutorials.php");

?>