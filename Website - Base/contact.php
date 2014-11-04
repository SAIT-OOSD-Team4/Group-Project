<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: October 30,2014
Assignment: HTML/CSS/Javascript
-->


<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Exo:300,400,800' 
              rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Our Team</title>
        
    </head>

    <body onload="tables()">
        <div id=wrap>
            
            <div id="header">
                <?php
                    $title = "Contact Us";
                    include("header.php");
                ?>
            </div>
                    
            <div id="section">
                <br /><br />
                <h2>Our Team</h2>
                <p>
                    Travel is the movement of people between relatively distant 
                    geographical locations, and can involve travel by foot, bicycle, 
                    automobile, train, boat, airplane, or other means, with or 
                    without luggage, and can be one way or round trip. 
                </p>
            </div><!-- end of section -->
                    
            <div id="footer">
                <?php
                    include("footer.php");
                ?>
            </div><!-- end of section -->
        </div><!-- end of wrap -->
    </body>
</html>