<?php
session_start(); // Starting Session 

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "toyota");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
  
    // Get text
    //$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "../assets/images/avatars/".basename($image);
   
    $sd = $_SESSION['id'];
    

    $sql = "UPDATE admin SET img='$image' WHERE id=$sd" ;
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      header("refresh:1 ; url= ../webContent/serviceSettings.php ");
    }else{
      $msg = "Failed to upload image";
    }
  }
 
?> 