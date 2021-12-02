<?php


    $name = $_GET['name'];
    var_dump(strlen($name));

    $email = $_GET['email'];
    var_dump(strpos($email, '@'), strpos($email, '.'));

    $age = $_GET['age'];
    var_dump(is_numeric($age));

    if(strlen($name) > 3 && is_numeric($age)) {
        if(strpos($email, '@') && strpos($email, '.')) {
            $risultato = 'accesso riuscito';
        } else {
            $risultato = 'accesso negato';
        }
    } else {
        $risultato = 'accesso negato';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>accedi</h1>

    <form action="./index.php" method="get">
        <label for="name">scrivi il nome</label>
        <input type="text" name="name" id="name">
        <label for="email">scrivi la mail</label>
        <input type="email" name="email" id="email">
        <label for="age">scrivi età</label>
        <input type="number" name="age" id="age">
        <input type="submit" value="get">
    </form>

    <h2> <?php echo $risultato ?> </h2>
</body>
</html>