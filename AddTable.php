<?php
$date = $_POST["date1"];
$email = $_POST["txtEmail"];
$cardName = $_POST["nCard"];
$cardNo = $_POST["cNo"];
$expire = $_POST["exp"];

$con=mysqli_connect("localhost:3308","root","","hoteldb");
	 if(!$con)
	 {
	 die("cannot connect to DB server");
	 }
     $sql="INSERT INTO `rtable` (`Email`, `checkIn`, `cardName`, `cardNo`, `expire`) VALUES ('".$email."', '".$date."', '".$cardName."', '".$cardNo."', '".$expire."');";

	 mysqli_query($con,$sql);
     mysqli_close($con); 
     header('location:Home.php');

?>
