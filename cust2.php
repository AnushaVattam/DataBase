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
		$id = $_POST['CustID'];
		$firstname = $_POST['FName'];
		$lastname = $_POST['LName'];
		$city = $_POST['City'];
		$state = $_POST['State'];
		$zip = $_POST['Zip'];

		$sql="INSERT INTO Customers(CustID, FName, LName, City, State, Zip) VALUES ('$id', '$firstname','$lastname','$city','$state','$zip')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>