<?php
$con = mysqli_connect("localhost","root","","online_booking_ticket");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name = $_POST["name"];
$time = $_POST["time"];
$date = $_POST["date"];
$price = $_POST["price"];
$sql = "INSERT INTO movie (name,time,date,price) VALUES ('$name','$time','$date','$price')";
$con->query($sql);
 header("Location: \\cinemaworld/adminLogin/userdata/halldetail.php");
?>