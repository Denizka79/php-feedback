<?php
define("DB_HOST", "localhost");
define("DB_USER", "denis");
define("DB_PASS", "123456");
define("DB_NAME", "php_dev");

//Создаем подключение к базе при помощи mysqli (можно также воспользоваться PDO вместо mysqli)

$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//Проверяем успешность подключения

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error); //die обрывает все соединения с базой и выводит сообщение об ошибке
}

?>