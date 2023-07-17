<?php
    // Q: Explain include() in php
    // A: include() is used to include a php file into another php file.
    //    If the file is not found, it will throw a warning and continue the execution of the script.
    //    If the file is found, it will include the file and continue the execution of the script.

    include("header.html")
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <p>This is the Home page</p>
    <p>Stuff about your home page can go here</p>
</body>
</html>
<?php
    include("footer.html");