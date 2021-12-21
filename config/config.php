<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6460292";
$password = "y2pVx9FZ2c";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>