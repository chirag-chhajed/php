<!-- if statements -->
<?php
$age = 15;
if ($age >= 18) {
    echo "You are eligible to vote";
} elseif ($age == 0) {
    echo "You are not born yet";
} elseif ($age < 0) {
    echo "that wan't a valid age";
} elseif($age >=100){
    echo "You are too old to vote";
}
else {
    echo "You are not eligible to vote";
}
?>
