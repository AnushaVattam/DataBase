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
		$id = $_POST['BookingFactID'];
		$travelid = $_POST['travel_ID'];
		$staffid = $_POST['StaffAID'];
		$custid = $_POST['CustID'];
		$calid = $_POST['CalID'];
		$outcomecode = $_POST['OutComeCode'];
		$statuscode = $_POST['StatusCode'];
		$levelcode = $_POST['LevelCode'];
		$serviceid = $_POST['ServiceID'];
		$bookingid = $_POST['BookingID'];
		$paymentid = $_POST['PaymentID'];
		$otherdetails = $_POST['otherDetails'];
	
		

		$sql="INSERT INTO Bookings(BookingFactID, travel_ID, StaffAID, CustID, CalID, OutComeCode, StatusCode, LevelCode, ServiceID, BookingID, PaymentID, otherDetails) 
		VALUES ('$id','$travelid ','$staffid ','$custid ' ,'$calid ','$outcomecode ','$statuscode' ,'$levelcode ','$serviceid','$bookingid ','$paymentid' ,
		'$otherdetails')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>