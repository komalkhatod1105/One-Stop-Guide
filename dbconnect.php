<?php
$host = "localhost";
$user = "root";
$password = "230184";
$database = "CityGuideDB";

$conn = @mysqli_connect($host, $user, $password, $database);
$db_error = null;

if (!$conn) {
    $db_error = mysqli_connect_error();
}

?>
