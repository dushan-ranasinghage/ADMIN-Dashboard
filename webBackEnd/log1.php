<?php 
session_start(); // Starting Session 

if (isset($_POST['submit']))  
{    

// Define $username and $password 
$password=$_POST['password']; 
$toyota_id=$_POST['toyota_id']; 
$err=""; 

// Establishing Connection with Server by passing server_name, user_id and password as a parameter 
$connection = ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "root",  "")); 

// Selecting Database 
$db = mysqli_select_db( $connection, 'toyota'); 

// To protect mysql injection for Security purpose 
$password = stripslashes($password); 
$toyota_id = stripslashes($toyota_id); 
$password = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $password); 
$toyota_id = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $toyota_id); 

// SQL query to fetch information of registerd users and finds user match. 
$query = mysqli_query($GLOBALS["___mysqli_ston"], " SELECT * FROM `admin` WHERE `password` = '".$password."' AND  `toyota_id` = '".$toyota_id."' "); 
$rows = mysqli_num_rows($query); 
$data = mysqli_fetch_array($query); 
$type = $data['toyota_id'];   

//Holding sessions for after usage  
$_SESSION['username'] = $data['username']; 
$_SESSION['toyota_id'] = $data['toyota_id']; 
$_SESSION['id'] = $data['id']; 

if ($rows == 1)  
{ 
    if((preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$toyota_id)) AND (substr($toyota_id, 0, 2) === 'AD')){    
             echo "<script>location.assign('../webContent/dashboard.php')</script> "; 
        } 
    elseif ((preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$toyota_id)) AND (substr($toyota_id, 0, 2) === 'SC')){ 
            echo "<script>location.assign('../webContent/serviceDetails.php')</script> "; 
        } 
    else 
    { 
       echo "It seems as if you do not have an account.";   
    } 
} 
else  
{ 
 $err = "Incorrect Username or Password. Please try again."; 
 $_SESSION['$err']=$err; 
 echo "<script>location.assign('../index.php')</script> "; 

} 
((is_null($___mysqli_res = mysqli_close($connection))) ? false : $___mysqli_res); // Closing Connection 
}   
           

?> 