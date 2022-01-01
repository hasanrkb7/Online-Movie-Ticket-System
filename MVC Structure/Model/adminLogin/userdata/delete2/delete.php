<?php
$con = mysqli_connect("localhost","root","","online_booking_ticket");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $id = $_POST["id"];
$sql = "DELETE FROM movie WHERE mve_id ='$id'";
$con->query($sql);
 header("Location: \\cinemaworld/adminLogin/userdata/halldetail.php");
?>