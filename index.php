<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- order form -->
    <form action="index.php" method="post">
        <label for="">quantity</label><br>
        <input type="text" name="quantity" id=""><br>
        <input type="submit" value="total">
    </form>
</body>

</html>
<?php
$item = "pizza";
$price = 5.99;

$quantity = $_POST["quantity"];
$total = null;

$total = $price * $quantity;

echo "You have ordered {$quantity} x {$item}s";
echo "Your total is \${$total}"
?>