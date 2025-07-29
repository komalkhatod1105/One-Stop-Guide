<?php
$host = "localhost";
$user = "root";
$password = "Tarunkha@2007"; // Default XAMPP password is blank
$database = "CityGuideDB";

// Establish connection
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully"; // Optional: you can comment/uncomment this for testing
?>
