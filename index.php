<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        Username: <br>
        <input type="text" name="Username" id=""><br>
        age:<br>
        <input type="text" name="age" id=""><br>
        email:<br>
        <input type="email" name="email" id=""><br>
        <input type="submit" value="login" name="login">
    </form>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    if(empty($age)){
        echo "That number wasn't valid";
    } else{
        echo "Your age is $age";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(empty($email)){
        echo "That email wasn't valid";
    } else{
        echo "Your email is $email";
    }
    // echo "Welcome $username <br> your age is $age<br> your email is $email";
}
