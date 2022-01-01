<?php
$con = mysqli_connect("localhost","root","","online_booking_ticket");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$hall_id = $_POST["hall_id"];
$hallname = $_POST["hallname"];
$moviename = $_POST["moviename"];
/* $gender = $_POST["gender"];
$parent = $_POST["parent"]; */
$sql = "INSERT INTO cinema_hall (hall_id,hallname,moviename) VALUES ('$hall_id','$hallname','$moviename')";
$con->query($sql);
 header("Location: /refugee/adminLogin/donorFund/admindetail.php");
?>