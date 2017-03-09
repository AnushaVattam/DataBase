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
	<i><title>Customer Form</title></b>
</head>
<body style="background-color:powderblue">
<div id="header">
<h1>Customer Form</h1>
</div>
<div id="nav">
<form action="cust2.php" method ="post">
Customer ID: &nbsp<input type="text" name="CustID"><br>
First Name: <input type="text" name="FName"><br>
Last Name: <input type="text" name="LName"><br>
City: &nbsp<input type="text" name="City"><br>
State: <input type="text" name="State"><br>
Zip: <input type="text" name="Zip"><br>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>