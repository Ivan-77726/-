<?php
$album = array(
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

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>ID</th>
        <th>Альбом</th>
        <th>Дата выпуска</th>
        <th>Страна</th>
        <th>Идентификатор группы</th>
      </tr>";

foreach ($album as $row) {
    echo "<tr>";
    echo "<td>" . $row['id_album'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['country'] . "</td>";
    echo "<td>" . $row['id_team'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
