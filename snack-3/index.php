<?php

/* 

Snack 3

Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.

*/


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];



/* foreach ($posts as $data_post => $post) {
    var_dump($data_post, $post);
    foreach($post as $info => $details) {
        echo  $details['title'] . $details['author'] . $details['text'];
    }
} */


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
    <h1>Posts</h1>
    
    <?php foreach ($posts as $data_post => $post) { ?>
        <p>
            Data del post: 
            <?php echo $data_post ?>
        </p> 

        <?php foreach($post as $info => $details) { ?>

            <ul>
                <li>
                    Titolo: 
                    <?php echo  $details['title'] ?>
                </li>
                <li>
                    Autore: 
                    <?php echo  $details['author'] ?>
                </li>
                <li>
                    Testo: 
                    <?php echo  $details['text'] ?>
                </li>
            </ul>
        
        <?php } ?>
    
    <?php } ?>

</body>
</html>