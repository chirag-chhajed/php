<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <p>This is home page</p>
    <!-- <a href="index.php">This goes to the login page</a> -->
    <form action="home.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
    <br>
</body>
</html>
<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("location:index.php");
    }