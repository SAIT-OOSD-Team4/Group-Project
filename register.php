<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: October 30,2014
Assignment: Project Workshop HTML/CSS/Javascript 
-->

<?php
    session_start();
    if (!isset($_SESSION['loggedin']))
    {
        $_SESSION['pagename'] = 'register.php';
        //header("Location: login.php");
    }
?>


<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Customer Registration</title>
             
    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php
                    $title = "register with us";
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
                
                <form name="registerCust" action="validateCust.php">
                     
                    <!-- Row One -->
                    <div02>
                        <h4><b>Contact Information</b></h4>
                        <hr><!-- Horizontal rule -->
                        <table>
                            <col width="200px">
                            <col width="15px">
                            <col width="350px">

                            <tr> 
                                <td class="alignRight">First Name</td>
                                <td>-</td>
                                <td><input type="text" name="CustFirstName" size="45px"></td>
                            </tr>
                            <tr> 
                                <td class="alignRight">Last Name</td>
                                <td>-</td>
                                <td><input type="text" name="CustLastName" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Address</td>
                                <td>-</td>
                                <td><input type="text" name="CustAddress" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">City</td>
                                <td>-</td>
                                <td><input type="text" name="CustCity" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Province</td>
                                <td>-</td>
                                <td><input type="text" name="CustProv" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Country</td>
                                <td>-</td>
                                <td><input type="text" name="CustCountry" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Postal Code</td>
                                <td>-</td>
                                <td><input type="text" name="CustPostal" size="20px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Home Phone Number</td>
                                <td>-</td>
                                <td><input type="text" name="CustHomePhone" size="20px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Business Phone Number</td>
                                <td>-</td>
                                <td><input type="text" name="CustBusPhone" size="20px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Email</td>
                                <td>-</td>
                                <td><input type="text" name="CustEmail" size="45px"></td>
                            </tr>
                        </table>
                    </div02>
    
                    
                    <!-- Row Two -->
                    <div02>
                        <h4><b>New Profile Information</b></h4>
                        <hr>
                        <table>
                            <col width="200px">
                            <col width="15px">
                            <col width="350px">

                            <tr> 
                                <td class="alignRight">User ID</td>
                                <td>-</td>
                                <td><input type="text" name="CustUserName" size="45px"></td>
                            </tr>
                            <tr> 
                                <td class="alignRight">Password</td>
                                <td>-</td>
                                <td><input type="password" name="CustPassword" size="45px"></td>
                            </tr>
                            <tr> 
                                <td class="alignRight">Repeat Password</td>
                                <td>-</td>
                                <td><input type="password" name="passwordRep" size="45px"></td>
                            </tr>
                            <tr> 
                                <td colspan="3" align="center">between 3-8 characters</td>
                            </tr>
                        </table>
                
                    </div02>

                    <!---Submit-Reset and Home Buttons -->
                    <div02 style="float:right; background-color:transparent;"> 
                        <table>
                            <col width="110px">
                            <col width="110px">
                            <col width="110px">
                            <tr>
                                <td>
                                    <input type="submit" value="Save" id="buttonNormal"  style="float:right;"/>
                                </td>
                                <td>
                                    <input type="reset" id="buttonNormal" style="float:right;" onclick="return confirm('Do you want to reset all?')">
                                </td>
                                <td>
                                    <a href="index.php">
                                    <input type="button" value="Home" id="buttonNormal"  style="float:right;"/>
                                    </a>
                                    <!--<img src="Images/home.png" alt="return home" style="width:100px; height:25px;"></a>-->
                                </td>
                            </tr>
                        </table>
                    </div02>
                </form>
                
            </div><!-- section ends --> 
            
            <div id="sideNav"><!-- sideNav starts --> 
              
                <div03 style="padding:20px; float:left;">
                    <!--Reload the form and display error message if found-->
                    <h3>Please complete every field</h3><br/>
                    <?php
                    if (isset($_SESSION['errorMessage']))
                    {
                        echo $_SESSION['errorMessage'];
                    }
                    ?>
                </div03>
            </div><!-- sideNav ends --> 
            

            <div id="footer"><!-- footer starts --> 
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>
            </div><!-- footer ends --> 
            
        </div> <!-- section ends -->  
        
    </body>
</html>
            