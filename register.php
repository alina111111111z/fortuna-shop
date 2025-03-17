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
        .form-group {
            margin-bottom: 15px;
            text-align: left;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Регистрация</h1>
        <form action="register_process.php" method="POST">
            <div class="form-group">
                <label>Имя:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Пароль:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
