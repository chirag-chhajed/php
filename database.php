<?php
$db_server = "localhost";
$db_user = "root";
$db_post = "";
$db_name = "businees_db";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_post, $db_name);
} catch (\mysqli_sql_exception) {
    echo "Connection failed: ";
}


echo $conn ? "Connected\r\n" : "Not Connected";
