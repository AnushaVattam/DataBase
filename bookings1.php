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
    background-image: url("travel1.jpg");
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
	<i><title>Bookings Form</title></b>
</head>
<body style="background-color:powderblue">
<div id="header">
<h1>Bookings </h1>
</div>
<div id="nav">
<form action="bookings2.php" method ="post">
  BookingFact ID: &nbsp<input type="text" name="BookingFactID"><br>
  Travel ID: &nbsp<input type="text" name="travel_ID"><br>
  staff ID: &nbsp<input type="text" name="StaffAID"><br>
  Customer ID: &nbsp<input type="text" name="CustID"><br>
  Calendar ID: &nbsp<input type="text" name="CalID"><br>
  OutComeCode: &nbsp<input type="text" name="OutComeCode"><br>
  StatusCode: &nbsp<input type="text" name="StatusCode"><br>
  LevelCode: &nbsp<input type="text" name="LevelCode"><br>
  Service ID: &nbsp<input type="text" name="ServiceID"><br>
  Booking ID: <input type="text" name="BookingID"><br>
  Payment ID: &nbsp<input type="text" name="PaymentID"><br>
  otherDetails: &nbsp<input type="text" name="otherDetails"><br>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>