<?php
$conn = new mysqli('localhost', 'root', '', 'signupforms',3307); // Ensure 'signupforms' matches the actual database name

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
