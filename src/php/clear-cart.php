<?php
// Initialize the session
session_start();

// Include config file
include("../Models/connect.php");

// Get user id
$user_id = $_SESSION["user_id"];

// Delete from cart statement
$stmt = $link->prepare("DELETE FROM cart WHERE user_id =  $user_id");

// Execute statement
$stmt->execute();

// Close link
$link->close();

// Takes user back to home page
header('Location: /');
