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
	<i><title>BookingServiceLevel Form</title></b>
</head>
<body style="background-color:powderblue">
<div id="header">
<h1>BookingService LevelForm</h1>
</div>
<div id="nav">
<form action="level2.php" method ="post">
LevelCode: &nbsp<input type="text" name="LevelCode"><br>
LevelDesc: <input type="text" name="LevelDesc"><br>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>