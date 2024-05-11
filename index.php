<?php
include __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark d-flex flex-column vh-100">
    <?php
    include __DIR__ . '/partials/template/header.php';
    ?>
    <main class="flex-grow-1">
        <div class="p-3 mt-5 container">
            <div class="row row-cols-4 gy-3">
                <?php
                foreach ($productions as $production) {
                ?>
                    <div class="col">
                        <div class="card text-center">
                            <h2><?php echo $production->title ?></h2>
                            <p>
                                <span>
                                    Lingua:
                                    <?php echo strtoupper($production->lang) ?>
                                </span>
                                <span>
                                    Voto:
                                    <?php echo $production->vote ?>
                                </span>
                            </p>
                            <p>
                                <span> Generi:</span>
                                <?php echo $production->genre->name ?>
                            </p>
                            <div>
                                <?php
                                if (isset($production->profits)) {
                                ?>
                                    <p>
                                        Durata:
                                        <?php
                                        echo $production->time;
                                        ?>
                                        min
                                    </p>
                                    <p>
                                        <?php
                                        echo 'Incassi: ' . $production->profits;
                                        ?>
                                    </p>
                                <?php
                                } else {
                                ?>
                                    <p>
                                        <?php
                                        echo 'Numero di stagioni: ' . $production->number_of_season;
                                        ?>
                                    </p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
    <?php
    include __DIR__ . '/partials/template/footer.php';
    ?>
</body>

</html>