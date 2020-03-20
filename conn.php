<?php
$conn = new mysqli("localhost", "root","","votingsystem", "3308");

if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') '
            . $conn->connect_error);
}
?>
