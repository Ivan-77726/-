<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 14 - Музыкальный список</title>
</head>
<body>

<?php

$albums = array(
    array('id_album' => '1','title' => 'The Dark Side of the Moon','date' => '1973','country' => 'Великобритания','id_team' => '2'),
    array('id_album' => '2','title' => 'Wish You Were Here','date' => '1975','country' => 'Великобритания','id_team' => '2'),
    array('id_album' => '3','title' => 'Greatest Hits','date' => '1999','country' => 'США','id_team' => '2'),
    array('id_album' => '4','title' => 'Abbey Road','date' => '1969','country' => 'Великобритания','id_team' => '3'),
    array('id_album' => '5','title' => 'A Hard Day\'s Night','date' => '1964','country' => 'Великобритания','id_team' => '3'),
    array('id_album' => '6','title' => 'Back in Black','date' => '1980','country' => 'США','id_team' => '4'),
    array('id_album' => '7','title' => 'Highway to Hell','date' => '1979','country' => 'Австралия','id_team' => '4'),
    array('id_album' => '8','title' => 'The Razors Edge','date' => '1990','country' => 'Австралия','id_team' => '4'),
    array('id_album' => '9','title' => 'Let There Be Rock','date' => '1977','country' => 'ФРГ','id_team' => '4'),
    array('id_album' => '10','title' => 'Rocks','date' => '1982','country' => 'Великобритания','id_team' => '1'),
    array('id_album' => '11','title' => 'Strange Days','date' => '1967','country' => 'США','id_team' => '0'),
    array('id_album' => '12','title' => 'L.A. Woman','date' => '1971','country' => 'США','id_team' => '0'),
    array('id_album' => '13','title' => 'Greatest Hits','date' => '1978','country' => 'США','id_team' => '3')
);

$tracks = array(
    array('id_track' => '1','name' => 'Back in the Saddle','id_album' => '10'),
    array('id_track' => '2','name' => 'Last Child','id_album' => '10'),
    array('id_track' => '10','name' => 'Come Together','id_album' => '4'),
    array('id_track' => '11','name' => 'Something','id_album' => '4'),
    array('id_track' => '25','name' => 'Wish You Were Here','id_album' => '2'),
    array('id_track' => '27','name' => 'Speak to Me','id_album' => '1'),
    array('id_track' => '30','name' => 'Time','id_album' => '1'),
    array('id_track' => '42','name' => 'Back in Black','id_album' => '6'),
    array('id_track' => '56','name' => 'When the Music\'s Over','id_album' => '11')

);

$id_album = isset($_GET['id']) ? $_GET['id'] : null;

if ($id_album) {
    $found = false;
    foreach ($albums as $album) {
        if ($album['id_album'] == $id_album) {
            echo "<h2>" . $album['title'] . " (" . $album['country'] . ")</h2><ul>";
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album['id_album']) {
                    echo "<li>" . $track['name'] . "</li>";
                }
            }
            echo "</ul>";
            $found = true;
            break;
        }
    }
    if (!$found) echo "Альбом с ID $id_album не найден.";
} else {
    echo "<h1>Полный список альбомов</h1><ol>";
    foreach ($albums as $album) {
        echo "<li><b>" . $album['title'] . " (" . $album['country'] . ")</b><ul>";
        foreach ($tracks as $track) {
            if ($track['id_album'] == $album['id_album']) {
                echo "<li>" . $track['name'] . "</li>";
            }
        }
        echo "</ul></li>";
    }
    echo "</ol>";
}
?>

</body>
</html>

