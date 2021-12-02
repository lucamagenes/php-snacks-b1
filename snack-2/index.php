<!-- 
    Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


 -->

 <?php

 $name = $_GET('name');

 $email = $_GET('email');
 var_dump(strpos($email, '@'), strpos($email, '.'));

 $age = $_GET('age');

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
    </form>

</body>
</html>