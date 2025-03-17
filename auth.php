<?php
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['username'];
    header("Location: index.php");
} else {
    echo "Неверный email или пароль!";
}
?>
