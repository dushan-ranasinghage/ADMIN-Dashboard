<?php

$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"toyota");

$sql="DELETE from appointment where id='".$_GET['del_id']."'";





if(mysqli_query($con,$sql))

	header("Location:../webContent/serviceDetails.php");
		//header("refresh:1 ; url= ../sites/sd.php ");
	else
		echo "Not Update";

?>