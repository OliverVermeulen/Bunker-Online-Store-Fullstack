<?php
// Initialize the session
session_start();

// Include config file
include("../Model/db.php");

// Check if the user is logged in, if yes execute function, if not redirect to sign in page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {

    $product_id = $_POST['product_id'];
    var_dump($_POST);
    $user_id = '1';
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $stmt = $link->prepare("INSERT INTO cart (user_id, product_id, product_name, product_price, product_image) VALUES (?, ?, ?, ?, ?)"); // Bind Variables to the prepare statement
    $stmt->bind_param("sssss", $user_id, $product_id, $product_name, $product_price, $product_image); // bind_param function

    $stmt->execute();

    header('Location: /');
    exit;
} else {
    header('Location: ../pages/login.html');
}
