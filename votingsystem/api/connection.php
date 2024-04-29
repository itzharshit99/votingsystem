<?php
$servername = "localhost"; // or your server IP
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "voting"; // Name of your MySQL database
$port=3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $database,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
