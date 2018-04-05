<?php

//Connect with mysql
	//$con = mysqli_connect("localhost","root","");
	//Select Database
			//mysqli_select_db($con,"toyota");
	//Select Query
	//$sql = "UPDATE vehicle_order SET order_handled=0 WHERE id=$_GET[ID]";
	//Execute the query
	//if(mysqli_query($con,$sql))
	//	header("refresh:1 ; url= ../sites/o.php ");
	//else
	//	echo "Not Update";

$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"toyota");

$sql="UPDATE vehicle_order SET order_handled=0 WHERE id=$_GET[ID]";

if(mysqli_query($con,$sql))

	header("Location:../webContent/orders.php");
		//header("refresh:1 ; url= ../sites/sd.php ");
	else
		echo "Not Update";

?>