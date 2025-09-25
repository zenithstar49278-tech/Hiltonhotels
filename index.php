<?php
// index.php - Homepage with search
include 'db.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton Clone - Homepage</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003b95; color: white; padding: 20px; text-align: center; position: relative; }
        nav { margin: 10px 0; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .search-bar { margin: 20px auto; width: 80%; max-width: 800px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .search-bar form { display: flex; justify-content: space-between; }
        .search-bar input { padding: 10px; flex: 1; margin-right: 10px; border: 1px solid #ccc; border-radius: 4px; }
        .search-bar button { padding: 10px 20px; background: #003b95; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .featured { display: flex; justify-content: space-around; flex-wrap: wrap; padding: 20px; }
        .hotel-card { background: white; border: 1px solid #ddd; border-radius: 8px; margin: 10px; padding: 10px; width: 300px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .hotel-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; }
        footer { background: #003b95; color: white; text-align: center; padding: 10px; width: 100%; }
        @media (max-width: 768px) { .search-bar form { flex-direction: column; } .search-bar input, .search-bar button { margin: 5px 0; } .hotel-card { width: 100%; } }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Hilton Clone</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <?php if (isLoggedIn()): ?>
                <a href="user-dashboard.php">Dashboard</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <div class="search-bar">
        <form action="hotels.php" method="GET">
            <input type="text" name="location" placeholder="Destination" required>
            <input type="date" name="check_in" required>
            <input type="date" name="check_out" required>
            <button type="submit">Search</button>
        </form>
    </div>
    <section class="featured">
        <h2>Featured Hotels</h2>
        <div class="hotel-card">
            <img src="https://www.hilton.com/im/en/NoHotel/15890592/shutterstock-1701349105.jpg" alt="Hilton Hotel 1">
            <h3>Hilton New York</h3>
            <p>Rating: 4.5</p>
        </div>
        <div class="hotel-card">
            <img src="https://www.hilton.com/im/en/CHIHHHF/15849936/exterior-dusk.jpg" alt="Hilton Hotel 2">
            <h3>Hilton Chicago</h3>
            <p>Rating: 4.7</p>
        </div>
    </section>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
