<?php
$servername = "localhost"; // Имя сервера (обычно localhost)
$username = "root"; // Имя пользователя базы данных
$password = "root"; // Пароль пользователя базы данных
$database = "theatrehub"; // Имя базы данных

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $database);

// Проверяем подключение на ошибки
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Выполняем операции с базой данных...

// Закрываем подключение
$conn->close();
?>
