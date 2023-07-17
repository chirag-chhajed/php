<!-- 
get and post in php
get is used to get data from url
post is used to get data from form
$_GET and $_POST are super global variables
super global variables are those variables which are available in all scopes -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username"><br>
        <label for="">Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="login"><br>
    </form>
</body>

</html>
<?php
// for get method
    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";
// for post method
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

// post is more secure than get
// get is used to get data from url, not secure, char limit, bookmark is possible with values, can be cached, better for a search page
// post is used to get data from form, secure, no data limit, bookmark is not possible with values, can't be cached, better for submittin credentials

// if security matters, use post
?>