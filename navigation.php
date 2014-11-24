<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: Nov 21,2014
Assignment: PROJ207 Threaded Workshop Project
-->

<!DOCTYPE html>
<html>

    <head>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <!--Menu/Navigation seccion to be loaded from every page-->
        <title>Side Navigation</title>
    </head>
    <body onload=" dropDownMenu();">
        
        <!--loading buttons for the side menu-->
        <table>
            <col width="150px">
            <col width="150px">
            <col width="150px">
            <col width="150px">
            <col width="450px">
                 
            <tr>
                <td><a href="index.php" id="buttonNav">Home</a></td>
                <td><a href="register.php" id="buttonNav">Register</a></td>
                <td><a href="packages.php" id="buttonNav">Destinations</a></td>
                <td><a href="contact.php" id="buttonNav">About Us</a></td>
                <td style="float:right;">
                    <!--list displaying additional links and access to MyTravel feature-->
                    <ul id="sddm">
                        <li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">MyTravel</a>
                            <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                <a href="#"><d id="nationalDestinations"></d></a>
                            </div>
                        </li>
                    </ul>
                    <div style="clear:both"></div>
                </td>
            </tr>
        </table>
            
    </body>
</html>