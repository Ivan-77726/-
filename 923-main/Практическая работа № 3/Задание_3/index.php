<?php

$user = [
    "surname" => "Лаврецкая",
    "name" => "Елизавета",
    "patronymic" => "Викторовна",
    "login" => "elizaveta",
    "password" => "12345",
    "email" => "lovel@mail.ru"
];

echo "<h2>Вы успешно зарегистрированы на сайте</h2>";

echo "<b>{$user['surname']} {$user['name']} {$user['patronymic']}</b><br><br>";

echo "Логин: {$user['login']}<br><br>";
echo "E-mail: {$user['email']}<br><br>";
echo "Пароль: {$user['password']}";
?>
