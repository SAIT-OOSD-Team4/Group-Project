 <?php 
        // Darcie Milliken, November 10 2014//
        // Connect with travel experts database and display the available packages

        include("functions.php");
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
                    echo "<td style='color:red;''> " . $valid_rows["PkgStartDate"] . "</td>";
                  }
                else
                {
                    echo "<td> " . $valid_rows["PkgStartDate"] . "</td>";

                }

                echo "<td> " . $valid_rows["PkgEndDate"] . "</td>";
                echo "<td> $" . $valid_rows["PkgBasePrice"] . "</td>";
                echo "<td> <input type='button' value='Order' > </td>";

/*                print "trying to show in red ";
                if ( compare_dates($valid_rows["PkgStartDate"]) )
                  print "Red stuff!!";*/


                print("</tr>");

            }
    
            print("</table>");

            print_r($valid_rows["PkgStartDate"]);


        // Disconnect from database
            mysqli_close($link);
            

        ?> 