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
        // Darcie Milliken, November 10 2014//
        // Connect with travel experts database and display the available packages

        //Set up database Connection

        $link = mysqli_connect("localhost", "root", "", "travelexperts") 
         or die("Connection Error: " . mysqli_connect_error());   

         // Query to grab the desired elemnents from the database 

        $sql = "SELECT `PkgName`,`PkgDesc`,`PkgStartDate`,`PkgEndDate`,`PkgBasePrice` 
        FROM `packages` WHERE `PkgEndDate`>= DATE(NOW())";

        $result = mysqli_query($link, $sql) or die("SQL Error");

        // Printing the first row of table with headers 
        print("<table border='1' cellpadding = '5' cellspacing='5'>");
           print("<strong>");
           print("<tr>");
           print("<td> Package Name </td>");
           print("<td> Description </td>");
           print("<td> Departure Date </td>");
           print("<td> Return Date </td>");
           print("<td> Price </td>");
           print("<td>  </td>");           // Order Buttons will go in this column.
           print("</tr>");
           print("</strong>");

        // Printing valid packages from the database
        
    
            while($valid_rows = mysqli_fetch_assoc($result))
            {
                print("<tr>");
                echo "<td> " . $valid_rows["PkgName"] . "</td>";
                echo "<td> " . $valid_rows["PkgDesc"] . "</td>";
                
                // If the start date is in the past, display it with a bold, red style. 
                if (compare_dates($valid_rows["PkgStartDate"]))
                  {
                    echo "<td style='color:red; font-weight:bold;'> " . $valid_rows["PkgStartDate"] . "</td>";
                  }
                else
                {
                    echo "<td> " . $valid_rows["PkgStartDate"] . "</td>";

                }

                echo "<td> " . $valid_rows["PkgEndDate"] . "</td>";
                echo "<td> $" . $valid_rows["PkgBasePrice"] . "</td>";
                echo "<td> <input type='button' value='Order' > </td>";
                print("</tr>");

            }
    
            print("</table>");
  


        // Disconnect from database
            mysqli_close($link);
            

        ?> 
        <div02>
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