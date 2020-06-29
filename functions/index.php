<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function sayHi($name){
            echo "Hello World by $name";
        }

        function cube($num){
            return $num * $num;
        }

        sayHi("Miguel");
        $cube = cube(9);
        echo "<br>";
        echo $cube;
    ?>
</body>
</html>