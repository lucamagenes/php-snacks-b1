<?php

/* 

Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/


$classe5B = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'voti' => [7, 8, 9, 6],
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'voti' => [8, 8, 9, 8],
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'voti' => [8, 8, 7, 6],
    ]
];
/* 
for($i=0; $i < count($classe5B); $i++) {
    echo $classe5B[$i]['name'] . ' ' . $classe5B[$i]['lastname'] . ' ';
    echo round(array_sum($classe5B[$i]['voti']) / count($classe5B[$i]['voti']), 1);
}
   */  

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

    <h1>Media voti</h1>

    <?php for($i=0; $i < count($classe5B); $i++) { ?>
        <strong>
            Studente: 
            <?php echo $classe5B[$i]['name'] . ' ' . $classe5B[$i]['lastname']; ?>
        </strong>
        <p>Media: 
            <?php echo round(array_sum($classe5B[$i]['voti']) / count($classe5B[$i]['voti']), 1); ?>
        </p>
    
    <?php } ?>
    
</body>
</html>