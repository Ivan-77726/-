<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 11 - Работает!</title>
</head>
<body>

    <h1>Управляющие конструкции</h1>
    <h2>Конструкции</h2>

    <?php
    $content = array (
        array('id_personnel' => 1, 'surname' => 'Бородина', 'name' => 'Ксения', 'patronymic' => 'Алексеевна', 'post' => 'Преподаватель', 'category' => 'СЗД', 'level_edu' => 'Высшее', 'experience_total' => 21.3),
        array('id_personnel' => 2, 'surname' => 'Кошкова', 'name' => 'Вера', 'patronymic' => 'Николаевна', 'post' => 'Преподаватель', 'category' => 'СЗД', 'level_edu' => 'Высшее', 'experience_total' => 29.1),
        array('id_personnel' => 3, 'surname' => 'Рыбкина', 'name' => 'Ольга', 'patronymic' => 'Витальевна', 'post' => 'Преподаватель', 'category' => 'СЗД', 'level_edu' => 'Высшее', 'experience_total' => 21.3),		
        array('id_personnel' => 4, 'surname' => 'Маркова', 'name' => 'Елизавета', 'patronymic' => 'Андреевна', 'post' => 'Преподаватель', 'category' => 'Первая', 'level_edu' => 'Высшее профессиональное', 'experience_total' => 19.11),
        array('id_personnel' => 5, 'surname' => 'Ильчук', 'name' => 'Виталина', 'patronymic' => 'Георгиевна', 'post' => 'Преподаватель', 'category' => 'Высшая', 'level_edu' => 'Высшее', 'experience_total' => 36.1)				
    );

    $term = "surname"; 
    $value = "Маркова";

    $found = false; 
    foreach ($content as $item) {
        if ($item[$term] == $value) {
            echo "id: " . $item['id_personnel'] . "<br />";
            echo "Фамилия: " . $item['surname'] . "<br />";
            echo "Имя: " . $item['name'] . "<br />";
            echo "Отчество: " . $item['patronymic'] . "<br />";
            echo "Должность: " . $item['post'] . "<br />";
            echo "Категория: " . $item['category'] . "<br />";
            echo "Образование: " . $item['level_edu'] . "<br />";
            echo "Стаж работы в ОУ: " . $item['experience_total'];
            $found = true;
        }
    }

    if (!$found) {
        echo "Сотрудник с фамилией $value не найден.";
    }
    ?>

</body>
</html>

