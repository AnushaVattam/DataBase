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
		$id = $_POST['LevelCode'];
		$name = $_POST['LevelDesc'];
		

		$sql="INSERT INTO BookingServiceLevel(LevelCode, LevelDesc) VALUES ('$id', '$name')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>