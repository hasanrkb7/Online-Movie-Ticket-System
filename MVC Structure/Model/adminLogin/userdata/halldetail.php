<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<link href="styles.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.w3-button {width:150px;}
</style>

</head>
<body>


 /* <div class="wrapper">
  
 <p><a href="add/index.html"<button class="w3-button w3-teal w3-border"><b>ADD</b></button></a></p> 
 <p><a href="delete/index.html" class="w3-button w3-red w3-border"><b>DELETE</b></a></p>
</div> */
 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_booking_ticket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT hall_id, hallname, moviename  FROM cinema_hall";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Hall ID</th><th>Hall Name</th><th>Movie Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["hall_id"]. "</td><td>" . $row["hallname"]. "</td><td>" . $row["moviename"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
  <div class="wrapper">
  
 <p><a href="add2/index.html"<button class="w3-button w3-teal w3-border"><b>ADD</b></button></a></p> 
 <p><a href="delete2/index.html" class="w3-button w3-red w3-border"><b>DELETE</b></a></p>
</div>
<?php
$sql2 = "SELECT * FROM movie";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Movie Name</th><th>Movie Time</th><th>Movie Date</th><th>Movie Price</th></tr>";
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
		echo "<tr><td>" . $row2["mve_id"]. "</td><td>" . $row2["name"]. "</td><td>" . $row2["time"]."</td><td>" . $row2["date"]."</td><td>" . $row2["price"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>