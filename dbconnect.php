<?php
$servername = "localhost";
$username = "root";  // default XAMPP username
$password = "123456";      // default is empty
$dbname = "CityGuideDB"; // your database name

// Create connection
$conn = new mysqli('localhost', 'cityguide_user', '123456', 'CityGuideDB',3307);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
