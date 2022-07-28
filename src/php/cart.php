<?php
// Initialize the session
session_start();

// Include config file
include("/MAMP/htdocs/Bunker-Online-Store-Fullstack/src/Model/db.php");

// Check if the user is logged in, if yes execute function, if not redirect to sign in page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {

    $product_id = $_POST['product_id'];
    var_dump($_POST);
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    // $product_id = 77;
    // $product_name = "Bape Jacket";
    // $product_price = 10000;

    $stmt = $link->prepare("INSERT INTO cart (product_id, product_name, product_price) VALUES (?, ?, ?)"); // Bind Variables to the prepare statement
    $stmt->bind_param("sss", $product_id, $product_name, $product_price); // bind_param function

    $stmt->execute();

    header('Location: /Bunker-Online-Store-Fullstack/');
    exit;
} else {
    header('Location: /Bunker-Online-Store-Fullstack/src/pages/login.html');
}
