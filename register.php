<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: Nov 21,2014
Assignment: PROJ207 Threaded Workshop Project
-->

<?php
    //calling the php session
    session_start();
    if (!isset($_SESSION['loggedin']))
    {
        $_SESSION['pagename'] = 'register.php';
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
                
                <?php
                    //include header php file
                    $title = "register with us";
                    include("header.php");
                ?>
                
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <?php
                    //include navigation php file
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
                                <td class="alignRight">First name</td>
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
                                <td class="alignRight">Postal code</td>
                                <td>-</td>
                                <td><input type="text" name="CustPostal" size="20px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Home phone number</td>
                                <td>-</td>
                                <td><input type="text" name="CustHomePhone" size="20px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Business phone number</td>
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
                                <td class="alignRight">Repeat password</td>
                                <td>-</td>
                                <td><input type="password" name="password_Rep" size="45px"></td>
                            </tr>
                            <tr> 
                                <td colspan="3" align="right">At least 8 characters, a lowercase, an uppercase and a number</td>
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
                            </tr>
                        </table>
                    </div02>
                </form>
                
            </div><!-- section ends --> 
            
            <div id="sideNav"><!-- sideNav starts --> 
              
                <div03 style="padding:10px; float:left;">
                    
                    <!--Reload the form and display error message if found-->
                    <h3>Please complete every field</h3><br/>
                    
                    <?php
                    if (isset($_SESSION['errorMessage']))
                    {
                        echo $_SESSION['errorMessage'];
                    }
                    ?>
                    <br/><br/><br/>
                    <img src="Images/aux01.jpg" alt="Mountain View" style="width:250px;height:150px">
                    <br/>
                    <img src="Images/aux02.jpg" alt="Mountain View" style="width:250px;height:150px">
                    
                </div03>
                
            </div><!-- sideNav ends --> 
            
            <div id="footer"><!-- footer starts --> 
                
                <?php
                    include("footer.php");
                ?>
            </div><!-- footer ends --> 
            
        </div> <!-- section ends -->  
    </body>
</html>
            