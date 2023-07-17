<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country" id="">
        <input type="submit" >
    </form>
</body>
</html>
<?php
// associative array
// key => value

$capitals = array(
    "USA" => "Washington DC",
    "Japan" => "Tokyo",
    "South Korea" => "Seoul",
    "China" => "Beijing",
    "Indea" => "New Delhi"
);
// echo $capitals["USA"];
// $capitals["France"] = "Paris";

// Q:What does array_pop do?
// A:Removes the last element from an array
// Q:What does array_shift do?
// A:Removes the first element from an array
// @: What does array_reverse do?
// A: Reverses the order of the elements in an array

// for iterating over key and value both
foreach($capitals as $key => $value){
    echo "$key $value <br>";
}

// for iterating over keys
foreach ($capitals as $value) {
    echo "{$value} <br>";
}

$capital = $capitals[$_POST["country"]];

echo "The capital is $capital";
