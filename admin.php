<?php
// admin/index.php - Admin dashboard
include '../db.php';
include '../functions.php';

if (!isAdmin()) {
    redirectJS('../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003b95; color: white; padding: 20px; text-align: center; }
        nav { margin: 20px; text-align: center; }
        nav a { margin: 0 10px; color: #003b95; text-decoration: none; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <nav>
        <a href="hotels.php">Manage Hotels</a>
        <a href="bookings.php">Manage Bookings</a>
        <a href="users.php">Manage Users</a>
    </nav>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
