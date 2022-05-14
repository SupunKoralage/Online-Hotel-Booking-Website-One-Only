<!doctype html>
<html xmlns="">
<head>
<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1"/> 
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
<title>Login</title>
	<link rel="stylesheet" type="text/css" href="LoginStyle.css" />
</head>

<body>
	<form id="Login" name="form1" method="post" action="Login.php">
	<header>
		<div class="main">
			<div class="logo">
				<img src="image/lg.png">
			</div>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li><a href="Gallery.html">Gallery</a></li>
				<li><a href="Rooms.html">Rooms</a></li>
				<li><a href="Table.html">Tables</a></li>
				<li><a href="Login.html">Login</a></li>
				<li><a href="Register.html">Register</a></li>
				<li><a href="VisitingPlace.html">Visiting Places</a></li>
				<li><a href="About.html">About</a></li>
				<li><a href="Contact.html">Contact</a></li>
	        </ul>
			<div class="loginBox">
				<img src="image/User.png" class="user">
				<h2>Log In Here</h2>
				
					<p>Email</p>
					<input type="text" name="txtuser" id="txtuser" required autofocus placeholder="Enter Email "><br><br>
					<p>password</p>
					<input type="password" name="txtpasswd" id="txtpasswd" required autofocus placeholder="Enter password "><br><br>
					
					<?php
		  if(isset($_POST["btnsubmit"]))
		  {
			  $uname = $_POST["txtuser"];
			  $password = $_POST["txtpasswd"];
			  $valid = false;
			  
			    $con = mysqli_connect("localhost:3308","root","","hoteldb");
			  
			      if(!$con)
				  
		      (
				  die("cannot connect to DB server");
			  )
				  
			  $sql = "SELECT * FROM `user` WHERE `Email`='".$uname."' and `password`='".$password."'";
			  
			  $result = mysqli_query($con,$sqli);
			  
			  if(mysqli_num_rows($result)>0)
			  {
				  $valid = true;
			  }
		  mysqli_close($con);
			  
			  if($valid)
			  {
				  $_SESSION["email"]=$uname;
				  header('Location:Home.html');
			  }
			  else
			  {
				echo"please enter correct email and password"; 
			  }

				  
		  }
		  
		  ?>
					
					<input type="submit" value="Log In" id="btnsubmit" onclick="Validate()">
					 <a href="Register.html">Register</a>
			
			</div>
		</div>
	</header>
		</form>
</body>
</html>
