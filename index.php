<?php

/* create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

include_once __DIR__ . '/Class.php';

$matrix = new Movie('Avatar', 'Fantascienza');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h2>
    <?= "Titolo film: {$matrix->getTitle()} - Lingua: {$matrix->getLanguage()} - Genere: {$matrix->getCategory()}"; ?>
  </h2>

  <h3>Dati ciclati col foreach</h3>

  <ul>
    <?php foreach ($matrix->joinFilms() as $film) : ?>

    <li>
      <?= $film ?>
    </li>

    <?php endforeach; ?>
  </ul>



</body>

</html>