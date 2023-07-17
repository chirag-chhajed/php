<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="username" placeholder="Enter you username" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    // _SERVER - SGB that contains headers, path, and script slocations
    // The entries in this array are created by the web server.
    // Show nearly everything you need to know about the current web page env.

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello";
    }

    // foreach($_SERVER as $key => $value){
    //     echo $key . " : " . $value . "<br>";
    // }


?>