<?php
$siteTitle = "Simple PHP Website";
$tagline = "A tiny dynamic site built with PHP";
$year = date('Y');
$today = date('l, F j, Y');
$features = [
    "Runs with plain PHP",
    "Uses server-side variables",
    "Responsive layout with simple CSS"
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="hero">
        <h1><?= htmlspecialchars($siteTitle) ?></h1>
        <p><?= htmlspecialchars($tagline) ?></p>
        <small>Today is <?= htmlspecialchars($today) ?></small>
    </header>

    <main class="container">
        <section>
            <h2>What this site demonstrates</h2>
            <ul>
                <?php foreach ($features as $feature): ?>
                    <li><?= htmlspecialchars($feature) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Get started</h2>
            <p>Drop this folder into a PHP-enabled server and open <code>index.php</code> in your browser.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?= htmlspecialchars($year) ?> <?= htmlspecialchars($siteTitle) ?></p>
    </footer>
</body>
</html>
