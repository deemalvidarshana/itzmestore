<?php
$host = "localhost";
$user = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "redstore";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
