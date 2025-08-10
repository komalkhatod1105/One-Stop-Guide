<?php
include 'dbconnect.php';
$result = $conn->query("SELECT * FROM trips ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Planned Trips</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #ececf1ff; }
        .container { background: #dfe8e6ff; padding: 20px; border-radius: 10px; max-width: 800px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #ccc9efff; }
        a { color: #092b4eff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Planned Trips</h1>
        <?php if ($result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Destination</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Notes</th>
                </tr>
                <?php while ($trip = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $trip['id'] ?></td>
                        <td><?= htmlspecialchars($trip['name']) ?></td>
                        <td><?= htmlspecialchars($trip['email']) ?></td>
                        <td><?= htmlspecialchars($trip['destination']) ?></td>
                        <td><?= htmlspecialchars($trip['start_date']) ?></td>
                        <td><?= htmlspecialchars($trip['end_date']) ?></td>
                        <td><?= nl2br(htmlspecialchars($trip['notes'])) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No trips found.</p>
        <?php endif; ?>
        <p><a href="trip.html">Plan a new trip</a></p>
    </div>
</body>
</html>
<?php
$conn->close();
?>




