<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 24, 2018
        
         CompareStrings.php
           
        -->
        <title>Compare Strings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Compare Strings</h2>
        <?php
        //Initialize variable called firstString
        $firstString = "Geek2Geek";
        //Initialize variable called secondString
        $secondString = "Geezer2Geek";
        //If..else statement to determine whether or not the string has a value
        if (!empty($firstString) && !empty($secondString)) {
            //Nested if..else to determine if the strings are the same
            if ($firstString == $secondString) {
                //Prints if both strings are the same
                echo "<p>Both Strings are the Same.</p>";
            }
            else {
                //Uses the similar_text to determine how many characters the strings have in common
                echo "<p>Both strings have " . similar_text($firstString, $secondString) . " character(s) in common.</p>";
                //Uses the levenshtein to determine how many strings would have to be changed to make the strings the same
                echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same.</p>";
            }
        }
        //This else will execute if the initialized variable to not contain a value/are empty
        else {
            echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared.</p>";
        }
        ?>
    </body>
</html>