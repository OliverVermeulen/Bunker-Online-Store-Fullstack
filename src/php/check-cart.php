<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if yes then redirect to their cart page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header('Location: /cart.html');
    exit;
} else {
    header('Location: ../pages/login.html');
}
