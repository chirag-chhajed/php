<?php
//What are Logical Operators?
//Logical operators are used to combine conditional statements.
//PHP supports the following logical operators:
//&& True if both conditions are true
//|| True if either condition is true
// !  True if condition is false

$temp = 25;
$cloudy = true;

if ($temp >= 0 && $temp <= 30) {
    echo "The weather is good<br>";
} else {
    echo "The weather is bad<br>";
}
if (!$cloudy) {
    echo "It is sunny<br>";
} else {
    echo "It is cloudy";
}
