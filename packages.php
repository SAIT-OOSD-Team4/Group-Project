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
            Cupcake ipsum dolor sit amet halvah oat cake. 
            Halvah chocolate bar jelly-o jelly-o. Oat cake sweet carrot cake icing tart oat cake candy canes 
            cotton candy. Pie caramels oat cake tiramisu chocolate cake. 
            Unerdwear.com chupa chups croissant icing tiramisu jelly beans jelly beans. 
            Pastry tart donut candy sugar plum marzipan gingerbread powder. Soufflé soufflé jelly beans 
            danish chocolate cake pastry cupcake. Chocolate bar chocolate cake liquorice danish biscuit pie
             bonbon ice cream. Apple pie jelly-o pudding brownie sweet roll apple pie chocolate cake.
              

        </p>



        <?php 
        // Darcie Milliken, November 10 2014//
        // Connect with travel experts database and display the available packages

        //Set up database Connection

        $link = mysqli_connect("localhost", "root", "", "travelexperts") 
         or die("Connection Error: " . mysqli_connect_error());   


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
           print("<td>  </td>");             // Order Buttons will go in this column.
           print("</tr>");
           print("</strong>");

        // Printing valid packages from the database
        
    
            while($valid_rows = mysqli_fetch_assoc($result))
            {
                print("<tr>");
                echo "<td> " . $valid_rows["PkgName"] . "</td>";
                echo "<td> " . $valid_rows["PkgDesc"] . "</td>";
                //echo "<td> " . $valid_rows["PkgStartDate"] . "</td>";
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
                echo "<td> <a href='order.php'> <input id='buttonNormal' type='button' value='Order'></a> </td>";
                print("</tr>");

            }
    
            print("</table>");
  


        // Disconnect from database
            mysqli_close($link);
            

        ?> 

                <p>
            <table> 
                <tr height = '100'> 
                    <td width='100'> <img height = '150' src='images/Caribbean.jpg' >
                    </td>
                    <td width='100'> <img height = '150' src='images/polynesian.jpg'>
                    </td>
                    <td width='100'> <img height = '150' src='images/asian.jpg'>
                    </td>
                    <td width='100'> <img height = '150' src='images/european.jpg'>
                    </td>

                </tr>

           </table>
</p>
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