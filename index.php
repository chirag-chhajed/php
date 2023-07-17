<?php
    // Arithmetic operators
    // + - * / ** %

    $x = 10;
    $y = 2;
    $z = null;

    $z = $x - $y;
    echo "{$z} <br>";

    // Increment/Decrement operators
    $counter = 0;
    $counter+=3;
    echo $counter;
    echo "<br>";

    // Operator Precedence
    // PEMDAS
    // ()
    // **
    // * / %
    // + -

    $total = 1+2-3*4/5**6;
    echo $total;

?>