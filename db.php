<?php
include __DIR__ . '/partials/models/production.php';

$films = [];

// creo due istanze della classe Production
array_push($films, $x_man = new Production('X Man', 'en', '8'));
array_push($films, $acquaman = new Production('Acquaman', 'en', '6'));
array_push($films, $avengers = new Production('Avengers', 'en', '10'));
array_push($films, $cat_woman = new Production('Cat Woman', 'fr', '1'));
array_push($films, $batman = new Production('Batman', 'en', '5'));
array_push($films, $geeg_robot = new Production('Geeg Robot', 'it', '2'));
array_push($films, $spiderman = new Production('Spiderman', 'en', '7'));
