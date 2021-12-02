<?php

/* 

Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde.

*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers = $db['teachers'];
$pm = $db['pm'];

/* 
foreach ($teachers as $person => $info) {
    echo $info['name'] . $info['lastname'];
    
}

foreach ($pm as $person => $info) {
    echo $info['name'] . $info['lastname'];
    
} */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container{
            width: 200px;
            height: 100px;
            text-align: center;
        }

        .gray{
            background-color: gray;
        }

        .green{
            background-color: green;
        }
    </style>
</head>
<body>

    <h2>Teachers</h2>
    <div class="container gray">
        <?php foreach ($teachers as $person => $info) { ?>
            <ul>
                <li>
                    <?php echo $info['name'] . ' ' . $info['lastname']; ?>
                </li>
            </ul>
    
        <?php } ?>
    </div>

    <h2>PM</h2>
    <div class="container green">
        <?php foreach ($pm as $person => $info) { ?>
            <ul>
                <li>
                    <?php echo $info['name'] . ' ' . $info['lastname']; ?>
                </li>
            </ul>
    
        <?php } ?>
    </div>
    
</body>
</html>