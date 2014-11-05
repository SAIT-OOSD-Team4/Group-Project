<!--

-->


<!DOCTYPE html>
<html>

    <head>
<<<<<<< HEAD
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Vacation Packages</title>
=======
        
        <link href='http://fonts.googleapis.com/css?family=Exo:300,400,800' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->

>>>>>>> origin/master
             
    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php
<<<<<<< HEAD
                    $title = "vacation packages";
=======
                    $title = "Vacation Packages";
>>>>>>> origin/master
                    include("header.php");
                ?>
            
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <!-- nav content goes here --> 
                <?php
<<<<<<< HEAD
                    include("navigation.php");
=======
                    include("nav.php");
>>>>>>> origin/master
                ?>
                
            </div><!-- nav ends --> 
            

<<<<<<< HEAD
            <div id="section"><!-- section starts -->
                
                <!-- section content goes here --> 
        
=======
            <div id="section" style="color:black;"><!-- section starts -->
                
                <!-- section content goes here --> 
        <p>
            Irish ipsum dolor sit amet. Clover pub fiddle leprechaun Baisleach bréige paddy shamrock 
            Spíochnó potato farmer belfast cork it bailey’s lad O'Toole. 
            Dublin hole digger Lus na gaoithe galway St. Patrick irish fry McMillen wet the tea 
            Na deirfiúríní whiskey Limerick beer sure look it. Beer get the biscuits cup of tea 
            green Buí an bhogaigh go way outta that kilkenny. Cassidy oh danny boy a donkey’s years 
            Luibh bhléine minerals potatoes chips Guinness open the press pot of gold. 
            Happy out wicklow cluas luchóige petrol Fermanagh O'Connor potatoes clover beer 
            church sceallagach Killarney mass like hen’s teeth. 
        </p>

        <?php 
        // later, write out some CSS to make the start date bold and red.
        print("<table border='1' cellpadding = '5' cellspacing='5'>");
        for ($i=1; $i < 7; $i++) { 
           print("<tr>");
           print("<td> Destination $i </td>");
           print("<td> Image of Destination </td>");
           print("<td> Price </td>");
           print("<td> Departure Date </td>");
           print("<td> Return Date </td>");
           print("<tr>");
        }
           print("</table>");

        ?> 
>>>>>>> origin/master
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