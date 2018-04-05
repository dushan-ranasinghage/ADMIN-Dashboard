<?php
	//Connect with mysql
	$con = mysqli_connect("localhost","root","");
	//Select Database
			mysqli_select_db($con,"toyota");
	//Select Query
	$sql = "DELETE FROM user WHERE id=$_GET[id]";

	//Execute the query
	if(mysqli_query($con,$sql))
		header("refresh:1 ; url= ../sites/o.php ");
	else
		echo "Not Deleted";


?>