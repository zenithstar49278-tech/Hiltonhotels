<?php
// booking.php - Booking page
include 'db.php';
include 'functions.php';

if (!isLoggedIn()) {
    redirectJS('login.php');
}

if (!isset($_GET['room_id'])) {
    redirectJS('index.php');
}

$room_id = $_GET['room_id'];
$room = getRoom($pdo, $room_id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    bookRoom($pdo, $_SESSION['user_id'], $room_id, $check_in, $check_out);
    redirectJS('confirmation.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Room</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003b95; color: white; padding: 20px; text-align: center; }
        form { margin: 20px auto; width: 80%; max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        input { display: block; width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 10px; background: #003b95; color: white; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Book <?php echo $room['type']; ?></h1>
    </header>
    <form method="POST">
        <input type="date" name="check_in" required>
        <input type="date" name="check_out" required>
        <button type="submit">Confirm Booking</button>
    </form>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
