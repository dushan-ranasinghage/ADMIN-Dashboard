<?php
 include 'dbh.php';

if(isset($_POST['email'])){

	$email=trim($_POST['email']);
	$code=md5(uniqid(true));

	if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){

		$checkmail=$db->query("");
		$count=mysqli_num_rows($checkmail);

		if($count==1){

			$inserted=$db->query("");

			$to = $email;
			$subject = "reset password link";
			$header = "By codexpress";
			$header = "Link of reset password 
			www.google.com"
			$sent=mail($to,$subject,$body,$header);

			if($inserted){
				echo("Check your mail & change password");
			}
		}
		else{
				echo("wrong email");
		}
	}
	else{
		echo("not valid");
	}
}









?>