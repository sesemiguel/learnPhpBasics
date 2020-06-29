<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Inputs</title>
</head>
<body>
    <form action="index.php" method="get">
        Name: <input type="text" name ="name">
        <br>
        Age: <input type="number" name ="age">
        <br>
        <input type="submit">
    </form>

    <?php echo $_GET["name"]; ?>
    <br>
    <?php echo $_GET["age"]; ?>
        
</body>
</html>