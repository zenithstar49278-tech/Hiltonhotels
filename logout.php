<?php
// logout.php - Logout
include 'functions.php';
session_destroy();
redirectJS('index.php');
?>
