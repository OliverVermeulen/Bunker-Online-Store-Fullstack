<?php
// Initialize the session
session_start();

// Include config file
include("../Models/connect.php");

// Get user id
$user_id = $_SESSION["user_id"];

// Insert into orders table statement
$result = mysqli_query($link, "SELECT SUM(product_price) AS total FROM cart WHERE user_id =  '$user_id'");
$row = mysqli_fetch_assoc($result);
$sum = $row['total'];

// Checks if cart is empty if yes redirect to home page if not proceed to confirm order page
if ($sum == null) {
    header('Location: /');
} else {
// Insert into orders table statement
$stmt = $link->prepare("INSERT INTO orders (user_id, total_price) VALUES (?, ?)");
$stmt->bind_param("ss", $user_id, $sum);

// Execute statements
$stmt->execute();

// Close link
$link->close();

// Redirects user to confirm order page
header('Location: ../pages/confirm.html');
}