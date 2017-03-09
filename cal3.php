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
	background-height:70px;	
    background-repeat: no-repeat;
	background-position:left;
    color:red;
    clear:both;
    text-align:left;
	line-height:100px;
    padding:50px;	
}
</style>
	<title>Calendar Detail</title>
</head>
<body style="background-color:white">
<div id="header">
<h1>Calendar Information</h1>
</div>
<div id="nav">
<?php
		$sql = "SELECT * FROM Calendar";
		$myData = mysqli_query($con,$sql);
		echo "<table border=1 align=center>
		<tr>
		<th>CalID</th>
		<th>Datecal</th>
		<th>Daycal</th>
		<th>comments</th>
		</tr>";
		while($record = mysqli_fetch_array($myData))
		{
			echo "<tr>";
			echo "<td>" . $record['CalID'] . "</td>";
			echo "<td>" . $record['Datecal'] . "</td>"; 
			echo "<td>" . $record['Daycal'] . "</td>"; 
			echo "<td>" . $record['comments'] . "</td>";  
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
