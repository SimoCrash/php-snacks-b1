<?php
    $arr_matches = [
        [
            'casa'=> [
            'nome' => 'Olimpia Milano',
            'punteggio' => '55'
            ],
            'ospite' => [
            'nome' => 'Cantu',
            'punteggio' => '60'
            ],
        ],
        [
            'casa'=> [
            'nome' => 'Trieste',
            'punteggio' => '66'
            ],
            'ospite' => [
            'nome' => 'Brindisi',
            'punteggio' => '83'
            ],
        ],
        [
            'casa'=> [
            'nome' => 'Universo Treviso',
            'punteggio' => '77'
            ],
            'ospite' => [
            'nome' => 'Verona',
            'punteggio' => '79'
            ],
        ],
            [
            'casa'=> [
            'nome' => 'Virtus Bologna',
            'punteggio' => '77'
            ],
            'ospite' => [
            'nome' => 'Scafati',
            'punteggio' => '84'
            ],
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 1</title>
</head>
<body>
    <h1>Prima Giornata di Campionato LBA</h1>
    <h3><?php 
        for($i = 0; $i < count($arr_matches); $i++) {
            echo 
            '<div>' . $arr_matches[$i]['casa']['nome'] . ' - ' . $arr_matches[$i]['ospite']['nome'] . ' | ' . 
            $arr_matches[$i]['casa']['punteggio'] . ' - ' . $arr_matches[$i]['ospite']['punteggio'] . '</div>';
        }
    ?></h3>
</body>
</html>