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
		$id = $_POST['PaymentID'];
		$bookingid = $_POST['BookingID'];
		$paymentamount = $_POST['PaymentAmount'];
		$paymentdate = $_POST['PaymentDate'];
		
		

		$sql="INSERT INTO Payments(PaymentID,BookingID, PaymentAmount, PaymentDate) VALUES ('$id', '$bookingid','$paymentamount','$paymentdate')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>