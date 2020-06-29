<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including PHP Files</title>
</head>
<body>
    <?php
        // You can populate the variables from the other PHP files
        $title = "Programming";
        $author = "Miguel";
        $wordCount = 400;
        include "article-header.php";

        echo "<br>";

        // You can use the functions from the other PHP files
        include "useful-tools.php";
        sayHi("Miguel");
    ?>
</body>
</html>