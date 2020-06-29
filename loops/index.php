<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        // While Loops
        echo "While Loops <br>";
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

        // Do-While Loops
        echo "Do-While Loops <br>";
        $j = 6;
        do{
            echo "$j <br>";
            $j++;
        }while($j <= 5);

        // For Loops
        echo "For Loops <br>";
        for($i = 1; $i<=5; $i++){
            echo "$i <br>";
        }

        // Looping thru an array
        echo "Printing contents of an array <br>";
        $numbers = array(124,56,345,23,123,43,564);
        for($i=0; $i<count($numbers); $i++){
            echo "$numbers[$i] <br>";
        }
    ?>
</body>
</html>