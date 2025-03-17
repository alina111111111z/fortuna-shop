<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Фортуна</title>
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
        h1 {
            color: #ff9800;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            background: #2e2e2e;
            color: #fff;
        }
        button {
            background: #ff9800;
            color: #121212;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 6px;
            width: 100%;
        }
        button:hover {
            background: #e07b00;
        }
        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 6px;
        }
        .error {
            background: #c62828;
            color: #fff;
        }
        .success {
            background: #2e7d32;
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
        <h1>Вход в аккаунт</h1>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Логин" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Пароль" required>
            </div>
            <button type="submit">Войти</button>
        </form>
        <a href="register_process.php">Нет аккаунта? Зарегистрироваться</a>
    </div>
</body>
</html>
