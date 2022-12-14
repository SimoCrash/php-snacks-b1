<?php
    $arr_matches = [
        'first_match' => [
            'casa'=> [
            'nome' => 'Olimpia Milano',
            'punteggio' => '55'
            ],
            'ospite' => [
            'nome' => 'Cantu',
            'punteggio' => '60'
            ],
        ],
        'second_match' => [
            'casa'=> [
            'nome' => 'Trieste',
            'punteggio' => '66'
            ],
            'ospite' => [
            'nome' => 'Brindisi',
            'punteggio' => '83'
            ],
        ],
        'third_match' => [
            'casa'=> [
            'nome' => 'Universo Treviso',
            'punteggio' => '77'
            ],
            'ospite' => [
            'nome' => 'Verona',
            'punteggio' => '79'
            ],
        ],
        'fourth_match' => [
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
    <h1><?php echo array_keys($arr_matches) ?></h1>
</body>
</html>