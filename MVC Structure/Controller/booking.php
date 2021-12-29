<?php
$con = mysqli_connect("localhost","root","","online_booking_ticket");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $name = $_POST["name"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
  $date = $_POST["date"];
    $time = $_POST["time"]; 
	 $amount = $_POST["amount"];
	  $cardnumber = $_POST["cardnumber"];
	  
	  $cardnumber = md5($cardnumber);
	 
	
 
 $sql = "INSERT INTO booking_details (name,email,phonenumber,date,time,amount,cardnumber) VALUES ('$name','$email','$phone','$date','$time','$amount','$cardnumber')";
 $con->query($sql);
 
 header("Location: lastPage/indexx.html");

 ?>