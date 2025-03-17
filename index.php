<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фортуна | Главная</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<body>
<header>
    <div class="container">
        <div class="logo">ФОРТУНА</div>
        <nav>
            <a href="index.php">Главная</a>
            <a href="каталог.html">Каталог</a>
            <a href="контакты.html">Контакты</a>
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="logout.php">Выход</a>
            <?php } else { ?>
                <a href="login.php">Вход</a>
                <a href="register.php">Регистрация</a>
            <?php } ?>
        </nav>
    </div>
</header>
    
    <section class="hero">
        <div class="container">
            <h1>Лучший ремонт торговой техники</h1>
            <p>Современные технологии, надёжность и оперативность - залог вашего успеха!</p>
            <a href="каталог.html" class="btn">Посмотреть каталог</a>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>О компании</h2>
            <p>Компания "Фортуна" специализируется на ремонте и техническом обслуживании торговой техники. Мы работаем с ведущими брендами и гарантируем высокое качество ремонта. Наша команда профессионалов всегда готова предложить индивидуальный подход и оперативное решение задач.</p>
            <img src="images/0.jpeg" alt="О компании">
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature">
                <img src="images/1.jpeg" alt="Технологии">
                <h2>Современные</h2>
                <p>Используем передовые технологии и ставим клиента на первое место.</p>
            </div>
            <div class="feature">
                <img src="images/4.jpeg" alt="Оперативность">
                <h2>Оперативные</h2>
                <p>Выполняем задачи быстро и в срок.</p>
            </div>
            <div class="feature">
                <img src="images/2.jpeg" alt="Надежность">
                <h2>Надёжные</h2>
                <p>Гарантируем надёжность после обслуживания.</p>
            </div>
            <div class="feature">
                <img src="images/3.jpeg" alt="Прозрачность">
                <h2>Открытые</h2>
                <p>Вся работа прозрачна, каждое действие зафиксировано.</p>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2025 Фортуна | Омск, ул. Семиреченская 95/1</p>
        </div>
    </footer>
</body>
</html>