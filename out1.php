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
	<i><title>Bookings Outcomes Form</title></b>
</head>
<body style="background-color:powderblue">
<div id="header">
<h1>Outcomes Form</h1>
</div>
<div id="nav">
<form action="out2.php" method ="post">
OutComeCode: &nbsp<input type="text" name="OutComeCode"><br>
OutComeDesc: <input type="text" name="OutcomeDesc"><br>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>