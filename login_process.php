<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Проверяем, заполнены ли поля
    if (empty($username) || empty($password)) {
        die("<div class='message error'>Ошибка: Все поля должны быть заполнены</div>");
    }

    // Ищем пользователя в базе
    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Проверяем пароль
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header("Location: index.php");
        exit;
    } else {
        die("<div class='message error'>Ошибка: Неверный логин или пароль</div>");
    }
} else {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация | Фортуна</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #1e1e1e;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(255, 152, 0, 0.3);
        }
        h1 { color: #ff9800; }
        .message { padding: 15px; border-radius: 6px; margin-bottom: 10px; }
        .success { background: #2e7d32; color: #fff; }
        .error { background: #c62828; color: #fff; }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #ff9800;
            color: #121212;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        a:hover { background: #e07b00; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Результат авторизации</h1>
        <?php if (isset($error_message)): ?>
            <div class="message error"><?= $error_message; ?></div>
        <?php endif; ?>
        <a href="login.php">Попробовать снова</a>
    </div>
</body>
</html>
