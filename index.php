<?php
// session = sgb used to store information on a user to be used acroos multiple pages
// A user is assigned a session-id ex. login credentials
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>

<body>
    <form action="index.php" method="post">
        <!-- make an username and password input with input submit -->
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"] . "<br>";
        header("location:home.php");
    }else{
        echo "Please enter username and password";
    }
}
