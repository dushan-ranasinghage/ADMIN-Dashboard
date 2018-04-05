<?php
    session_start();
 
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Forget Password-TOYOTA</title>
  
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
  <div class="toggle"><a href="../webContent/register.php" class="button">Forget Password</a>
    <div class="tooltip">Click here</div>
  </div>
  <div class="form">
    <h2>Login (ADMIN)</h2>
    <h4>Use following field to send password to your E-mail.</h4><br />
    <form action="../webBackEnd/forgetPassword.php" method="post" >
      <input type="email" placeholder="Your E-mail" name="email" required=""/>
      <input type="submit" value="Send E-mail" name="submit">

    </form>
  </div>


</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  






</body>

</html>
