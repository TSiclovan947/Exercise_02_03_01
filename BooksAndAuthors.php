<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 20, 2018
        
         BooksAndAuthors.php
           
        -->
        <title>Books and Authors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Books and Authors</h2>
        <?php
        //Array containing names of four books
        $books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
        //Array containing authors of the books
        $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
        //Array containing the authors's real names
        $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodore Geisel");
        //For loop to print the arrays
        for ($i = 0; $i < count($books); $i++) {
            echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}. </p>";
        }
        //For loop to retrieve the number of characters and words in the title
        for ($i = 0; $i < count($books); $i++) {
            echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>";
        }
        
        echo "<h2>Manipulating Strings</h2>";
        $startingText = "mAdAm, i'M aDaM";
        //Makes all of the letters in the starting text uppercase
        $uppercaseText = strtoupper($startingText);
        //Makes all of the letters in the starting text lowercase
        $lowercaseText = strtolower($startingText);
        echo "<p>$uppercaseText</p>\n";
        echo "<p>$lowercaseText</p>\n";
        //Capitalizes the first word in the starting text
        echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
        //Makes the first letter of the text lowercase
        echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
        //Capitalizes the first letter of every word
        $workingText = ucwords($lowercaseText);
        echo "<p>$workingText</p>\n";
        
        echo "<h2>Other Manipulations</h2>";
        //Encrypts this text
        echo "<p>" . md5($workingText) . "</p>\n";
        //Get first 6 characters of the text
        echo "<p>" . substr($workingText, 0, 6) . "</p>\n";
        //Starts off at seventh character to the end of the string
        echo "<p>" . substr($workingText, 7) . "</p>\n";
        //Reverses the text order 
        echo "<p>" . strrev($workingText) . "</p>\n";
        //Shuffles the letters in the text
        echo "<p>" . str_shuffle($workingText) . "</p>\n";
        ?>
    </body>
</html>