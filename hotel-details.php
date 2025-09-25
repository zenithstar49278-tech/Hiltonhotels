<?php
// hotel-details.php - Hotel details
include 'db.php';
include 'functions.php';

if (!isset($_GET['id'])) {
    redirectJS('index.php');
}

$hotel_id = $_GET['id'];
$rooms = getRooms($pdo, $hotel_id);

// Fetch hotel details
$stmt = $pdo->prepare("SELECT * FROM hotels WHERE id = :id");
$stmt->bindParam(':id', $hotel_id);
$stmt->execute();
$hotel = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hotel['name']; ?> Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003b95; color: white; padding: 20px; text-align: center; }
        .details { margin: 20px; }
        .room-list { display: flex; flex-wrap: wrap; }
        .room-card { background: white; border: 1px solid #ddd; border-radius: 8px; margin: 10px; padding: 10px; width: 300px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .room-card img { width: 100%; height: 150px; object-fit: cover; border-radius: 8px; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $hotel['name']; ?></h1>
    </header>
    <div class="details">
        <p><?php echo $hotel['description']; ?></p>
        <p>Rating: <?php echo $hotel['rating']; ?></p>
    </div>
    <div class="room-list">
        <h2>Available Rooms</h2>
        <?php foreach ($rooms as $room): ?>
            <div class="room-card">
                <img src="<?php echo $room['image'] ?? 'https://www.hilton.com/im/en/CHIHHHF/15849936/exterior-dusk.jpg'; ?>" alt="<?php echo $room['type']; ?>">
                <h3><?php echo $room['type']; ?></h3>
                <p>Price: $<?php echo $room['price']; ?></p>
                <p><?php echo $room['description']; ?></p>
                <a href="booking.php?room_id=<?php echo $room['id']; ?>" style="text-decoration: none; color: #003b95;">Book Now</a>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
