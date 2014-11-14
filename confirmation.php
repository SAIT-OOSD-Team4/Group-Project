<!--

-->


<!DOCTYPE html>
<html>

    <head>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Vacation Packages</title>
             
    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php

                    $title = "Vacation Packages";

                    include("header.php");
                    include("functions.php");
                ?>
            
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <!-- nav content goes here --> 
                <?php
                    include("navigation.php");
                ?>
                
            </div><!-- nav ends --> 
            

            <div id="section"><!-- section starts -->
                
                <!-- section content goes here --> 
                <div02>


        <?php 
        // Darcie Milliken, November 13 2014//
        // This page will display after the customer orders a product

        ?> 

            <p style='font-weight:bold;'> Thank you for your order! You will reeive a copy of your itinerary by e-mail. </p>
            <p>  [Widget: Share your travel plans with your friends on facebook! ]
            </p>

            <p>  [Widget: Share your travel plans with your followers on twitter! ]
            </p>
            <p> <img width = '300px' src='images/Facebook-Twitter.jpg'></p>


        </div02>
            </div><!-- section ends --> 
            

            <div id="footer"><!-- footer starts --> 
                
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>
                
            </div><!-- footer ends --> 
            
            
        </div> <!-- header ends -->  
        
    </body>
</html>