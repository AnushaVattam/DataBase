<?php

	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$db = 'mydb';

	$con=mysqli_connect("$host", "$user", "$pass", "$db");

	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	if(isset($_POST['submit']))
	{
		$id = $_POST['ServiceID'];
		$levelcode = $_POST['LevelCode'];
		$servicedetails = $_POST['ServiceDetails'];
	
		$sql="INSERT INTO Services(ServiceID, LevelCode, ServiceDetails) VALUES ('$id', '$levelcode','$servicedetails')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>