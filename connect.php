<?php
session_start();

// Dummy email and password
$correct_email = "dharani@gmail.com";
$correct_password = "12345";

// Get posted values
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === $correct_email && $password === $correct_password) {
    $_SESSION['email'] = $email;
    header("Location: login.php?success=1");
    exit();
} else {
    header("Location: login.php?error=Invalid+email+or+password");
    exit();
}
?>
