<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">x</label>
        <input type="text" name="x" autocomplete="off" id="">
        <label for="">y</label>
        <input type="text" name="y" autocomplete="off" id="">
        <label for="z">z</label>
        <input type="text" autocomplete="off" name="z">
        <input type="submit" value="total">
    </form>
</body>

</html>
<?php
$x = $_POST["x"];
$total = null;
$y = $_POST["y"];
$z = $_POST["z"];

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
    // $total = pi();
    $total = rand(1,100);


echo $total;
?>