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
				$link = mysqli_connect("localhost", "root", "", "travelexperts") 
				or die("Connection Error: " . mysqli_connect_error());   
				$sql = "select * from agencies";
				$result = mysqli_query($link, $sql) or die("SQL Error");
  
				$orderedlist = "<ul>";
	
				while($row = mysqli_fetch_row($result))
				{
				$orderedlist.= "<br><ol type =i>";
	
					foreach ($row as $col)
		
					{
					$orderedlist .= "<li> $col </li>";
					}
					$orderedlist .= "</ol>";
				}
	
				$orderedlist .= "</ul>";

				mysqli_close($link);
				print($orderedlist);
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