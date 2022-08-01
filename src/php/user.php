<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header('Location: ../pages/user.html');
    exit;
} else {
    header('Location: ../pages/login.html');
}
?>