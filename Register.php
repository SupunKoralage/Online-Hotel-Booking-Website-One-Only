<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/> 
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
<title>Register</title>
	<link rel="stylesheet" type="text/css" href="RegisterStyle.css" />
	<script type="text/javascript">

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
function validatePassword()
{
	var pwd = document.getElementById("txtPassword").value;
	var cpwd = document.getElementById("txtConfirmPassword").value;
	if((pwd.length < 5)||( pwd != cpwd))
	{
		alert("Please enter a correct Password and enter the to Confirm password");
		return false;
	}
return true;
}
function Validate()
{
	if(validateEmail()&& validatePassword())
	{
		alert("Registration is completed");
	}
	else
	{
		event.preventDefault();
	}
}

	</script>
</head>

<body>
	<form id="form1" name="form1" method="post" action="Adduser.php">
	<header>
		<div class="main">
			<div class="logo">
				<img src="image/lg.png">
			</div>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li><a href="Gallery.html">Gallery</a></li>
				<li><a href="#">Rooms</a></li>
				<li><a href="#">Tables</a></li>
				<li><a href="Login.html">Login</a></li>
				<li><a href="Register.html">Register</a></li>
				<li><a href="#">Reserve</a></li>
				<li><a href="#">Visiting Places</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
	        </ul>
		
	
	<div class="register">
		<h2>Register Here</h2>
		<form method="post" id="register" action="">
			
			<label>First Name:</label><br>
			<input type="text" name="Fname" id="name" required autofocus placeholder="Enter Your First Name "><br><br>
		  <label>Last Name:</label><br>
			<input type="text" name="Lname" id="lname" required autofocus placeholder="Enter Your Last Name "><br><br>
		  <label>Country:</label>
			<label for="txtContact"></label><br>
			<input type="ctry" name="country" id="cname" required autofocus placeholder="Enter Your Country "><br><br>
		  <label>Contact Number:</label><br>
			<select id="ph">
				<option selected="selected">+94</option>
				<option>+55</option>
				<option>+1</option>
				<option>+86</option>
				<option>+53</option>
				<option>+33</option>
				<option>+49</option>
				<option>+91</option>
				<option>+39</option>
				<option>+81</option>
				<option>+960</option>
				<option>+64</option>
				<option>+850</option>
				<option>+92</option>
				<option>+7</option>
				<option>+63</option>
				<option>+27</option>
				<option>+82</option>
			    </select>
		  <input type="number" name="txtContact" id="txtContact" required autofocus placeholder="Enter Your Contact Number " maxlength="10"><br><br>
			
			<label>Email:</label><br>
			<input type="mail" name="email" id="txtEmail" required autofocus placeholder="Enter Your Email "><br><br>
			<label>Password:</label><br>
			<input type="password" name="pass" id="txtPassword" required autofocus placeholder="Enter Your Password "><br><br>
			<label>Re Enter Password:</label><br>
			<input type="password" name="pass" id="txtConfirmPassword" required autofocus placeholder="Renter Your Password "><br><br>
			<label>Gender:</label><br>
			<input type="radio" name="male" id="male"><span id="smale">&nbsp; Male</span>&nbsp;&nbsp;<br>
		  <input type="radio" name="Female" id="Female"><span id="sFemale">&nbsp; FeMale</span>&nbsp;&nbsp;<br><br>
			<input type="submit" value="Register" id="sub" onclick="Validate()" >
			<p class="message">Already Registered <a href="Login.html">Login</a></p>
			
	  </form>
		</div>
	</div>
		</header>
		</form>
</body>
</html>
