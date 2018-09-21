<!doctype html>


<html>
    <head>
        <!--   
         Exercise 02_03_01
         Author: Tabitha Siclovan
         Date: September 20, 2018
        
         Presidents.php
           
        -->
        <title>Presidents</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h2>Presidents</h2>
        <?php
        //Array with names of first five presidents
        $presidents = array("George Washington", 
                            "John Adams", 
                            "Thomas Jefferson", 
                            "James Madison", 
                            "James Monroe");
        //Parallel array with years presidents were in office
        $yearsInOffice = array("1789 to 1797",
                               "1797 to 1801", 
                               "1801 to 1809", 
                               "1809 to 1817", 
                               "1817 to 1825");
        //Template with [] placeholder 
        $outputTemplate = "<p>President [NAME] served from [TERM]</p>\n";
        //Foreach that returns value and index of the element
        foreach ($presidents as $sequence => $name) {
            $tempString = str_replace("[NAME]", $name, $outputTemplate);
            // echo $tempString;
            $outputString = str_replace("[TERM]", $yearsInOffice[$sequence], $tempString);
            echo $outputString;
        }
        ?>
    </body>
</html>