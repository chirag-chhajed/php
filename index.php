<?php
    // hashing
    $password = "password";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash;
    echo "<br>";

    if(password_verify("password", $hash)){
        echo "Password is valid";
    }else{
        echo "Password is invalid";
    }
?>