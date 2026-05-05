<?php

$lines = 6; 

echo "Количество строк: $lines <br>";
echo "Текст: ";

switch ($lines) {
    case 2:
        echo "еда.";
        break;
    case 4:
        echo "Плохо.";
        break;
    case 6:
        echo "Кажется, что вы где-то учились";
        break;
    case 8:
        echo "Вы среднестатистический человек.";
        break;
    case 10:
        echo "Нормально.";
        break;
    case 12:
        echo "Хорошо.";
        break;
    case 14:
        echo "Отлично.";
        break;
    default:
        echo "Введите число из списка (2, 4, 6, 8, 10, 12, 14).";
        break;
}
?>
