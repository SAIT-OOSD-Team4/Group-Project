<!--

-->


<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Exo:300,400,800' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Main Page</title>
             
    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php
                    $title = "title";
                    include("header.php");
                ?>
            
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <!-- nav content goes here --> 
                <?php
                    include("nav.php");
                ?>
                
            </div><!-- nav ends --> 
            

            <div id="section"><!-- section starts -->
                
                <!-- section content goes here --> 
        
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