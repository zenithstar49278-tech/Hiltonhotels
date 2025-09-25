<?php
// db.php - Database connection file
$host = 'localhost'; // Assuming local host, change if needed
$dbname = 'dbzrevjekkmoed';
$user = 'ubpkik01jujna';
$pass = 'f0ahnf2qsque';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
