<!doctype html>


<html>

<head>
    <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 20, 2018
        
         PHPEmail.php
           
        -->
    <title>PHP Email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email</h2>
    <?php
        //Array containing the email address names
        $emailAddresses = array("john.smith@php.test", 
                                "mary.smith.mail@php.example", 
                                "john.jones@php.invalid", 
                                "alan.smithee@test", 
                                "jsmith456@example.com", 
                                "jsmith456@test", 
                                "mjones@example", 
                                "mjones@example.net", 
                                "jane.a.doe@example.org");
    
        //Function to check validity of addresses
        function validateAddress($address) {
            //Check for validity
            if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
                return true;
            }
            //Check if not valid
            else {
                return false;
            }
        }
        
        //Tests from the for loop if an email has an @ symbol or a .
        foreach ($emailAddresses as $thisAddress) {
            if (validateAddress($thisAddress) === false) {
                echo "<p>The email address <em>$thisAddress</em> does not appear to be valid.</p>";
            }
        }
        ?>
</body>

</html>
