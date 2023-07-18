<?php
// 1. Mysqli extension
// 2. pdo (php data objects)

include("database.php");

// $username = "mr_crabs";
// $password = "123456";
// $hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user_name"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
} else {
    echo "No user found";
}
// echo "User is now registerd";

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>