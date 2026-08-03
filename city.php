<?php
include 'dbconnect.php';

$city = isset($_GET['city']) ? trim($_GET['city']) : '';
$city_safe = $conn ? mysqli_real_escape_string($conn, $city) : $city;

$rows = [];
$cities = [];
$famousCities = [];
if ($conn) {
    $cityListSql = "SELECT DISTINCT city_name FROM city_data ORDER BY city_name";
    $cityListResult = mysqli_query($conn, $cityListSql);
    if ($cityListResult && mysqli_num_rows($cityListResult) > 0) {
        while ($cityRow = mysqli_fetch_assoc($cityListResult)) {
            $cities[] = $cityRow['city_name'];
        }
    }

    $famousSql = "SELECT city_name, COUNT(*) AS total_entries FROM city_data GROUP BY city_name ORDER BY total_entries DESC, city_name ASC LIMIT 5";
    $famousResult = mysqli_query($conn, $famousSql);
    if ($famousResult && mysqli_num_rows($famousResult) > 0) {
        while ($famousRow = mysqli_fetch_assoc($famousResult)) {
            $famousCities[] = $famousRow;
        }
    }

    if (!empty($city_safe) && in_array($city_safe, $cities, true)) {
        $sql = "SELECT * FROM city_data WHERE city_name = '$city_safe' ORDER BY place_type, place_name";
        $pageTitle = $city_safe;
        $showAllCities = false;
    } else {
        $sql = "SELECT * FROM city_data ORDER BY city_name, place_type, place_name";
        $pageTitle = 'All Cities';
        $showAllCities = true;
    }

    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    mysqli_close($conn);
}

$selectedCity = $showAllCities ? 'All Cities' : htmlspecialchars($pageTitle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $selectedCity; ?> - One Stop Guide</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="site-header">
    <nav class="site-nav">
      <a class="site-brand" href="index.html">One Stop Guide</a>
      <ul class="site-nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="city.php" class="active">Cities</a></li>
        <li><a href="README.md">About</a></li>
      </ul>
    </nav>
  </header>

  <main class="page-shell">
    <section class="city-hero">
      <div>
        <span class="city-pill">Database-powered city guide</span>
        <h1 class="hero-title"><?php echo $selectedCity; ?></h1>
        <p class="hero-text">Browse city entries from the database. Use the buttons below to jump to any city or view the full database list.</p>
      </div>
      <div class="city-summary">
        <h3>Quick overview</h3>
        <p>Total database entries: <?php echo count($rows); ?></p>
        <p>Use the city navigation to view selected city data or the full city list.</p>
        <?php if (!empty($db_error)) : ?>
          <p style="margin-top:0.5rem;color:#d9534f;">Database connection notice: <?php echo htmlspecialchars($db_error); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <?php if (!empty($famousCities)) : ?>
      <section class="famous-section">
        <div class="famous-header">
          <h2>Most Featured Cities</h2>
          <p>These cities have the most database listings and are currently the most recognized entries.</p>
        </div>
        <div class="famous-grid">
          <?php foreach ($famousCities as $cityItem) : ?>
            <article class="famous-card">
              <h3><?php echo htmlspecialchars($cityItem['city_name']); ?></h3>
              <p><?php echo (int) $cityItem['total_entries']; ?> entries</p>
              <a class="city-button" href="city.php?city=<?php echo urlencode($cityItem['city_name']); ?>">View city</a>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <section class="city-filter">
      <div class="city-buttons">
        <a class="city-button<?php echo $showAllCities ? ' active' : ''; ?>" href="city.php">All Cities</a>
        <?php foreach ($cities as $cityOption) : ?>
          <a class="city-button<?php echo (!$showAllCities && $cityOption === $pageTitle) ? ' active' : ''; ?>" href="city.php?city=<?php echo urlencode($cityOption); ?>"><?php echo htmlspecialchars($cityOption); ?></a>
        <?php endforeach; ?>
      </div>
    </section>

    <?php if (!empty($rows)) : ?>
      <?php if ($showAllCities) : ?>
        <?php $currentCity = ''; ?>
        <?php foreach ($rows as $row) : ?>
          <?php if ($row['city_name'] !== $currentCity) : ?>
            <?php if ($currentCity !== '') : ?>
              </section>
            <?php endif; ?>
            <?php $currentCity = $row['city_name']; ?>
            <section class="city-group">
              <h2><?php echo htmlspecialchars($currentCity); ?></h2>
          <?php endif; ?>
          <article class="city-card">
            <span class="city-type"><?php echo htmlspecialchars($row['place_type']); ?></span>
            <h3><?php echo htmlspecialchars($row['place_name']); ?></h3>
            <p class="desc"><?php echo htmlspecialchars($row['description']); ?></p>
          </article>
        <?php endforeach; ?>
        </section>
      <?php else : ?>
        <section class="city-grid">
          <?php foreach ($rows as $row) : ?>
            <article class="city-card">
              <span class="city-type"><?php echo htmlspecialchars($row['place_type']); ?></span>
              <h3><?php echo htmlspecialchars($row['place_name']); ?></h3>
              <p class="desc"><?php echo htmlspecialchars($row['description']); ?></p>
            </article>
          <?php endforeach; ?>
        </section>
      <?php endif; ?>
    <?php else : ?>
      <div class="notice">No data is available for <?php echo $selectedCity; ?> yet.<?php if (!empty($db_error)) echo ' The database connection is currently unavailable.'; ?></div>
    <?php endif; ?>
  </main>

  <footer class="page-footer">
    <p>© 2026 One Stop Guide • Designed with a shared city-style experience.</p>
  </footer>
</body>
</html>
