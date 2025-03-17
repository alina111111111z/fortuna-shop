<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться с нами | Фортуна</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #1e1e1e;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(255, 152, 0, 0.3);
        }
        h1 {
            color: #ff9800;
        }
        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 6px;
        }
        .success {
            background: #2e7d32;
            color: #fff;
        }
        .error {
            background: #c62828;
            color: #fff;
        }
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
        a:hover {
            background: #e07b00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Связаться с нами</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);
            
            // Валидация email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='message error'>Ошибка: Некорректный email</div>";
                exit;
            }
            
            // Проверка заполненности полей
            if (empty($name) || empty($message)) {
                echo "<div class='message error'>Ошибка: Все поля должны быть заполнены</div>";
                exit;
            }
            
            // Настройка письма
            $to = "info@fortuna.ru";  // Замените на свой email
            $subject = "Новое сообщение с сайта Фортуна";
            $headers = "From: $email\r\n" .
                    "Reply-To: $email\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";
            
            $body = "Имя: $name\n" .
                    "Email: $email\n" .
                    "Сообщение:\n$message";
            
            // Отправка письма
            if (mail($to, $subject, $body, $headers)) {
                echo "<div class='message success'>Сообщение успешно отправлено!</div>";
            } else {
                echo "<div class='message error'>Ошибка при отправке сообщения.</div>";
            }
        } else {
            echo "<div class='message error'>Ошибка: Некорректный запрос.</div>";
        }
        ?>
        <a href="index.php">Вернуться на главную</a>
    </div>
</body>
</html>