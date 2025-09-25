<?php
// hotels.php - Hotel listings
include 'db.php';
include 'functions.php';

$location = $_GET['location'] ?? '';
$check_in = $_GET['check_in'] ?? '';
$check_out = $_GET['check_out'] ?? '';

$hotels = getHotels($pdo, $location, $check_in, $check_out);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Listings</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003b95; color: white; padding: 20px; text-align: center; }
        .listings { display: flex; flex-wrap: wrap; justify-content: center; }
        .hotel-card { background: white; border: 1px solid #ddd; border-radius: 8px; margin: 10px; padding: 10px; width: 300px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .hotel-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; }
        .filters { margin: 20px; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
        @media (max-width: 768px) { .listings { flex-direction: column; align-items: center; } }
    </style>
</head>
<body>
    <header>
        <h1>Available Hotels</h1>
    </header>
    <div class="filters">
        <!-- Filters can be added here, but simplified -->
        <p>Filters: Price, Rating, Amenities</p>
    </div>
    <div class="listings">
        <?php foreach ($hotels as $hotel): ?>
            <div class="hotel-card">
                <img src="<?php echo $hotel['image'] ?? 'https://www.hilton.com/im/en/NoHotel/15890592/shutterstock-1701349105.jpg'; ?>" alt="<?php echo $hotel['name']; ?>">
                <h3><?php echo $hotel['name']; ?></h3>
                <p>Location: <?php echo $hotel['location']; ?></p>
                <p>Rating: <?php echo $hotel['rating']; ?></p>
                <a href="hotel-details.php?id=<?php echo $hotel['id']; ?>" style="text-decoration: none; color: #003b95;">View Details</a>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
