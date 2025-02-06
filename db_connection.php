<?php
$servername = "localhost";
$username = "root"; // Default user in XAMPP
$password = ""; // Default password is empty
$dbname = "student_records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
