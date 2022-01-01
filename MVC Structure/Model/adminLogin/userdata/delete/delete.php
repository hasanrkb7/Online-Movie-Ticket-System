<?php
$con = mysqli_connect("localhost","root","","online_booking_ticket");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $hall_id = $_POST["hall_id"];
$sql = "DELETE FROM cinema_hall WHERE hall_id='$hall_id'";
$con->query($sql);
 header("Location: ../admindetail.php");
?>