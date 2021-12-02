<!-- 
Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60



 -->
<?php

    $partite = [
        $psrtita_1 = [
            'home' => 'Olimpia Milano',
            'away' => 'Cantù',
            'home-point' => 55,
            'away-point' => 60,
        ],
        $psrtita_2 = [
            'home' => 'trieste',
            'away' => 'varese',
            'home-point' => 70,
            'away-point' => 86,
        ],
        $psrtita_3 = [
            'home' => 'brescia',
            'away' => 'virtus bologna',
            'home-point' => 74,
            'away-point' => 104,
        ],
    ];

    for ($i=0; $i < count($partite); $i++) {
        $element = $partite[$i];
        echo $element;
        var_dump($element, $element['home']);
        
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

        <h1>Partite</h1>

        <?php for ($i=0; $i < count($partite); $i++) {
        $element = $partite[$i]; 
        echo $element; ?>
        
        <p>
            <?php echo $element['home']; ?>
             - 
            <?php echo $element['away']; ?>
        </p>
        <p>
            <?php echo $element['home-point']; ?>
             - 
            <?php echo $element['away-point']; ?>
        </p>
        
        <?php } ?>

    
</body>
</html>