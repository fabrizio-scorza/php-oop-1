<?php
include __DIR__ . '/partials/models/production.php';
include __DIR__ . '/partials/models/genre.php';

$films = [];
$genres = [];

array_push($genres, $avventura = new Genre('Avventura', 'trama veloce ricca di suspance e adrenalina'));
array_push($genres, $commedia = new Genre('Commedia', 'leggero divertente, ricco di battute'));
array_push($genres, $azione = new Genre('Azione', 'botte da orbi con poca trama'));

// creo due istanze della classe Production
array_push($films, $x_man = new Production('X Man', 'en', '8', $avventura));
array_push($films, $acquaman = new Production('Acquaman', 'en', '6', $azione));
array_push($films, $avengers = new Production('Avengers', 'en', '10', $avventura));
array_push($films, $cat_woman = new Production('Cat Woman', 'fr', '1', $azione));
array_push($films, $batman = new Production('Batman', 'en', '5', $commedia));
array_push($films, $geeg_robot = new Production('Geeg Robot', 'it', '2', $azione));
array_push($films, $spiderman = new Production('Spiderman', 'en', '7', $commedia));
