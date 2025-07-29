<?php
$host = "localhost";
$user = "root";
$password = "230184"; // Default XAMPP password is blank
$database = "CityGuideDB";

// Establish connection
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
