<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <?php
        $isMale = false;

        if($isMale){
            echo "You are male";
        }
        else{
            echo "You are a female";
        }

        function getMax($num1, $num2){
            if($num1 > $num2){
                return $num1;
            }
            else{
                return $num2;
            }
        }
        echo "<br>";
        echo getMax(3,90);
    ?>
</body>
</html>