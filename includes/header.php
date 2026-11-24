<?php
if (!isset($page_title)) {
    $page_title = 'Ereteti Dairy Sacco';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?> — Ereteti Dairy Sacco</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600;700&family=Source+Serif+4:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
<header class="site-header">
    <div class="container">
        <p class="site-name">Ereteti Dairy Sacco</p>
        <h1><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></h1>
        <p>Milk collected twice a day, on three routes out of Ngong.</p>
    </div>
</header>
<nav class="site-nav" aria-label="Main navigation">
    <ul class="container">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="routes.php">Our routes</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Join us</a></li>
        <li><a href="deliveries.php">Deliveries</a></li>
    </ul>
</nav>
