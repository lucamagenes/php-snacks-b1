<?php

$guest_list = [
    'mario',
    'luigi',
    'luca',
    'paolo',
];

var_dump($_GET);
$name = $_GET['name'];
var_dump($name);

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

    <?php if(in_array($name, $guest_list)) { ?>
            <h1>
                <?php echo $name; ?> OK
            </h1>
        <?php } ?>
    
</body>
</html>