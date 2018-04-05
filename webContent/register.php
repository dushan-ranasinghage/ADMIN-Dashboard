<?php
    session_start();
 
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register-TOYOTA</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../assets/css/style.css">

  
</head>

<body background="../assets/images/bg.jpg">

  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <span></span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><a href="../index.php">LOGIN</a>
    <div class="tooltip">Click here</div>
  </div>

  <div class="form">
    <h2>Create an account</h2>
    <form action="../webBackEnd/register.php" method="post" >
      <input type="usrname" placeholder="Username" name="username" required=""/>
      <input type="username" placeholder="Toyota ID" name="toyota_id" required=""/>
      <input type="password" placeholder="Password" name="password" required=""/>
      <input type="password" placeholder="Confirm Password" name="confirmpassword"
      required=""/>
      <input type="submit" value="Register" name="submit">
      <?php  


      if (isset($_POST['submit'])) {
      echo $_SESSION['errcon'];

}
?>
    </form>
  </div>
  <div class="cta"></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  





</body>

</html>
