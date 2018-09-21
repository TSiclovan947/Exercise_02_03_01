<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 20, 2018
        
         Presidents2.php
           
        -->
        <title>Presidents 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Presidents 2</h2>
        <?php
        //List with names of first five presidents
        $presidents = "George Washington; John Adams; Thomas Jefferson; James Madison; James Monroe";
        //Look for token (delimeter) in the string (semicolon)
        $thisPresident = strtok($presidents, ";");
        while ($thisPresident != NULL) {
            echo "$thisPresident<br>";
            $thisPresident = strtok(";");
        }
        ?>
    </body>
</html>