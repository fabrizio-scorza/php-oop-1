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

//creo un array con le istanze create
$films = [$x_man, $acquaman];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <main>
        <div class="p-3 mt-5 container">
            <div class="row row-cols-4">
                <?php
                foreach ($films as $film) {
                ?>
                    <div class="col">
                        <div class="card text-center">
                            <h2><?php echo $film->title ?></h2>
                            <p>
                                <span>
                                    <?php echo $film->lang ?>
                                </span>
                                <span>
                                    <?php echo $film->vote ?>
                                </span>
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>