<?php

require 'class/Movie.php';
require 'data/data.php';

$movie_first = new Movie('The Batman', 'Action', 'Matt Reeves', $plot1, $discount = 'less');
$movie_second = new Movie('The Dark Knight', 'Thriller', 'Christopher Nolan', $plot2);
$movie_third = new Movie('Batman Begins', 'Thriller', 'Christopher Nolan', $plot1, $discount = 'less');

var_dump($movie_first);
var_dump($movie_second);
var_dump($movie_third);

$movie_first->setPrice('less');
$movie_second->setPrice('full');
$movie_third->setPrice('less');

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>THE BATMAN</title>
</head>

<body>
   <div class="container">
      <div class="my-4">
         <h1> Titolo : <?php echo $movie_first->title ?></h1>
         <h3>Regista : <?php echo $movie_first->director ?></h3>
         <h3>Genere : <?php echo $movie_first->genre ?></h3>
         <h4>Plot : </h4>
         <div><?php echo $movie_first->plot ?></div>
         <div><?php echo $movie_first->getPrice() ?></div>
      </div>
      <div class="my-4">
         <h1> Titolo : <?php echo $movie_second->title ?></h1>
         <h3>Regista : <?php echo $movie_second->director ?></h3>
         <h3>Genere : <?php echo $movie_second->genre ?></h3>
         <h4>Plot : </h4>
         <div><?php echo $movie_second->plot ?></div>
         <div><?php echo $movie_second->getPrice() ?></div>
      </div>
      <div class="my-4">
         <h1> Titolo : <?php echo $movie_third->title ?></h1>
         <h3>Regista : <?php echo $movie_third->director ?></h3>
         <h3>Genere : <?php echo $movie_third->genre ?></h3>
         <h4>Plot : </h4>
         <div><?php echo $movie_third->plot ?></div>
         <div><?php echo $movie_third->getPrice() ?></div>
      </div>
   </div>
</body>

</html>