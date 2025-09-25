<?php
// forgot-password.php - Forgot password (simplified, no real email)
include 'db.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
        <h1>Forgot Password</h1>
    </header>
    <form>
        <input type="email" placeholder="Email" required>
        <button type="submit">Reset Password</button>
    </form>
    <footer>&copy; 2025 Hilton Clone</footer>
</body>
</html>
