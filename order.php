<!--
Student:Jasmeen Kathuria & Jose Marcano
Course Module: CPRG210
Date: October 30,2014
Assignment: Project Workshop 1 
-->

<?php
    session_start();
    if (!isset($_SESSION['loggedin']))
    {
        $_SESSION['pagename'] = 'order.php';
        //header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Order Page</title>

    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php
                    $title = "Booking Page";
                    include("header.php");
                ?>
            
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <!-- nav content goes here --> 
                <?php
                    include("navigation.php");
                ?>
                


            </div><!-- nav ends --> 
            
            <!-- ORDER PAGE REGISTRATION FORM
            INFO INPUT FOR BOOKING AND CUSTOMER DOING THE BOOKING --> 

            <div id="section"><!-- section starts -->
                <div02>

                <?php 
                // Darcie Milliken : Store the package ID in a variable and display the details of the chosen package 

                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $package_ID = substr($actual_link, -1); 
                print "You have selected package # ".$package_ID;
                $link = mysqli_connect("localhost", "root", "", "travelexperts") 
                        or die("Connection Error: " . mysqli_connect_error());   
                $sql = "SELECT * FROM `packages` WHERE `PackageId`= $package_ID";

                $result = mysqli_query($link, $sql) or die("SQL Error");
                // LM wrote this block here
                print("<table cellpadding = '5' cellspacing='5' style='float:right;'>");
                print("<col width='200px'>");
                print("<col width='200px'>");
                print("<col width='100px'>");
                print("<col width='100px'>");
                print("<col width='100px'>");
                print("<col width='00px'>");

                // DM: Printing the first row of table with headers      
                print("<strong>");
                print("<tr>");
                print("<td style='background-color:rgba(1,1,1,0.9);'> Package Name </td>");
                print("<td style='background-color:rgba(1,1,1,0.9);'> Description </td>");
                print("<td style='background-color:rgba(1,1,1,0.9);'> Departure Date </td>");
                print("<td style='background-color:rgba(1,1,1,0.9);'> Return Date </td>");
                print("<td style='background-color:rgba(1,1,1,0.9);'> Price </td>");
                print("<td>  </td>");             // Order Buttons will go in this column.
                print("</tr>");
                print("</strong>");

                // DM: Printing packages with valid dates from the database. Styles by LM. 
                while($selected_package = mysqli_fetch_assoc($result))
                    {
                        
                        print("<tr>");
                        echo "<td style='background-color:rgba(1,1,1,0.7); color:#99FF33;'> " . $selected_package["PkgName"] . "</td>";
                        echo "<td style='background-color:rgba(1,1,1,0.5);'> " . $selected_package["PkgDesc"] . "</td>";
                       
                        // Formatting the dates to look nicer
                        $start_date = date_create($selected_package["PkgStartDate"]);
                        $start_date = date_format($start_date, 'M j Y');
                       
                        $end_date = date_create($selected_package["PkgEndDate"]);
                        $end_date = date_format($end_date, 'M j Y');

                        echo "<td style='background-color:rgba(1,1,1,0.5);'> " . $start_date . "</td>";

                        echo "<td style='background-color:rgba(1,1,1,0.5);'> " . $end_date . "</td>";

                        // let's try and format the prices here
                        $formatted_price = number_format((float)$selected_package["PkgBasePrice"], 2, '.', '');
                        echo "<td style='background-color:rgba(1,1,1,0.5);'> $" .  $formatted_price . "</td>";

                        print("</tr>");
                    }
                ?>
            </div02>
                <form name="registerBooking" action="validateBook.php">
                    
                    <div02>
                        <h4><b>Product Selection</b></h4>                        
                        <input type='hidden' name='PackageId' value="<?php echo "$package_ID"; ?> /> 
                        <hr><!-- Horizontal rule -->
                        <table style="margin-top:10px; margin-bottom:10px;">
                            <col width="100px">
                            <col width="100px">
                            <col width="100px">
                            <col width="100px">
                            <col width="100px">

                            <tr >
                                <td align="center"> <br><input type="radio" name="flight-product"> Flight
                                </td>
                                 <td align="center"> <br><input type="radio" name="flight-product"> Flight + Hotel
                                </td>
                                <td align="center"><br><input type="radio" name="cruise-product">  Cruise
                                </td>
                                <td align="center"> <br><input type="radio" name="cruise-product"> Cruise + Hotel
                                </td>
                                <td align="center"> <br><input type="radio" name="rental"> Car Rental
                                </td>
                            </tr>


                        </table>

                        <h4><b>Destination information</b></h4>
                        <hr><!-- Horizontal rule -->
                        <table>
                            <tr>
                                <td align="right">Travelling From:</td>
                            <td><input type="text" name="from" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">Travelling To:</td>
                            <td>
                                <input type="text" name="to" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">First Name:</td>
                            <td>
                            <input type="text" name="CustFirstName" size="30" maxlength="30" > </td></tr>

                            <tr>
                                <td align="right">Last Name :</td>
                            <td> <input type="text" name="CustLastName" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">Address :</td>
                            <td> <input type="text" name="CustAddress" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">City :</td>
                                <td><input type="text" name="CustCity" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">Province :</td>
                                <td> <input type="text" name="CustProv" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">Postal Code:</td>
                            <td> <input type="text" name="CustPostal" size="30" maxlength="30"></td>
                            </tr>

                            <tr>
                            <td align="right">Country :</td>
                            <td> <input type="text" name="CustCountry" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">Phone number:</td>
                                <td> <input type="text" name="CustHomePhone" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">Business number:</td>
                                <td> <input type="text" name="CustBusPhone" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td align="right">E-mail:</td>
                                <td> <input type="text" name="CustEmail" size="30" maxlength="30"> </td>
                            </tr>

                            <tr>
                                <td>Passenger Medical Information
                                </td>
                                <td align="left"><textarea name="Comments" rows="3" cols="30"></textarea></td>
                            </tr>
							<tr>
							<td>
                            Number of Passenger: 
							<select name="Passengers" id="Passengers">
							<option selected>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							</select>
							</td></tr>
							
							<tr>
							<td>
                            Trip Type: 
							<select name="TripType" id="TripType">
							<option selected>L</option>
							<option>B</option>
							<option>G</option>
							
							</select>
							</td></tr>
                        </table>

                        <h4><b>Payment Information</b></h4>
                        <hr><!-- Horizontal rule -->
                        <table>
                            <tr>
                                <td align="right">Credit Card Number:</td>
                                <td> <input type="text" name="credit" size="30" maxlength="30"></td>
                            </tr>

                            <tr>
                                <td align="right">Payment Method:Type of Card</td>
                            </tr>
		
							
                        </table>
                        
                        <table style="float:right; padding-right:10px;">
                            <tr> 
                                <td><input type="submit" id="buttonNormal" value="Save" ></td>
                                <td><input type="reset" id="buttonNormal" value="Clear" onclick="return confirm('Do you want to reset all?')"></td>
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
                    <img src="Images/aux03.jpg" alt="Mountain View" style="width:250px;height:150px">
                    <br/>
                    <img src="Images/aux04.jpg" alt="Mountain View" style="width:250px;height:150px">
                    
                </div03>
            </div><!-- sideNav ends -->
            
            <div id="footer"><!-- footer starts --> 
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>  
            </div><!-- footer ends --> 
            
        </div> <!-- header ends -->  

    </body>
</html>

