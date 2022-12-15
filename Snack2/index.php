<?php

    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $mail = $_GET['mail'] ?? ''; //?? = isset($_GET['mail']) ? $_GET['mail'] :
    $age = $_GET['age'] ?? '';


    $pos_at = strpos($mail, '@');
    $pos_dot = strpos($mail, '.', $pos_at);

                                                    //0 !== false         //0 !== false
    if(strlen($name) > 3 && is_numeric($age) && $pos_at !== false && $pos_dot !== false){ //$pos_at !== false significa che se il valore della @ è la prima posizione(quindi 0) darrebbe false, mentre cosi sostituisce lo 0 con true, cioe se è false(0) è true. cosi si riferisce alla posizione 0, mentre con != si riferiva al valore 0
        $message = 'accesso riuscito';
    } else {
        $message = 'accesso negato';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 2</title>
</head>
<body>
    <form action="" method="GET">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value=<?= $name ?>>
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail" value=<?= $mail ?>>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" value=<?= $age ?>>
        <button>Invia</button>
    </form>
    <div><?= $message ?></div>
</body>
</html>