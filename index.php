<?php
    function happyBirthday($first_name,$age) {
        echo "Happy Birthday to you!<br>";
        echo "Happy Birthday to $first_name!<br>";
        echo "You are now $age years old<br>";
    }

    happyBirthday("SpongeBob",3);
    happyBirthday("Patrick",35);
    happyBirthday("Squidward",45);

    function is_even($number){
        if($number % 2 == 0){
            return true;
        }else{
            return false;
        }
    }

    echo is_even(4);
    echo is_even(11);
echo "<br><br>";

    function hypotenuse($a,$b){
        $c = sqrt($a**2 + $b**2);
        return $c;
    }

    echo hypotenuse(3,4);