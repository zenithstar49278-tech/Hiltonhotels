<?php
// confirmation.php - Confirmation page
include 'db.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; text-align: center; }
        header { background: #003b95; color: white; padding: 20px; }
        .message { margin: 50px; font-size: 24px; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Confirmation</h1>
    </header>
    <div class="message">
        <p>Your booking has been confirmed! Thank you for choosing us.</p>
    </div>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
