<?php

// dichiaro la classe Production con le sue variabili i metodi e il costruttore
class Production
{
    // variabili 
    public $title;
    public $lang;
    public $vote;

    // costruttore
    function __construct(string $_title, string $_lang, int $_vote)
    {
        $this->title = $_title;
        $this->lang = $_lang;
        $this->setVote($_vote);
    }

    // metodi
    public function setVote(int $vote): void
    {
        if (
            is_numeric($vote)
            && $vote >= 0 && $vote <= 10
        ) {
            $this->vote = intval($vote);
        } else {
            var_dump('valore inserito non valido');
        }
    }
}

// creo due istanze della classe Production
$x_man = new Production('X Man', 'en', '8');
$acquaman = new Production('Acquaman', 'en', '6');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>

</head>

<body>

</body>

</html>