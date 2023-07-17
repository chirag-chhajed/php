<?php
    $username = "Bro Code";
    $phone = "123-456-7890";
    $username = strtolower($username);
    echo $username;
    echo "<br>";

    $username = strtoupper($username);
    echo $username;
    echo "<br>";

    // $username = str_pad($username, 20, "*");
    // echo $username;
    // echo "<br>";

    $phone = str_replace("-", "", $phone);
    echo $phone;
    echo "<br>";

    $username = str_shuffle($username);
    echo $username;
    echo "<br>";

    $equals = strcmp($username, "bro code");
    echo $equals;
    echo "<br>";

    $count = strlen($username);
    echo $count;
    echo "<br>";

    $index = strpos($username,"o");
    echo $index;
    echo "<br>";

    //Q: explode in php is similar to split() in javascript?
    //A: Yes, it is.
    //Q: implode in php is similar to join() in javascript?
    //A: Yes, it is.


