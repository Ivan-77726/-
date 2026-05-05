<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа - Задание 10</title>
</head>
<body>

    <h1>Оптимизированный сценарий</h1>
    <hr>

    <?php
    // ПОДКЛЮЧАЕМ МАССИВЫ (Задание 10 выполнено!)
    include 'data.php';

    // 1. Вывод групп (просто текст)
    echo "<h2>Список групп:</h2>";
    foreach ($team as $band) {
        echo "Группа: {$band['name']} ({$band['country']}) <br>";
    }

    echo "<hr>";

    // 2. Вывод всех 56 треков (нумерованный список)
    echo "<h2>Список всех треков (всего 56):</h2>";
    echo "<ol>";
    foreach ($track as $item) {
        echo "<li>(id={$item['id_track']}) {$item['name']}</li>";
    }
    echo "</ol>";
    ?>

</body>
</html>

