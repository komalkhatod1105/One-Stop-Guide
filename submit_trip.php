<?php
include 'dbconnect.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$destination = $_POST['destination'] ?? '';
$start_date = $_POST['start_date'] ?? '';
$end_date = $_POST['end_date'] ?? '';
$notes = $_POST['notes'] ?? '';

if (!$name || !$email || !$destination || !$start_date || !$end_date) {
    die('Please fill all required fields.');
}

$stmt = $conn->prepare("INSERT INTO trips (name, email, destination, start_date, end_date, notes) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $destination, $start_date, $end_date, $notes);

if ($stmt->execute()) {
    $last_id = $conn->insert_id;
    $result = $conn->query("SELECT * FROM trips WHERE id = $last_id");
    $trip = $result->fetch_assoc();
} else {
    die("Error inserting trip: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trip Submitted</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; }
        .container { background: #fff; padding: 20px; border-radius: 10px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        p { line-height: 1.6; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Trip Successfully Planned!</h1>
        <h2>Your Trip Details:</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($trip['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($trip['email']) ?></p>
        <p><strong>Destination:</strong> <?= htmlspecialchars($trip['destination']) ?></p>
        <p><strong>Start Date:</strong> <?= htmlspecialchars($trip['start_date']) ?></p>
        <p><strong>End Date:</strong> <?= htmlspecialchars($trip['end_date']) ?></p>
        <p><strong>Notes:</strong> <?= nl2br(htmlspecialchars($trip['notes'])) ?></p>
        <p><a href="trip.html">Plan another trip</a> | <a href="all_trips.php">See all trips</a></p>
    </div>
</body>
</html>
