<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Welcome to Page 2</h1>
        <p>This is a placeholder content for Page 2.</p>
        <button onclick="navigateWithDelay('../pages/page3.php')">Next Page</button>
    </div>
</body>
</html>
