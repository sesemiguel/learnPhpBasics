<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate Arrays</title>
</head>

<body>
    <?php
    // Associative Arrays (key => value)
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");

    // Accessing
    echo $grades["Jim"];

    // Assigning
    $grades["Jim"] = "F";

    ?>
</body>

</html>