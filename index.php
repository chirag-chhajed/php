<?php
    // string
    $name = "Chirag";
    $food = "pizza";
    $email = "fake@email.com";

    // integers
    $age = 21;
    $users = 2;
    $quantity = 3;

    // float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    // boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Hello, {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "You are {$age} years old<br>";
    echo "There have {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "The sales is tax rate is {$tax_rate}%<br>";

    echo "Are you employed? {$employed}<br>";
    echo "Are you online? {$online}<br>";
?>