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
        $_SESSION['pagename'] = 'addAgentForm.php';
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
                
                <br /><br />
                <form name="info" onsubmit="return verify_all();" method="get" action="bouncer.php">
                     
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
                                <td><input type="text" name="CustPostal" size="20px" onchange="verify_postal()"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Home Phone Number</td>
                                <td>-</td>
                                <td><input type="text" name="CustHomePhone" size="20px" onchange="verify_home_phone()"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Business Phone Number</td>
                                <td>-</td>
                                <td><input type="text" name="CustHomePhone" size="20px" onchange="verify_business_phone()"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Email</td>
                                <td>-</td>
                                <td><input type="text" name="CustEmail" size="45px" onchange="verify_email()"></td>
                            </tr>
                            <tr>
                                <td>Agent Id</td>
                                <td>:</td>
                                <td><select name="AgentId">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4">5</option>
                                    <option value="4">6</option>
                                    <option value="4">7</option>
                                    <option value="4">8</option>
                                    <option value="4">9</option>
                                    </select>
                                </td>
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
                                <td><input type="text" name="userid" size="45px"></td>
                            </tr>
                            <tr> 
                                <td class="alignRight">Password</td>
                                <td>-</td>
                                <td><input type="password" name="password" size="45px"></td>
                            </tr>
                            <tr> 
                                <td colspan="3" align="center">between 3-8 characters</td>
                            </tr>
                        </table>
                
                    </div02>
                
                    <!-- Row Three -->
                    <div02>
                        <h4><b>Additional Information</b></h4>
                        <hr>
                        <table >
                            <col width="200px">
                            <col width="15px">
                            <col width="350px">

                            <tr> 
                                <td class="alignRight">Your Message</td>
                                <td>-</td>
                                <td>
                                    <textarea name="comments" cols="40" rows="4">Enter message here
                                    </textarea>
                                </td>
                            </tr>   
                        </table>
                    </div02>

                    <!---Submit-Reset and Home Buttons -->
                    <div02 style="float:left; background-color:transparent;"> 
                        <input type="submit" onclick="return confirm('Do you want to submit the information?')" 
                               style="width:100px; height:25px;">
                        <br /><br />
       
                        <input type="reset"  onclick="return confirm('Do you want to reset all?')" style="width:100px; height:25px;">
                        <br /><br />
                        
                        <a href="index.php">
                        <img src="Images/home.png" alt="return home" style="width:100px; height:25px;"></a>
                    </div02>
                </form>
        
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
            