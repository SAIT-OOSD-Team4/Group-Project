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
        
        <title>Register with us</title>
           
    </head>
    
    <body onload="tables()">
        <div id=wrap>
            
            <div id="header">
                <?php
                    $title = "Register with Us";
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
                <br /><br /><br /><br />
                <form name="info" onsubmit="return verify_all();" method="get" action="bouncer.php">
                     
                    <!--- Row One --->
                    <div02>
                        <p style="color:cyan"><b>Contact Information</b></p>
                        <hr><!---Horizontal rule --->
                        <table>
                            <col width="200px">
                            <col width="15px">
                            <col width="350px">

                            <tr> 
                                <td class="alignRight">First Name</td>
                                <td>-</td>
                                <td><input type="text" name="first_name" size="45px"></td>
                            </tr>
                            <tr> 
                                <td class="alignRight">Last Name</td>
                                <td>-</td>
                                <td><input type="text" name="last_name" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Address</td>
                                <td>-</td>
                                <td><input type="text" name="address" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Province</td>
                                <td>-</td>
                                <td><input type="text" name="province" size="45px"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Postal Code</td>
                                <td>-</td>
                                <td><input type="text" name="postal" size="20px" onchange="verify_postal()"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Phone Number</td>
                                <td>-</td>
                                <td><input type="text" name="phone" size="20px" onchange="verify_phone()"></td>
                            </tr>
                            <tr>
                                <td class="alignRight">Email</td>
                                <td>-</td>
                                <td><input type="text" name="email" size="45px" onchange="verify_email()"></td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="checkbox" name="accept terms" onchange="verify_accept_terms()"> 
                                    Yes, I accept the terms:
                                </td>
                            </tr>
                        </table>
                    </div02>
    
                    
                    <!--- Row Two --->
                    <div02>
                        <p style="color:cyan"><b>Payment Information</b></p>
                        <hr><!---Horizontal rule --->
                        <table>
                            <col width="200px">
                            <col width="15px">
                            <col width="350px">

                            <tr> 
                                <td class="alignRight">Subscription Type</td>
                                <td>-</td>
                                <td><select>
                                    <option value="option1">Daily Format</option>
                                    <option value="option2">Weekely Format</option>
                                    <option value="option3">Monthly Format</option>
                                    <option value="option4">All Formats</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="alignRight">Contact Method</td>
                                <td>-</td>
                                <td><select>
                                    <option value="phone">By Phone</option>
                                    <option value="email">By Email</option>
                                    <option value="mail">By Mail</option>
                                    <option value="all">All Fortmats</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="alignRight">More Subscriptions</td>
                                <td>-</td>
                                <td>
                                    <div>
                                        <input type="checkbox" value="blog" name="Blog">Travel Experts Blog<br>
                                        <input type="checkbox" value="magazine" name="Magazine">Travel Experts Magazine<br>
                                        <input type="checkbox" value="kids" name="Kids">Travelling Kids>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div02>
                    

                    <!--- Row Three -->
                    <div02>
                        <p style="color:cyan" ><b>Additonal Information</b></p>
                        <hr><!---Horizontal rule --->
                        <table >
                            <col width="200px">
                            <col width="15px">
                            <col width="350px">

                            <tr> 
                                <td class="alignRight">Your Message</td>
                                <td>-</td>
                                <td>
                                    <textarea name="comments" cols="40" rows="8">Enter message here
                                    </textarea>
                                </td>
                            </tr>   
                        </table>
                    </div02>
                    
                    <br/><br/><br/><br/><br/>
                    
                    <!---Submit-Reset and Home Buttons --->
                    <div02 style="float:left; background-color:transparent;"> 
                        <input type="submit" onclick="return confirm('Do you want to submit the information?')" style="width:100px; height:25px;">
                        <br /><br />
       
                        <input type="reset"  onclick="return confirm('Do you want to reset all?')" style="width:100px; height:25px;">
                        <br /><br />
                        
                        <a href="index.php">
                        <img src="Images/home.png" alt="return home" style="width:100px; height:25px;"></a>
                    </div02>
                    
                </form>
            </div><!--ending of section -->
                    

            <div id="footer">
                <?php
                    include("footer.php");
                ?>
            </div>
        </div><!--ending of wrap -->
    </body>
</html>
            