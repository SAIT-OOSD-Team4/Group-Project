<!--
Student:Jose Marcano
Course Module: CPRG210
Date: October 30,2014
Assignment: Project Workshop 1 
-->


<!DOCTYPE html>
<html>
    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Contact us</title>
             
    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php
                    $title = "contact us";
                    include("header.php");
                ?>
            
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <!-- nav content goes here --> 
                <?php
                    include("navigation.php");
                ?>
                
            </div><!-- nav ends --> 
            
<!-- Jose Marcano & Jazmeen Kathuria --> 
<!-- Google Maps plug in --> 
            <div id="sectionFull"><!-- section starts -->
                <table id="Master" align="left">
                <!-- AGENCY 1 MAP -->
                <tr><td><br>

                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.938799183043!2d-113.95701509999998
                    !3d51.1280369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716396a144185b%3A0x5d12075c7d64e9d!2s65+Saddlecreek+Crescent+
          NE%2C+Calgary%2C+AB+T3J+4R9!5e0!3m2!1sen!2sca!4v1416524598665" width="400" height="400" frameborder="0" style="border:0"></iframe>

                <!-- AGENCY 2 MAP -->
                <br><br><br> 
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.938799183043!2d-113.95701509999998
                    !3d51.1280369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716396a144185b%3A0x5d12075c7d64e9d!2s65+Saddlecreek+Crescent+
          NE%2C+Calgary%2C+AB+T3J+4R9!5e0!3m2!1sen!2sca!4v1416524598665" width="400" height="400" frameborder="0" style="border:0"></iframe>
        </td><td>
                <div04>
                    <h2 style="background-color:rgba(1,1,1,0.7)";><b>Contact an Agency</b></h2>
                    <br>
                </div04>
                <?php
                    //LINK CONNECTION STABLISHED WITH DATABASE
                    //LIST WITH CONTACT INFORMATION PRINTED
                   $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());   


                //Agency 1 Info
                   $sql = "select * from agencies where `AgencyId`= 1";
                   $result = mysqli_query($link, $sql) or die("SQL Error");
				   
				   $datatableName = ["Agency ID:","Address:","City:","Province:","Zip Code:","Country:","Phone:","Fax:"];
                   $datatable = "<table>";
				   
					
                   while($row = mysqli_fetch_assoc($result))
                   {

                      $datatable .= "<tr>";
					  $i=0;
                      foreach ($row as $col)
					  
                      {

                         $datatable .= "<tr><td>$datatableName[$i]</td><td>$col</td></tr>";
						 $i++;

                      }

                      $datatable .= "</tr>";
                   }
                   $datatable .= "</table>";

                    //Agency 2 Info
                   $sql = "select * from agencies where `AgencyId`= 2";
                   $result = mysqli_query($link, $sql) or die("SQL Error");

                   $datatable0 = "<table>";
                   while($row = mysqli_fetch_assoc($result))
                   {

                      $datatable0 .= "<tr>";
            $i=0;
                      foreach ($row as $col)
            
                      {

                         $datatable0 .= "<tr><td>$datatableName[$i]</td><td>$col</td></tr>";
             $i++;
                      }
                      $datatable0 .= "</tr>";
                   }
                   $datatable0 .= "</table>";

                 //Agents from Agency 1
                   $sql = "SELECT `AgtFirstName`,`AgtMiddleInitial`,`AgtBusPhone`,`AgtEmail`, `AgtPosition`
                   FROM `agents` WHERE `AgencyId`= 1";

                   $result = mysqli_query($link, $sql) or die("SQL Error");


                   $datatable1 = "<table>";
                   while($row = mysqli_fetch_assoc($result))
                   {

                      $datatable1 .= "<tr>";
                      foreach ($row as $col)
                      {
                         $datatable1 .= "<td>$col</td>";
                      }

                      $datatable1 .= "</tr>";
                   }
                   $datatable1 .= "</table>";

                    //Agents from Agency 2
                   $sql = "SELECT `AgtFirstName`,`AgtMiddleInitial`,`AgtBusPhone`,`AgtEmail`, `AgtPosition`
                   FROM `agents` WHERE `AgencyId`= 2";

                   $result = mysqli_query($link, $sql) or die("SQL Error");


                   $datatable2 = "<table>";
                   while($row = mysqli_fetch_assoc($result))
                   {

                      $datatable2 .= "<tr>";
                      foreach ($row as $col)
                      {
                         $datatable2 .= "<td>$col</td>";
                      }

                      $datatable2 .= "</tr>";
                   }
                   $datatable2 .= "</table>";

                   mysqli_close($link);

                    //Print All tables
                   print("<div02>");
                   print("<u>Agency Info:</u>");
                   print($datatable);
                   print("<br");
                   print("<u>Agents Info:</u>");
                   print($datatable1);

                   print("<br/><br/>");

                   print("<br><u>Agency Info:</u>");
                   print($datatable0);
                   print("<u>Agents Info:</u>");
                   print($datatable2);
                   print("</div02>");
                ?>    
</td>
</tr>
</table>    
            </div><!-- section ends --> 
            

            <div id="footer"><!-- footer starts --> 
                
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>
                
            </div><!-- footer ends --> 
        </div> <!-- wrap ends -->  
    </body>
</html>