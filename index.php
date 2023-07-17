<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username" id=""><br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>

</html>
<?php
// isSet() function to check if the variable is set or not
// empty() function to check if the variable is empty or not
// foreach($_POST as $key => $value){
//     echo "{$key} = {$value} <br>";
// }
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
        echo "Username is missing <br>";
    }elseif(empty($password)){
        echo "Password is missing <br>";
    }
    else{
        echo "Welcome {$username}";
    }}
?>