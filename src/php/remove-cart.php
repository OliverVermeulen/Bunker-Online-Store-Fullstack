<?php
// Initialize the session
session_start();

// Include config file
include("../Models/connect.php");

// Get cart_id from form
$cart_id = $_POST["cart_id"];

// SQL statement
$sql = "DELETE FROM cart WHERE cart_id = $cart_id";

// Prepared statement
$stmt = mysqli_prepare($link, $sql);

// Execute prepared statement 
$stmt->execute();

// Redirects user to cart page
header('Location: ../pages/cart.html');
