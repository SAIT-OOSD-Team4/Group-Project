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
            <col width="150px">
            <col width="300px">
                 
            <tr>
                <td><a href="index.php" id="buttonNav">Home</a></td>
                <td><a href="contact.php" id="buttonNav" >Contact Us</a></td>
                <td><a href="register.php" id="buttonNav">Register</a></td>
                <td><a href="packages.php" id="buttonNav">Packages</a></td>
                <td><a href="order.php" id="buttonNav">Order</a></td>
                <td>
                    <!--list displaying additional links-->
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