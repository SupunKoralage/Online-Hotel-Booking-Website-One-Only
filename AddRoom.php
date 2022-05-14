<?php
$checkIn = $_POST["date1"];
$checkOut = $_POST["date2"];
$email = $_POST["txtEmail"];
$cardName = $_POST["nCard"];
$cardNo = $_POST["cNo"];
$expire = $_POST["exp"];

$con=mysqli_connect("localhost:3308","root","","hoteldb");
	 if(!$con)
	 {
	 die("cannot connect to DB server");
	 }
     $sql="INSERT INTO `room` (`Email`, `checkIn`, `checkOut`, `cardName`, `cardNo`, `expire`) VALUES ('".$email."', '".$checkIn."', '".$checkOut."', '".$cardName."', '".$cardNo."', '".$expire."');";

	 mysqli_query($con,$sql);
     mysqli_close($con); 
     header('location:Home.php');

?>
