<?php
echo "<h3>Результат подключения файлов:</h3>";

for($i=1; $i<=4; $i++) {
    if (file_exists("$i.txt")) {
        include "$i.txt";
        echo " (файл $i.txt успешно подключен)<br />";
    } else {
        echo "Файл $i.txt не найден<br />";
    }
}
?>
