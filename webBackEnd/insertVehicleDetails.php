<?php

session_start(); // Starting Session 

include 'dbh.php';




   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $temp=explode('.',$_FILES['file']['name']);
	  $file_ext=end($temp);
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../assets/images/cars/".$file_name);
         // header("refresh:1 ; url= ../sites/vd.php ");
      }else{
         print_r($errors);
      }
   }



$type=$_POST['type'];
$fuel=$_POST['fuel'];
$year=$_POST['year'];
$price=$_POST['price'];
$color=$_POST['color'];
$quantity=$_POST['quantity'];
$class=$_POST['class'];
$dat=$_POST['dat'];

$sql ="INSERT INTO vehicle_type(namee,fuel_type,model_year,price,color,quantity,vehicle_class,dat,image) VALUES('$type','$fuel','$year','$price','$color','$quantity','$class','$dat','$file_name')";

$result= $conn->query($sql);

if(!$result){
   die('Error : ('. $conn->errno .') '. $conn->error);

}else{

header("refresh:1 ; url= ../webContent/vehicleDetails.php ");

}

// header("refresh:1 ; url= ../sites/vd.php ");

?>