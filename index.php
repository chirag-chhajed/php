<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" id="" value="visa">Visa <br>
        <input type="radio" name="credit_card" id="" value="mastercard">Mastercard <br>
        <input type="radio" name="credit_card" id="" value="AmericanExpress">American Express <br>
        <input type="submit" value="confirm">
    </form>

    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="pasta" value="Pasta">Pasta<br>
        <input type="checkbox" name="salad" value="Salad">Salad<br>
        <input type="submit" value="submit">

    </form>
</body>

</html>
<?php
// radio
if (isset($_POST['credit_card'])) {
    $credit_card = $_POST['credit_card'];
    if (isset($credit_card)) {
        echo $credit_card;
    } else {
        echo "Please select a credit card";
    }
}

// checkbox
if (!empty($_POST)) {
    if (isset($_POST["pizza"])) {
        echo $_POST["pizza"];
    } if (isset($_POST["pasta"])) {
        echo $_POST["pasta"];
    } if (isset($_POST["salad"])) {
        echo $_POST["salad"];
    }
}
?>