<?php
$grade = "A";
// Why do we use switch statements?
// We use switch statements instead of if statements when we have a limited number of options
    switch ($grade) {
        case "A":
            echo "You are a superstar!";
            break;
        case "B":
            echo "You did well!";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "YOU FAIL!";
            break;
        default:
            echo "Invalid grade";
            break;
    }

    $date = date('l');
    // $date = "g";

    switch($date){
        case "Monday":
            echo "I hate Monday";
            break;
        case "Tuesday":
            echo "It's taco Tuesday";
            break;
        case "Wednesday":
            echo "The work week is half over";
            break;
        case "Thursday":
            echo "It's almost Friday";
            break;
        case "Friday":
            echo "TGIF";
            break;
        case "Saturday":
            echo "It's the weekend";
            break;
        case "Sunday":
            echo "Sunday Funday";
            break;
        default:
            echo "{$date} is not a valid day";
            break;
    }


