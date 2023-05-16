<?php
    include __DIR__.'/Models/Movie.php';

    $movies = [
        new Movie('Pulp Fiction', '4.2', '1994', 'Quentin Tarantino', 'Thriller'),
        new Movie('Il Signore degli Anelli - Le Due Torri', '4.3', '2002', 'Peter Jackson','Avventura'),
        new Movie('Il Cavaliere Oscuro', '4.6', '2008', 'Christopher Nolan', 'Azione'),
        new Movie('Il Padrino', '4.5', '1972', 'Francis Ford Coppola', 'Drammatico')
    ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <?php for($i = 0; $i < count($movies); $i++){ ?>
        <ul>
            <li><?php echo $movies[$i]->title ?></li>
            <li><?php echo $movies[$i]->vote ?></li>
            <li><?php echo $movies[$i]->year ?></li>
            <li><?php echo $movies[$i]->direction ?></li>
            <li><?php echo $movies[$i]->type ?></li>
        </ul>
    <?php } ?> 
</body>
</html>