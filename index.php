<?php 
require_once __DIR__ . './Movie.php';

$movies = [
    $movie_1 = new Movie("Avengers: Endgame", "Avengers: Endgame", 182, "Azione, Avventura, Fantasy, Fantascienza", 4.4, "ITA"),
    $movie_2 = new Movie("Avengers: Infinity War", "Avengers: Infinity War", 149, "Avventura, Azione, Fantasy", 4.5, "ITA")
];

var_dump($movie_1);
var_dump($movie_2);

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
    <h1>Movie Database</h1>
    <?php foreach($movies as $movie) { ?>
    <div>
        <h3> <?php echo $movie->titolo ?></h3>
        <ul>
            <li>Titolo Originale: <?php echo $movie->titoloOriginale ?></li>
            <li>Durata: <?php echo $movie->durata ?></li>
            <li>Genere: <?php echo $movie->genere ?></li>
            <li>Voto: <?php echo $movie->getVote() ?></li>
            <li>Lingua: <?php echo $movie->lingua ?></li>
        </ul>
    </div>
    <?php } ?>
</body>
</html>