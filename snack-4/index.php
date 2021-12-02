<?php

/* 
Snack 4

Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta
*/



    $randomNumbers =[];
    $min = 1;
    $max = 99;
    $nItems = 15;

    while(count($randomNumbers) < $nItems) {
        $number = rand($min, $max);

        if(!in_array($number, $randomNumbers)) {
            $randomNumbers[] = $number;
        }
    }
    var_dump($randomNumbers) ;


?>
    