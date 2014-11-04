<!-- 
- In the second cell write an anchor tag. Set the href attribute value by generating a numbered name for the HTML page it points to (ie. page1.php, page2.php, etc.). Create dummy pages for page1.php through page6.php so you can test the links.-->

<!DOCTYPE>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Exo:300,400,800' 
              rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        <!--<link href='variables.php' rel='prev' type='text/css'><!--varibles-->
        
        <title>Links Menu</title>
    </head>
    <body>
        <div id=wrap>
            
            <div id="header">
                <?php
                    $title="Additional Links";
                    include("header.php");
                ?>
            </div>

            <div id="nav">
                <br /><br />
                <p style="font-size:15px; padding:20px; color:white; background-color:black"><b>Explore national destinations</b></p>
                <p id="picture"></p>
                <p style="font-size:15px; padding:20px; color:white; background-color:black"><b>Canada</b></p>
                
            </div>

            <div id="section">
                <?php 
                    print("<table id='linkcells'>");

                        for ($counter=1; $counter<7; $counter++)
                        {
                            print("<tr>");
                            print("<td id='linkcells'>$counter</td>");
                            print("<td id='linkcells'><a href='page$counter.php'>Link to page $counter</td>");
                            print("</tr>");
                        }  
                    print("</table>");
                ?>
                
            </div>
        

            <div id="footer">
                <?php
                    include("footer.php");
                ?>
            </div>
        </div> <!--end wrap
    </body>
</html>
