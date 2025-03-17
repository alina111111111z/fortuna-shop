<?php

$host = "127.0.0.1:8889";  // Для MAMP попробуй также "127.0.0.1:8889"
$dbname = "fortuna"; // Проверь, что база данных точно называется "fortuna"
$username = "root"; 
$password = "root"; // MAMP по умолчанию использует "root" как пароль

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>


