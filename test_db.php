<?php
require_once "db.php";

if ($pdo) {
    echo "✅ Подключение к базе данных успешно!";
} else {
    echo "❌ Ошибка: подключение не установлено.";
}
?>
