<?php

	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$db = 'mydb';
    $enrolldate = null ;
	
	$con=mysqli_connect("$host", "$user", "$pass", "$db");

	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	if(isset($_POST['submit']))
	{
		$id = $_POST['StaffAID'];
		$firstname = $_POST['FName'];
		$lastname = $_POST['LName'];
		$email = $_POST['Email'];
		$phoneno = $_POST['PhoneNo'];
		$Enrolldate = $_POST['EnrollDate'];

		$sql="INSERT INTO Staff_Agency(StaffAID, FName, LName, Email, PhoneNo, EnrollDate) VALUES ('$id','$firstname','$lastname','$email','$phoneno','$enrolldate')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>