<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 24, 2018
        
         ValidateCreditCard.php
           
        -->
        <title>Validate Credit Card</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Validate Credit Card</h2>
        <?php
        $creditCard = array("", "8910-1234-5678-6543", "0000-9123-4567-0123");
        //This foreach loop iterates through the array to test that each credit card has a value
        foreach ($creditCard as $indexNumber => $cardNumber) {
            if (empty($cardNumber)) {
                //Card is invalid if does not have a value
                echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string.</p>";
            }
            //This else clause removes the dashes and spaces in the credit card number
            else {
                $creditCardNumber = $cardNumber;
                //Use string replace to replace the dash(-) and any spaces
                $creditCardNumber = str_replace("-", "", $creditCardNumber);
                $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p>";
                //Nested if..else to test if the credit card is numeric
                if (!is_numeric($creditCardNumber)) {
                    //If not numeric invalid
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric character.</p>";
                }
                //Else is valid b/c numeric
                else {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
                }
            }
        }
        ?>
    </body>
</html>