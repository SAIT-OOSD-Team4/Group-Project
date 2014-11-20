<!--

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
            

            <div id="section"><!-- section starts -->
                
                <!-- section content goes here --> 
			

<?php
	//LINK CONNECTION STABLISHED WITH DATABASE
	//LIST WITH CONTACT INFORMATION PRINTED
   $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());   
   
   
//Agency 1 Info
   $sql = "select * from agencies where `AgencyId`= 1";
   $result = mysqli_query($link, $sql) or die("SQL Error");
  
  
   $datatable = "<table>";
   while($row = mysqli_fetch_assoc($result))
   {
   
      $datatable .= "<tr>";
	  foreach ($row as $col)
	  {
	     $datatable .= "<td>$col</td>";
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
	  foreach ($row as $col)
	  {
	     $datatable0 .= "<td>$col</td>";
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
   print("<u>Agency Info:</u>");
   print($datatable);
   print("<u>Agents Info:</u>");
   print($datatable1);
   print("<br><u>Agency Info:</u>");
   print($datatable0);
   print("<u>Agents Info:</u>");
   print($datatable2);
?>
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