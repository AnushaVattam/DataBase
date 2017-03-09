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
		$id = $_POST['travel_ID'];
		$name = $_POST['Name'];
		$city = $_POST['City'];
		$state = $_POST['State'];
		$zip = $_POST['Zip'];

		$sql="INSERT INTO Travel_Agency(travel_ID, Name, City, State, Zip) VALUES ('$id', '$name','$city','$state','$zip')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>