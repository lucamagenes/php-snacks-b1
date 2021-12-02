<?php

/* 

Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.

*/

$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium earum rerum, debitis esse quaerat dignissimos a itaque explicabo perferendis! Repellat voluptatem illum iure provident et neque, eum fuga quae laborum adipisci aliquid debitis excepturi nobis. Tempore velit neque necessitatibus quaerat placeat quod perferendis animi fuga corrupti, itaque vero enim distinctio beatae mollitia repellendus laudantium quasi adipisci impedit. Assumenda aliquid est possimus doloremque? Pariatur aperiam quasi dolore corporis facilis cumque impedit facere laborum repudiandae dolorum quos magni excepturi eum nulla perspiciatis omnis consequuntur, laudantium dicta voluptate eligendi? Quaerat ea at dolorum labore voluptas quasi! Dolores veritatis, itaque voluptate tenetur animi expedita consequatur magni non reprehenderit enim laboriosam velit deleniti magnam dicta. Voluptas sint, veritatis consectetur velit saepe inventore excepturi autem maxime illum! Sapiente molestiae, eum officiis dolor totam placeat distinctio quisquam fuga reiciendis nostrum molestias itaque nihil, praesentium dolorum earum quos soluta, accusantium doloribus. Animi quo possimus laborum aut recusandae ipsum accusantium, minus reiciendis. Sunt quidem excepturi, dicta accusamus placeat alias rem odit iure consequatur sint ratione quos cum ipsum deserunt molestias exercitationem et veritatis at totam, tenetur distinctio in atque aspernatur ducimus? Nulla neque corporis repellat voluptatum debitis fugiat sed odio sequi, earum quam impedit, porro voluptas adipisci? Natus, fugiat?';

$paragraphs = explode('.', $text);

/* for($i=0; $i < count($paragraphs); $i++) {
    $item = $paragraphs[$i];
    var_dump($item);
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

    <p>
        <?php echo $text ?>
    </p>

    <?php for($i=0; $i < count($paragraphs); $i++) {
    $item = $paragraphs[$i]; ?>
    <ul>
        <li>
            <?php echo $item; ?>
        </li>
    </ul>
    <?php } ?>
    
</body>
</html>