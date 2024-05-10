<?php
require_once __DIR__ . '/partials/models/production.php';
require_once __DIR__ . '/partials/models/genre.php';


$genres = [
    $avventura = new Genre('Avventura', 'trama veloce ricca di suspance e adrenalina'),
    $commedia = new Genre('Commedia', 'leggero divertente, ricco di battute'),
    $azione = new Genre('Azione', 'botte da orbi con poca trama')
];


$films = [
    new Production('X Man', 'en', '8', $avventura),
    new Production('Acquaman', 'en', '6', $azione),
    new Production('Avengers', 'en', '10', $avventura),
    new Production('Cat Woman', 'fr', '1', $azione),
    new Production('Batman', 'en', '5', $commedia),
    new Production('Geeg Robot', 'it', '2', $azione),
    new Production('Spiderman', 'en', '7', $commedia),
    new Production('Ant-Man', 'en', '5', $avventura)
];
