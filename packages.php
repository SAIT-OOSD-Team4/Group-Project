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
            

            <div id="sectionPackagePage"><!-- sectionPackagePage starts -->
                <!-- section content goes here --> 
                <div02>
                    <p>
                        Cupcake ipsum dolor sit amet halvah oat cake. 
                        Halvah chocolate bar jelly-o jelly-o. Oat cake sweet carrot cake icing tart oat cake candy canes 
                        cotton candy. Pie caramels oat cake tiramisu chocolate cake. 
                        Unerdwear.com chupa chups croissant icing tiramisu jelly beans jelly beans. 
                        Pastry tart donut candy sugar plum marzipan gingerbread powder. 
                    </p>
                </div02>
           
                <div03>
                    <br/><br/><br/><br/><br/>
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
                    print("<table cellpadding = '5' cellspacing='5' style='float:right;'>");
                    print("<col width='200px'>");
                    print("<col width='200px'>");
                    print("<col width='100px'>");
                    print("<col width='100px'>");
                    print("<col width='100px'>");
                    print("<col width='00px'>");

                           
                   print("<strong>");
                   print("<tr>");
                   print("<td style='background-color:rgba(1,1,1,0.9);'> Package Name </td>");
                   print("<td style='background-color:rgba(1,1,1,0.9);'> Description </td>");
                   print("<td style='background-color:rgba(1,1,1,0.9);'> Departure Date </td>");
                   print("<td style='background-color:rgba(1,1,1,0.9);'> Return Date </td>");
                   print("<td style='background-color:rgba(1,1,1,0.9);'> Price </td>");
                   print("<td>  </td>");             // Order Buttons will go in this column.
                   print("</tr>");
                   print("</strong>");

                    // Printing valid packages from the database


                    while($valid_rows = mysqli_fetch_assoc($result))
                    {
                        print("<tr>");
                        echo "<td style='background-color:rgba(1,1,1,0.7); color:#99FF33;'> " . $valid_rows["PkgName"] . "</td>";
                        echo "<td style='background-color:rgba(1,1,1,0.5);'> " . $valid_rows["PkgDesc"] . "</td>";
                        //echo "<td> " . $valid_rows["PkgStartDate"] . "</td>";
                        if (compare_dates($valid_rows["PkgStartDate"]))
                          {
                            echo "<td style='background-color:rgba(1,1,1,0.5);' 
                            style='color:red; font-weight:bold;'> " . $valid_rows["PkgStartDate"] . "</td>";
                          }
                        else
                        {
                            echo "<td style='background-color:rgba(1,1,1,0.5);'> " . $valid_rows["PkgStartDate"] . "</td>";

                        }

                        echo "<td style='background-color:rgba(1,1,1,0.5);'> " . $valid_rows["PkgEndDate"] . "</td>";
                        echo "<td style='background-color:rgba(1,1,1,0.5);'> $" . $valid_rows["PkgBasePrice"] . "</td>";
                        echo "<td style='background-color:rgba(1,1,1,0.5);'> 
                        <a href='order.php'> <input id='buttonNormal' type='button' value='Order'></a> </td>";
                        print("</tr>");

                    }

                    print("</table>");

                    // Disconnect from database
                    mysqli_close($link);
                ?> 
            </div><!-- sectionPackagePage ends --> 

            <div id="sideNavPackagePage">
                
                <table> 
                    <tr> 
                        <td width='100'> <img width="180" height="100" src='images/Caribbean.jpg' >
                        </td>
                    </tr>
                    <tr> 
                        <td width='100'> <img width="180" height="100" src='images/polynesian.jpg'>
                        </td>
                    </tr>
                    <tr> 
                        <td width='100'> <img width="180" height="100" src='images/asian.jpg'>
                        </td>
                    </tr>
                    <tr> 
                        <td width='100'> <img width="180" height="100" src='images/european.jpg'>
                        </td>
                    </tr>
                </table>
            
            </div03>
            </div> <!-- sideNavPackagePage ends --> 
    
        
            <div id="footer"><!-- footer starts --> 
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>  
            </div><!-- footer ends --> 
        </div> <!-- wrap ends -->  
    </body>
</html>