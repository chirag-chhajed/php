<?php
    $foods = array("apple","orange","banana","grapes");

    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";

    $foods[4] = "pineapple";
    array_push($foods,"kiwi");
    $reversed_foods = array_reverse($foods);

    foreach($reversed_foods as $food){
        echo $food . "<br>";
    }
    echo count($foods);