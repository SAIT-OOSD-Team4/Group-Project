<!--
Student:Jasmeen Kathuria 
Course Module: CPRG210
Date: October 30,2014
Assignment: Project Workshop 1 
-->

<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Main Page</title>
             
<!-----Form Javascript --------->
<script language="javascript">

function putdata()
		{
		
			var x;
			x=confirm('Are you sure you want to continue') 
			if(x==true)
			{
				x='ok';
			}
			else
			{
				return false;
			}
		}
		
		function edit_all()
			{
				ok=true;
				firstname();
		        verify();
				check_phone();
				return ok;
			}
			
		
		<!-----First Name Code ----->
		function name()
		{
	   //Name Data Has Been Entered
        var x = document.forms["stuff"]["firstname"].value;
         if (x == null || x == "") {
        alert("Name must be filled out");
        ok=false;
          }
	       }
		   
		   
		   	//Last Name Code
		function name()
		{
	   //Name Data Has Been Entered
        var x = document.forms["stuff"]["firstname"].value;
         if (x == null || x == "") {
        alert("Name must be filled out");
        ok=false;
          }
	       }
		
		
		//Another Way to do Code
		/*{
		
			var r=/^[A-Za-z]+$/;	
			var x=document.stuff.name.value;
			if(!r.test(x)) 
			{alert('name is alphabetic only.....'); console.log(name); ok=false;}
			
		}	*/
		
		
		
		//Postal Code 
		function verify()
		{
	   //Postal Code Has Been Entered
        var x = document.forms["stuff"]["verify"].value;
         if (x == null || x == "") 
		 {
        alert("Wrong Postal Code");
        ok=false;
          }
	       }
		
		
		//Phone 
		function check_phone()
		{
	   //Phone Number Has Been Entered
        var x = document.forms["stuff"]["check_phone"].value;
         if (x == null || x == "") {
        alert("Phone Number must be filled out");
        ok=false;
          }
	       }

	</script>
<!-----Form Javascript ends ------>







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
            
            <div id="section"><!-- section starts -->
                
                <form name="stuff" method="post" action="addcust.php" onsubmit="return edit_all();">
                    <div02>
                        <h4><b>Product Selection</b></h4>
                        <hr><!-- Horizontal rule -->
                        <table style="margin-top:10px; margin-bottom:10px;">
                            <col width="100px">
                            <col width="100px">
                            <col width="100px">
                            <col width="100px">
                            <col width="100px">

                            <tr>
                                <td align="center"> Flight<br><input type="radio" name="flight">
                                </td>
                                <td align="center"> Flight-Hotel<br><input type="radio" name="flight+hotel">
                                </td>
                                <td align="center"> Cruise<br><input type="radio" name="cruise">
                                </td>
                                <td align="center"> Cruise-Hotel<br><input type="radio" name="cruise+hotel">
                                </td>
                                <td align="center"> Rentals<br><input type="radio" name="rentals">
                                </td>
                            </tr>
                        </table>

                        <h4><b>Destination information</b></h4>
                        <hr><!-- Horizontal rule -->
                        <table>
                            <tr>
                                <td align="right">Travelling From:</td>
                            <td><input type="text" name="from" size="30" maxlength="30" onchange="from();"> </td>
                            </tr>

                            <tr>
                                <td align="right">Travelling To:</td>
                            <td>
                                <input type="text" name="to" size="30" maxlength="30" onchange="to();"> </td>
                            </tr>

                            <tr>
                                <td align="right">First Name:</td>
                            <td>
                            <input type="text" name="CustFirstName" size="30" maxlength="30" onchange="firstname();"> </td></tr>

                            <tr>
                                <td align="right">Last Name :</td>
                            <td> <input type="text" name="CustLastName" size="30" maxlength="30" onchange="lastname();"> </td>
                            </tr>

                            <tr>
                                <td align="right">Address :</td>
                            <td> <input type="text" name="CustAddress" size="30" maxlength="30" onchange="lastname();"> </td>
                            </tr>

                            <tr>
                                <td align="right">City :</td>
                                <td><input type="text" name="CustCity" size="30" maxlength="30" onchange="lastname();"> </td>
                            </tr>

                            <tr>
                                <td align="right">Province :</td>
                                <td> <input type="text" name="CustProv" size="30" maxlength="30" onchange="lastname();"> </td>
                            </tr>

                            <tr>
                                <td align="right">Postal Code:</td>
                            <td> <input type="text" name="CustPostal" size="30" maxlength="30" onchange="verify();"></td>
                            </tr>

                            <tr>
                            <td align="right">Country :</td>
                            <td> <input type="text" name="CustCountry" size="30" maxlength="30" onchange="lastname();"> </td>
                            </tr>

                            <tr>
                                <td align="right">Phone number:</td>
                                <td> <input type="text" name="CustHomePhone" size="30" maxlength="30" onchange="check_phone();"> </td>
                            </tr>

                            <tr>
                                <td align="right">Business number:</td>
                                <td> <input type="text" name="CustBusPhone" size="30" maxlength="30" onchange="check_phone();"> </td>
                            </tr>

                            <tr>
                                <td align="right">E-mail:</td>
                                <td> <input type="text" name="CustEmail" size="30" maxlength="30" onchange="check_phone();"> </td>
                            </tr>

                            <tr>
                            <td align="right">Agent :</td>
                                <td> <input type="text" name="AgentId" size="30" maxlength="30" onchange="agency();"></td>
                            </tr>
                            <tr>
                                <td>Passenger Medical Information
                                </td>
                                <td align="left"><textarea name="Comments" rows="3" cols="30" onchange="verify();"></textarea></td>
                            </tr>
                        </table>

                        <h4><b>Payment Information</b></h4>
                        <hr><!-- Horizontal rule -->
                        <table>
                            <tr>
                                <td align="right">Credit Card Number:</td>
                                <td> <input type="text" name="credit" size="30" maxlength="30" onchange="credit();"></td>
                            </tr>

                            <tr>
                                <td align="right">Payment Method:Type of Card</td>
                            </tr>
                            
                        </table>
                        
                        <table style="float:right; padding-right:10px;">
                            <tr> 
                                <td><input type="submit" id="buttonNormal" value="Place Order" onclick="return putdata();"></td>
                                <td><input type="reset" id="buttonNormal" value="Clear" onclick="return putdata();"></td>
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

