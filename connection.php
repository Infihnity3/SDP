<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "votingsystem";
$port = "3308";

// Create connection
$conn = new mysqli($servername, $username, $password, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>