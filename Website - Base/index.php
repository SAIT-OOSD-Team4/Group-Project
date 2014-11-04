<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: October 30,2014
Assignment: HTML/CSS/Javascript
-->


<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Exo:300,400,800' 
              rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Main Page</title>
             
    </head>

    <body onload="tables();askAndDisplayName()">
        <div id=wrap>
            
            
            <div id="header">
                <?php
                    $title = "welcome to Travel Experts";
                    include("header.php");
                ?>
                <!--<br /><h1>welcome to Travel Experts</h1>
                <p01 class="right" id="userName">Travel make just for you<p01><br /><!--Display user's name-->     
            </div>

            <div id="nav">
                <br /><br />
                <p style="font-size:15px; padding:20px; color:white; background-color:black"><b>Explore national destinations</b></p>
                <p id="picture"></p>
                <p style="font-size:15px; padding:20px; color:white; background-color:black"><b>Canada</b></p>
                
            </div>

            <div id="section">
                
                
                <!--<div onmouseover="toggleMe()" onmouseout="toggleMe()">
                Some Text
                </div>
                <img src="IMAGE URL" alt="IMAGE ALT" id="Image1" style="display:none;"/>-->
                
                
                <br />
                
                <h2>Our Vision</h2>
                <p style="background-color:rgba(1,1,1,0.5); border-radius: 15px; padding:15px;">
                    Travel is the movement of people between relatively distant 
                    geographical locations, and can involve travel by foot, bicycle, 
                    automobile, train, boat, airplane, or other means, with or 
                    without luggage. 
                </p>
                
                <h2>Our Compromise</h2>
                <p style="background-color:rgba(1,1,1,0.5); border-radius: 15px; padding:15px;">
                    Travel is the movement of people between relatively distant 
                    geographical locations, and can involve travel by foot, bicycle, 
                    automobile, train, boat, airplane, or other means, with or 
                    without luggage, and can be one way or round trip.
                </p>
                
                <br />
                <?php
                    //printing welcome message according to time of day
                    date_default_timezone_set("america/edmonton");//setting the time zone

                    $date = date("G");
                    if ($date<=12)
                    {
                        print("Good Morning");
                    } 
                    else if ($date <=18) 
                    {
                        print ("Good Afternoon");
                    }
                    else 
                    {
                        print ("Good Evening");
                    }

                    //print("current time:".time()."<br />"); //desired format: Monday November 3, 2014 -- 10:22>11 am
                    //$date = date("l F j,Y -- g:i:s A");
                    //print("Date: $date<br/>");
                 
                ?>
                <br />
                <div03>
                    <table>
                        <col width="150">
                        <tr>
                            <td><img src="Images/travel1.png" width="150" height="300"></td>
                            <td><img src="Images/travel2.png" width="150" height="300"></td>
                            <td><img src="Images/travel3.png" width="150" height="300"></td>
                            <td><img src="Images/travel4.png" width="150" height="300"></td>
                        </tr>
                    </table>
                </div03>
                
                <!-- table for contact and register form -->
                <table style="float:right;">
                    <col width="150">
                    <col width="150">
                    <tr>
                        <td><a href="contact.php">
                            <img src="Images/contact.gif" alt="contact button" width="150" height="40"></a></td>
                        <td><a href="register.php">
                            <img src="Images/register.gif" alt="register button" width="150" height="40"></a></td>
                        <td><a href="links.php">
                            <img src="Images/register.gif" alt="links button" width="150" height="40"></a></td>
                    </tr> 
                </table>
            </div>

            <div id="footer">
                <?php
                    include("footer.php");
                ?>
            </div>
        </div>  
    </body>
</html>

