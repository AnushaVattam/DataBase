<?php
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$db = 'mydb';
	$enrolldate = null;

	$con=mysqli_connect("$host", "$user", "$pass", "$db");

	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
<html>
<head>
<style>
#header
{
	background-color:powderblue;
    color:red;
    text-align:left;
    padding:50px;
}
#footer {
    background-color:powderblue;
    color:red;
    clear:both;
    text-align:left;
   padding:50px;		
}
#nav
{
    background-color:powderblue;
    background-image: url("travel.jpg");
    background-width:300%
	background-height:100px;	
    background-repeat: no-repeat;
	background-position:left;
    color:red;
    clear:both;
    text-align:left;
	line-height:150px;
    padding:50px;	
}
</style>
	<title>Staff Detail</title>
</head>
<body style="background-color:white">
<div id="header">
<h1>Staff Information</h1>
</div>
<div id="nav">
<?php
		$sql = "SELECT * FROM Staff_Agency";
		$myData1 = mysqli_query($con,$sql);
		echo "<table border=1 align=right>
		<tr>
		<th>StaffAID</th>
		<th>FName</th>
		<th>LName</th>
		<th>Email</th>
		<th>PhoneNo</th>
                <th>EnrollDate</th>
		</tr>";
		while($record = mysqli_fetch_array($myData1))
		{
			echo "<tr>";
			echo "<td>" . $record['StaffAID'] . "</td>";
			echo "<td>" . $record['FName'] . "</td>"; 
			echo "<td>" . $record['LName'] . "</td>"; 
			echo "<td>" . $record['Email'] . "</td>"; 
			echo "<td>" . $record['PhoneNo'] . "</td>"; 
			echo "<td>" . $record['EnrollDate'] . "</td>"; 
			echo "</tr>";
		}
		echo "</table>";
		if (!$sql) 
		{
			echo "Database query failed: " . mysqli_connect_error();
		}
		if(mysqli_query($con,$sql))
		{
			echo "Values retrieved successfully !";
		}
		mysqli_close($con);
?>
</div>
</body>
</html>
