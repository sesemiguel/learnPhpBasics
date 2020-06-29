<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST vs GET</title>
</head>
<body>
    <!-- The POST method does not pass the data on the url unlike GET -->
    <form action="index.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php echo $_POST["password"];?>
</body>
</html>