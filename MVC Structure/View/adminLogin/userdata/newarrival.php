<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}


</style>
</head>
<body>

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

$sql = "SELECT id, name, phonenumber, amount FROM booking_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>username</th><th>phonenumber</th><th>amount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["phonenumber"]. "</td><td>". $row["amount"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>