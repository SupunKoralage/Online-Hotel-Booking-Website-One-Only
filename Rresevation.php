<!doctype html>
<html>
	<form>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/> 
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
<title>Room Reserve</title>
	<link rel="stylesheet" type="text/css" href="RresevationStyle.css" />
	
	<script type="text/javascript">
function validateCheck_In()
{
	var day = document.getElementById("date1").value;
	if((day == "")||(day == null))
	{
		alert("Please enter date");
		return false;
	}
	return true;
}
function validateCheck_Out()
{
	var day = document.getElementById("date2").value;
	if((day == "")||(day == null))
	{
		alert("Please enter date");
		return false;
	}
	return true;
}
function validateEmail()
{
	var email = document.getElementById("txtEmail").value;
	var at = email.indexOf("@");
	var dt = email.lastIndexOf(".");
	var len = email.length;
	
	if((at < 2)||(dt-at < 2)||(len-dt < 2))
	{
		alert("Please enter a valid email address");
		return false;
	}
	return true;
}
		
function validateCard_Name()
{
	var name = document.getElementById("nCard").value;
	if((name == "")||(name == null))
	{
		alert("Please enter your card name");
		return false;
	}
	return true;
}
function validateCard_No()
{
	var cno = document.getElementById("cNo").value;
	if((isNaN(cno))&&(cno.length != 20))
	{
		alert("Please enter a valid card number");
		return false;
	}
	return true;
}
function validateExpire()
{
	var exp = document.getElementById("exp").value;
	if((isNaN(exp))||(exp.length != 4))
	{
		alert("Please enter a valid date/month");
		return false;
	}
	return true;
}
function Validate()
{
	if(validateCheck_In()&& validateCheck_Out()&& validateEmail()&&validateCard_Name() && validateCard_No()&& validateExpire())
	{
		alert("Reservation is completed");
	}
	else
	{
		event.preventDefault();
	}
}
	</script>
</head>

<body>
	<form id="form1" name="form1" method="post" action="AddRoom.php">
	<header>
		
			<div class="logo">
				<img src="image/lg.png">	
			</div>
		<div class="title">
			<h1><p>Rooms Reservation</p></h1>
		</div>
	</header>
					
	<div class="reserve">
		<h2>Reservation Form</h2>
		<form method="post" id="reserve" action="">
			
			
			
			<label>Check In:</label><br>
			<input type="date" name="date1" id="date1" ><br><br>
		  <label>Check Out:</label><br>
			<input type="date" name="date2" id="date2" ><br><br>
	
			
			<label>Email:</label><br>
			<input type="mail" name="email" id="txtEmail" required autofocus placeholder="Enter Your Email "><br><br>
			<h3>Payment Details</h3>
			<label>Name Of Card:</label><br>
			<input type="text" name="nCard" id="nCard" required autofocus placeholder="Enter Your Card Name "><br><br>
			<label>Card no:</label><br>
			<input type="text" name="cNo" id="cNo" required autofocus placeholder="Enter Your Card Number "><br><br>
			<label>Expire Month/Year :</label><br>
			<input type="text" name="exp" id="exp" required autofocus placeholder="Enter Expire Month & Year "><br><br>
		  
			<input type="submit" value="Conform" id="sub" onclick="Validate()" ><br><br>
			 <a href="Home.html">home</a>				
				
		</form>
			</div>	
	</form>
</body>
		</form>
</html>
