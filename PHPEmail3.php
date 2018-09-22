<!doctype html>


<html>

<head>
    <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 21, 2018
        
         PHPEmail3.php
           
        -->
    <title>PHP Email 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email 3</h2>
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
            if (preg_match("/^[\w-]+(\.[\w-])*@[\w-]+(\.[\w-]+)*(\.A-Za-z){2,}$/i", $address) == 1) {
                return true;
            }
            //Check if not valid
            else {
                return false;
            }
        }
        
        //Sort the emails
        //Pass in email addresses as the whole array
        function sortAddresses($addresses) {
            $sortedAddresses = array();
            $ilimit = count($addresses) - 1;
            $jlimit = count($addresses);
            //For loop (go through array we passed)
            for ($i = 0; $i < $ilimit; $i++) {
                $currentAddress = $addresses[$i];
                for ($j = $i + 1; $j < $jlimit; $j++) {
                    if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                        $tempValue = $addresses[$j];
                        $addresses[$j] = $currentAddress;
                        $currentAddress = $tempValue;
                    }
                }
                $sortedAddresses[] = $currentAddress;
            }
            return($sortedAddresses);
        }
        $sortedAddresses = sortAddresses($emailAddresses);
        $sortedAddressList = implode(", ", $sortedAddresses);
        echo "<p>Sorted addresses: $sortedAddressList</p>\n";
        
        //Tests from the for loop if an email has an @ symbol or a .
        foreach ($sortedAddresses as $thisAddress) {
            if (validateAddress($thisAddress) === false) {
                echo "<p>The email address <em>$thisAddress</em> does not appear to be valid.</p>";
            }
        }
        ?>
</body>

</html>
