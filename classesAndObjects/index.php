<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;
            var $rating;

            // This is the standard for the constructor function
            function __construct($title, $author, $pages, $rating){
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
                $this->rating = $rating;
            }

            function isGood(){
                if($this->rating >= 7.5){
                    return "It is good";
                }
                else{
                    return "It is bad";
                }
            }

        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400, 8);

        // Accessing attributes
        echo $book1->title;
        echo "<br>";
        echo $book1->author;
        echo "<br>";
        echo $book1->pages;
        echo "<br>";

        // Accessing functions
        echo $book1->isGood();
    ?>

    <br>

    <!-- Setters and Getters -->
    <?php
        class Movie{
            public $title;
            private $rating; // Encapsulation

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" 
                    || $rating == "R"){
                    $this->rating = $rating;
                }
                else{
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
        // Rated -- G, PG, PG-13, R, NR
        $avengers->setRating("R");
        echo $avengers->getRating();
    ?>

    <br>

    <!-- Inheritance -->
    <?php
        class Chef{
            function makeChicken(){
                echo "make chicken";
            }

            function makeSalad(){
                echo "make salad";
            }

            function makeSpecialDish(){
                echo "make special dish";
            }
        }

        // Inherits the chef class
        class ItalianChef extends Chef{
            function makePasta(){
                echo "make pasta";
            }
            
            // Method overriding
            function makeSpecialDish(){
                echo "make special dish italian style";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();

        echo "<br>";

        $italianChef = new ItalianChef();
        $italianChef->makeChicken();

        echo "<br>";
        $italianChef->makePasta();

        echo "<br>";
        $chef->makeSpecialDish();
        echo "<br>";
        $italianChef->makeSpecialDish();
    ?>

</body>
</html>