<?php
    // if (isset($_GET['name'])) {
	// 	$mail = $_GET['mail'];

	// 	$pos_at = strpos($mail, '@');

	// 	if ($pos_at && strpos($mail, '.', $pos_at)) {
	// 		$message = 'OK mail valida!';
	// 	} else {
	// 		$message = 'KO mail NON valida!';
	// 	}
	// } else {
	// 	$mail = '';
	// 	$message = 'Mail non inserita';
	// };

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (isset($_GET['name'])) {
        $name = $_GET['name']; 
        if (!preg_match('/^[a-z0-9_-]{3,15}$/', $name)) {
            echo $message = "Lo username non è valido";
        } else {
            echo $message = "Username valido";
        }
    } else {
        $name = '';
        $message = '';
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
        <input type="text" name="name" id="name">
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <button>Invia</button>
    </form>
    <div><?php
        $name
    ?></div>
</body>
</html>