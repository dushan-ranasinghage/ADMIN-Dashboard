<?php
session_start(); // Starting Session

include 'dbh.php';

    // If the values are posted, insert them into the database.
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $toyota_id = $_POST['toyota_id'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $err="";
        $default="default.png";
 if(!($password==$confirmpassword)){
    echo "loooooool";
    $err = "ERROR Matching password";
    $_SESSION['errcon']=$err;
}
else{
        
        if((preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$toyota_id)) AND ((substr($toyota_id, 0, 2) === 'AD') OR (substr($toyota_id, 0, 2) === 'SC'))){

        if(preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password)){

        $sql = "INSERT INTO admin(username,password,toyota_id,img) VALUES ('$username', '$password', '$toyota_id','$default')";
        $result= $conn->query($sql); 
        if($result){
            echo "dygh";
            header("LOCATION: ../webContent/register.php");
        }else{
            $fmsg ="User Registration Failed";
        }

         }

         else{
            echo "password not strong";
         }

         }
         else{
            echo "Not a Toyota ID";
         }

    }

   }
    ?>