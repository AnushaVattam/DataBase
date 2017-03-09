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
		$id = $_POST['BookingID'];
		$service = $_POST['ServiceID'];
		$startdate = $_POST['BookingStartDate'];
		$enddate = $_POST['BookingendDate'];
		

		$sql="INSERT INTO ServiceBookings(BookingID, ServiceID, BookingStartDate, BookingendDate) VALUES ('$id', '$service','$startdate','$enddate')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>