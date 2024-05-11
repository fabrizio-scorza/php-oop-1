<?php
require_once __DIR__ . '/partials/models/Genre.php';
require_once  __DIR__ . '/partials/models/Production.php';
require_once __DIR__ . '/partials/models/Film.php';
require_once  __DIR__ . '/partials/models/Serie.php';

$genres = [
    $avventura = new Genre('Avventura', 'trama veloce ricca di suspance e adrenalina'),
    $commedia = new Genre('Commedia', 'leggero divertente, ricco di battute'),
    $azione = new Genre('Azione', 'botte da orbi con poca trama')
];


$productions = [
    new Film('X Man', 'en', '8', $avventura, '150.000$', '75'),
    new Film('Acquaman', 'en', '6', $azione, '105.000$', '68'),
    new Film('Avengers', 'en', '10', $avventura, '250.000$', '90'),
    new Film('Cat Woman', 'fr', '1', $azione, '50.000$', '63'),
    new Serie('Batman', 'en', '5', $commedia, '6'),
    new Serie('Geeg Robot', 'it', '2', $azione, '1'),
    new Serie('Spiderman', 'en', '7', $commedia, '8'),
    new Serie('Ant-Man', 'en', '5', $avventura, '4')
];
