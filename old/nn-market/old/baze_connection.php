<?php
$host = 'localhost'; // адрес сервера 
$user = 'u1030305_default'; // имя пользователя
$password = 'Baza83DomikMarsa39'; // пароль
$database = 'u1030305_baze'; // имя базы данных


	// подключаемся к серверу БД
	$connection = mysqli_connect($host, $user, $password, $database);

    if (!$connection) 
    {
    	echo 'Ошибка подключения к базе данных!';
    	$err_db_text = 'Ошибка подключения к базе данных!';
			messages_send($err_db_text, $group_token);
    	exit();
    }

    mysqli_query($connection, "SET NAMES 'utf8mb4'");
?>