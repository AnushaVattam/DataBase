<html>
<head>
<style>
#header
{
	background-color:powderblue;
    color:black;
    text-align:left;
    padding:3px;
}
#nav
{
    background-color:powderblue;
    background-image: url("travel.jpg");
    background-width:300%
	background-height:50px;	
    background-repeat: no-repeat;
	background-position:center;
    color:black;
    clear:both;
    text-align:left;
	line-height:70px;
    padding:3px;		
}

#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:left;
    padding:3px;		
}
</style>
	<i><title>Staff Form</title></b>
</head>
<body style="background-color:powderblue">
<div id="header">
<h1>Staff Form</h1>
</div>
<div id="nav">
<form action="staff2.php" method ="post">
Staff ID: &nbsp<input type="text" name="StaffAID"><br>
First Name: <input type="text" name="FName"><br>
Last Name: <input type="text" name="LName"><br>
Email: &nbsp<input type="text" name="Email"><br>
PhoneNo: <input type="text" name="PhoneNo"><br>
EnrollDate: <input type="text" name="EnrollDate"><br>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>