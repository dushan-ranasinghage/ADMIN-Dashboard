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
         move_uploaded_file($file_tmp,"../assets/images/offers/".$file_name);
         //header("refresh:1 ; url= ../sites/no.php ");
      }else{
         print_r($errors);
      }
   }

$offerD=$_POST['offerD'];
$descrip=$_POST['descrip'];
$adminid=$_SESSION['id'];
echo $_SESSION['id'];
$sql="INSERT INTO offer(offer_duration,description,admin_id) VALUES('$offerD','$descrip','$adminid')";

$result= $conn->query($sql);

if($result){
   header("LOCATION: ../webContent/newOffers.php");
}else{
   die('Error : ('. $conn->errno .') '. $conn->error);
}







?>  