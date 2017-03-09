<?php

	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$db = 'mydb';
	$datecal = null;
	$daycal = null;
	$comments = null;

	$con=mysqli_connect("$host", "$user", "$pass", "$db");

	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	if(isset($_POST['submit']))
	{
		$id = $_POST['CalID'];
		$datecal = $_POST['Datecal'];
		$daycal = $_POST['Daycal'];
		$comments = $_POST['comments'];

		$sql="INSERT INTO Calendar(CalID, Datecal, Daycal, comments) VALUES ('$id','$datecal','$daycal','$comments')";

		if (mysqli_query($con,$sql))
		{
			echo "Values have been inserted successfully";
		}
	}
?>