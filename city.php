<?php
include 'dbconnect.php';

// Get the city from the query string; default to "Sikar" if not provided
$city = isset($_GET['city']) ? mysqli_real_escape_string($conn, $_GET['city']) : 'Sikar';
$sql = "SELECT * FROM city_data WHERE city_name = 'Sikar'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $city; ?> - City Guide</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    .card { border: 1px solid #ccc; margin: 10px; padding: 15px; border-radius: 8px; }
  </style>
</head>
<body>
  <h1>Welcome to <?php echo $city; ?></h1>

  <?php
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='card' style='border:1px solid #ccc; margin:10px; padding:15px; border-radius:8px;'>";
          echo "<h2>" . $row['place_name'] . "</h2>";
          echo "<p>Type: " . $row['place_type'] . "</p>";
          echo "<p>Description: " . $row['description'] . "</p>";
          echo "</div>";
      }
  } else {
      echo "<p>No data found for $city.</p>";
  }

  mysqli_close($conn);
  ?>
</body>
</html>
