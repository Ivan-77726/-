<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 12 - Список альбомов и треков</title>
</head>
<body>

    <h1>Музыкальная коллекция</h1>

    <?php
    $albums = array(
        array('id_album' => '1','title' => 'The Dark Side of the Moon','country' => 'Великобритания'),
        array('id_album' => '2','title' => 'Wish You Were Here','country' => 'Великобритания'),
        array('id_album' => '3','title' => 'Greatest Hits','country' => 'США'),
        array('id_album' => '4','title' => 'Abbey Road','country' => 'Великобритания'),
        array('id_album' => '5','title' => 'A Hard Day\'s Night','country' => 'Великобритания'),
        array('id_album' => '6','title' => 'Back in Black','country' => 'США'),
        array('id_album' => '7','title' => 'Highway to Hell','country' => 'Австралия'),
        array('id_album' => '8','title' => 'The Razors Edge','country' => 'Австралия'),
        array('id_album' => '9','title' => 'Let There Be Rock','country' => 'ФРГ'),
        array('id_album' => '10','title' => 'Rocks','country' => 'Великобритания'),
        array('id_album' => '11','title' => 'Strange Days','country' => 'США'),
        array('id_album' => '12','title' => 'L.A. Woman','country' => 'США'),
        array('id_album' => '13','title' => 'Greatest Hits','country' => 'США')
    );

    $tracks = array(
        array('id_track' => '1','name' => 'Back in the Saddle','id_album' => '10'),
        array('id_track' => '2','name' => 'Last Child','id_album' => '10'),
        array('id_track' => '3','name' => 'Rats in the Cellar','id_album' => '10'),
        array('id_track' => '4','name' => 'Combination','id_album' => '10'),
        array('id_track' => '5','name' => 'Sick As a Dog','id_album' => '10'),
        array('id_track' => '6','name' => 'Come Together','id_album' => '10'),
        array('id_track' => '7','name' => 'Get the Lead Out','id_album' => '10'),
        array('id_track' => '8','name' => 'Lick and a Promise','id_album' => '10'),
        array('id_track' => '9','name' => 'Home Tonight','id_album' => '10'),
        array('id_track' => '10','name' => 'Come Together','id_album' => '4'),
        array('id_track' => '11','name' => 'Something','id_album' => '4'),
        array('id_track' => '12','name' => 'Maxwell\'s Silver Hammer','id_album' => '4'),
        array('id_track' => '13','name' => 'Oh! Darling','id_album' => '4'),
        array('id_track' => '14','name' => 'Octopus\'s Garden','id_album' => '4'),
        array('id_track' => '15','name' => 'I Want You (She\'s So Heavy)','id_album' => '4'),
        array('id_track' => '16','name' => 'Here Comes The Sun','id_album' => '4'),
        array('id_track' => '17','name' => 'Because','id_album' => '4'),
        array('id_track' => '18','name' => 'You Never Give Me Your Money','id_album' => '4'),
        array('id_track' => '19','name' => 'Sun King','id_album' => '4'),
        array('id_track' => '20','name' => 'Mean Mr Mustard','id_album' => '4'),
        array('id_track' => '21','name' => 'Polythene Pam','id_album' => '4'),
        array('id_track' => '22','name' => 'Shine On You Crazy Diamond (Part One)','id_album' => '2'),
        array('id_track' => '23','name' => 'Welcome to the Machine','id_album' => '2'),
        array('id_track' => '24','name' => 'Have a Cigar','id_album' => '2'),
        array('id_track' => '25','name' => 'Wish You Were Here','id_album' => '2'),
        array('id_track' => '26','name' => 'Shine On You Crazy Diamond (Part Two)','id_album' => '2'),
        array('id_track' => '27','name' => 'Speak to Me','id_album' => '1'),
        array('id_track' => '28','name' => 'Breathe (In the Air)','id_album' => '1'),
        array('id_track' => '29','name' => 'On the Run','id_album' => '1'),
        array('id_track' => '30','name' => 'Time','id_album' => '1'),
        array('id_track' => '31','name' => 'The Great Gig in the Sky','id_album' => '1'),
        array('id_track' => '32','name' => 'Money','id_album' => '1'),
        array('id_track' => '33','name' => 'Us and Them','id_album' => '1'),
        array('id_track' => '34','name' => 'Any Colour You Like','id_album' => '1'),
        array('id_track' => '35','name' => 'Brain Damage','id_album' => '1'),
        array('id_track' => '36','name' => 'Eclipse','id_album' => '1'),
        array('id_track' => '37','name' => 'Hells Bells','id_album' => '6'),
        array('id_track' => '38','name' => 'Shoot to Thrill','id_album' => '6'),
        array('id_track' => '39','name' => 'What Do You Do for Money Honey','id_album' => '6'),
        array('id_track' => '40','name' => 'Given the Dog a Bone','id_album' => '6'),
        array('id_track' => '41','name' => 'Let Me Put My Love Into You','id_album' => '6'),
        array('id_track' => '42','name' => 'Back in Black','id_album' => '6'),
        array('id_track' => '43','name' => 'You Shook Me All Night Long','id_album' => '6'),
        array('id_track' => '44','name' => 'Have a Drink on Me','id_album' => '6'),
        array('id_track' => '45','name' => 'Shake a Leg','id_album' => '6'),
        array('id_track' => '46','name' => 'Rock and Roll Ain\'t Noise Pollution','id_album' => '6'),
        array('id_track' => '47','name' => 'Strange Days','id_album' => '0'),
        array('id_track' => '48','name' => 'You\'re Lost Little Girl','id_album' => '11'),
        array('id_track' => '49','name' => 'Love Me Two Times','id_album' => '11'),
        array('id_track' => '50','name' => 'Unhappy Girl','id_album' => '11'),
        array('id_track' => '51','name' => 'Horse Latitudes','id_album' => '11'),
        array('id_track' => '52','name' => 'Moonlight Drive','id_album' => '11'),
        array('id_track' => '53','name' => 'People Are Strange','id_album' => '11'),
        array('id_track' => '54','name' => 'My Eyes Have Seen You','id_album' => '11'),
        array('id_track' => '55','name' => 'I Can\'t See Your Face in My Mind','id_album' => '11'),
        array('id_track' => '56','name' => 'When the Music\'s Over','id_album' => '11')
    );

    echo "<ol>";

    foreach ($albums as $album) {
        echo "<li><strong>" . $album['title'] . " (" . $album['country'] . ")</strong>";
        
        echo "<ul>";
        
        foreach ($tracks as $track) {
            if ($track['id_album'] == $album['id_album']) {
                echo "<li>" . $track['name'] . "</li>";
            }
        }
        
        echo "</ul>";
        echo "</li>";
    }

    echo "</ol>"; 
    ?>

</body>
</html>


