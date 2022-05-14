<?php
$FName =$_POST["name"];
$LName =$_POST["Lname"];
$Country =$_POST["country"];
$Cno =$_POST["txtContact"];
$Email =$_POST["email"];
$password =$_POST["pass"];
$Gender =$_POST["rdogender"];

     $con=mysqli_connect("localhost:3308","root","","hoteldb");
	 if(!$con)
	 {
	 die("cannot connect to DB server");
	 }
     $sql="INSERT INTO `user` (`Email`, `fullName`, `lastName`, `country`, `contactNumber`, `password`, `gender`) VALUES ('".$Email."', '".$FName."', '".$LName."', '".$Country."', '".$Cno."', '".$password."', '".$Gender."');";

	 mysqli_query($con,$sql);
     mysqli_close($con); 
     header('location:Login.php');

?>