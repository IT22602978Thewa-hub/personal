z<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'wild_trek');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>