<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Проверка на пустые поля
    if (empty($username) || empty($email) || empty($password)) {
        die("<div class='message error'>Ошибка: Все поля должны быть заполнены</div>");
    }

    // Проверка корректности email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<div class='message error'>Ошибка: Некорректный email</div>");
    }

    // Проверяем, существует ли уже такой email в базе
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        die("<div class='message error'>Ошибка: Этот email уже зарегистрирован</div>");
    }

    // Хешируем пароль
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Записываем пользователя в БД
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashed_password]);

    // Перенаправление на страницу входа
    header("Location: login.php?success=1");
    exit;
} else {
    // Перенаправление, если зашли не через форму
    header("Location: register.php");
    exit;
}
?>


    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация | Фортуна</title>
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
            <h1>Регистрация</h1>
            <div class="message success">Аккаунт успешно создан!</div>
            <a href="login.php">Перейти к входу</a>
        </div>
    </body>
    </html>
    <?php
    