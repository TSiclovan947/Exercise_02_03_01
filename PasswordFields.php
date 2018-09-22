<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 21, 2018
        
         PasswordFields.php
           
        -->
        <title>Password Fields</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Password Fields</h2>
        <?php
        $record = "jdoe:8w4dso3a39yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2";
        //Array containing password fields
        $passwordFields = array("login name",
                               "optional encrypted password",
                               "numerical user ID",
                               "numerical group ID",
                               "user name",
                               "user home directory", 
                               "optional user command interpreter");
        //Counter variable to see which data field is in
        $fieldIndex = 0;
        $extraFields = 0;
        //Grab first token
        $currField = strtok($record, ":");
        //while and if else grabs the data and the array content
        while ($currField != NULL) {
            if ($fieldIndex < count($passwordFields)) {
                echo "<p>The {$passwordFields[$fieldIndex]} is <em>$currField</em></p>\n";
            }
            else {
                ++$extraFields;
                //Prints if any extra fields (content after colon delimeter)
                echo "<p>Extra field # $extraFields is <em>$currField</em></p>\n";
            }
            //Token looking for is colon(:)
            $currField = strtok(":");
            ++$fieldIndex;
        }
        ?>
    </body>
</html>