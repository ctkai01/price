<?php
$servername = "containers-us-west-46.railway.app";
$username = "root";
$password = "WlxBIeib8wIVmI0hbI6h";
$dbname = "railway";
$port = 5848;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM price";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
?>