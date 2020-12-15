<?php

require 'vendor/autoload.php';

use App\Entites\Film;
use App\Entites\Filmographie;
use App\Entites\Genre;
use Faker\Factory;

$faker = Factory::create("fr_FR");

$filmographie = new Filmographie(1,"Ma Filmographie");
// Tableau des genres
$tabGenres = [
    new Genre(1,"Action"),
    new Genre(2,"Comedie"),
    new Genre(3,"Science Fiction")
];

// Création de 10 films dans la filmographie
for($i=1; $i<=10;$i++) {
    $film = new Film(); // A COMPLETER !
    // Ajout de commentaire (entre 3 et 6) à chaque film
    for($j=1;$j<$faker->numberBetween(3,6);$j++) {
        $commentaire = new \App\Entites\Commentaire($j,$faker->name,$faker->numberBetween(0,10),$faker->paragraph);
        $film->ajouterCommentaire($commentaire);
    }
    // Ajout du film à la filmographie
    $filmographie->ajouterFilm($film);
}