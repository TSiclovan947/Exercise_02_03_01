<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 24, 2018
        
         ValidateLocalAddress.php
           
        -->
        <title>Validate Local Address</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Validate Local Address</h2>
        <?php
        //Array initailized with valid and invalid email addresses
        $email = array("jsmith123@example.org",
                      "john.smith.mail@example.org", 
                      "john.smith@example.org",
                      "john.smith@example",
                      "jsmith123@mail.example.org");
        //Foreach iterating through the array to verify that each email is correctly formatted
        foreach ($email as $emailAddress) {
            echo "The email address &Idquo;" . $emailAddress . "rdquo;";
            //Regular Expression that validates email with all of the necessary specifictions
            if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
                //If valid will print following
                echo " is a valid e-mail address.<br>";
            }
            else {
                //If invalid will print following
                echo " is not a valid e-mail address.<br>";
            }
        }
        ?>
    </body>
</html>