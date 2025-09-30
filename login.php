<?php
session_start();

// Dummy credentials (replace with DB if needed)
$valid_user = "admin";
$valid_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION["username"] = $username;
        $_SESSION["balance"] = 5000; // Example balance
        $_SESSION["email"] = "user@example.com";
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid login!'); window.location.href='index.html';</script>";
    }
}
?>
