<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator </title>
</head>
<body>
    <form action="index.php" method="get">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php 
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;
        $quotient = $num1 / $num2;
    ?>
    <?php echo "The sum is $sum";?>
    <br>
    <?php echo "The difference is $difference"; ?>
    <br>
    <?php echo "The product is $product"; ?>
    <br>
    <?php echo "The quotient is $quotient"; ?>
</body>
</html>