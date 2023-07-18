<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" style="max-width: 500px; margin: 0 auto; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <h2 style="text-align: center;">Welcome to Fakebook!</h2>
        <label for="username" style="display: block; font-weight: bold; margin-bottom: 10px;">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px;">
        <label for="password" style="display: block; font-weight: bold; margin-bottom: 10px;">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px;">
        <input type="submit" value="Register" name="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
    </form>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username) ){
        echo "Please enter your username";
    }elseif(empty($password)){
        echo "Please enter your password";
  }else{
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$hash')";
    try {
            mysqli_query($conn, $sql);
            echo "You are now registered";
    } catch (mysqli_sql_exception) {
        echo "That username already exists" . "<br>";
        echo mysqli_error($conn);
    }
    
  }}
mysqli_close($conn);
