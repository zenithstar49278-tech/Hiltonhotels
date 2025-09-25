<?php
// user-dashboard.php - User dashboard
include 'db.php';
include 'functions.php';

if (!isLoggedIn()) {
    redirectJS('login.php');
}

// Fetch user bookings
$stmt = $pdo->prepare("SELECT b.*, r.type, h.name FROM bookings b JOIN rooms r ON b.room_id = r.id JOIN hotels h ON r.hotel_id = h.id WHERE b.user_id = :user_id");
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003b95; color: white; padding: 20px; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #003b95; color: white; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Your Bookings</h1>
    </header>
    <table>
        <tr><th>Hotel</th><th>Room</th><th>Check-in</th><th>Check-out</th><th>Status</th></tr>
        <?php foreach ($bookings as $booking): ?>
            <tr>
                <td><?php echo $booking['name']; ?></td>
                <td><?php echo $booking['type']; ?></td>
                <td><?php echo $booking['check_in']; ?></td>
                <td><?php echo $booking['check_out']; ?></td>
                <td><?php echo $booking['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
