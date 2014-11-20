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
            
            <div id="sideNav"><!-- sideNav starts --> 
                <!-- sideNav content goes here --> 
                <?php
                    include("sideNavigation.php");
                ?>
            </div><!-- sideNav ends --> 
            

            <div id="section"><!-- section starts -->
                <div02>

                <table border="5">
                <tr>
                <td>
                <!----<img src="flowers-3.jpg"> ---> 
                </td>
                <td>
                <form name="stuff" method="post" action="addcust.php" onsubmit="return edit_all();">
                
                    <table>
                        <tr>
                            <td align="right">
                                Flight: <input type="checkbox" name="flight">
                            </td>

                            <td align="left">
                                Flight + Hotel: <input type="checkbox" name="fligt+hotel">
                            </td>

                            <td align="right">
                                Cruise: <input type="checkbox" name="cruise">
                            </td>

                            <td align="left">
                                Cruise + Hotel : <input type="checkbox" name="cruise+hotel">
                            </td>
                            <td align="right">
                                Rentals: <input type="checkbox" name="rentals">
                            </td>
                            <td align="left">
                                Extras: <input type="checkbox" name="rentals">
                            </td>
                        </tr>


                        <tr>
                        <td align="right">Travelling From:</td>
                        <td>
                        <input type="text" name="from" size="30" maxlength="30" onchange="from();"> </td></tr>

                        <tr>
                        <td align="right">Travelling To:</td>
                        <td>
                        <input type="text" name="to" size="30" maxlength="30" onchange="to();"> </td></tr>





                <tr>
                <td align="right">First Name:</td>
                <td>
                <input type="text" name="CustFirstName" size="30" maxlength="30" onchange="firstname();"> </td></tr>

                <tr>
                <td>Last Name :</td>
                <td> <input type="text" name="CustLastName" size="30" maxlength="30" onchange="lastname();"> </td>
                </tr>

                <tr>
                <td>Address :</td>
                <td> <input type="text" name="CustAddress" size="30" maxlength="30" onchange="lastname();"> </td>
                </tr>

                <tr>
                <td>City :</td>
                <td> <input type="text" name="CustCity" size="30" maxlength="30" onchange="lastname();"> </td>
                </tr>

                <tr>
                <td>Province :</td>
                <td> <input type="text" name="CustProv" size="30" maxlength="30" onchange="lastname();"> </td>
                </tr>

                <tr>
                <td>Postal Code:</td>
                <td> <input type="text" name="CustPostal" size="30" maxlength="30" onchange="verify();"></td>
                </tr>

                <tr>
                <td>Country :</td>
                <td> <input type="text" name="CustCountry" size="30" maxlength="30" onchange="lastname();"> </td>
                </tr>

                <tr>
                <td>Phone number:</td>
                <td> <input type="text" name="CustHomePhone" size="30" maxlength="30" onchange="check_phone();"> </td>
                </tr>

                <tr>
                <td>Business number:</td>
                <td> <input type="text" name="CustBusPhone" size="30" maxlength="30" onchange="check_phone();"> </td>
                </tr>

                <tr>
                <td>E-mail:</td>
                <td> <input type="text" name="CustEmail" size="30" maxlength="30" onchange="check_phone();"> </td>
                </tr>

                <tr>
                <td>Agent :</td>
                <td> <input type="text" name="AgentId" size="30" maxlength="30" onchange="agency();"> </td>
                </tr>


                <tr>
                <td>Credit Card Number:</td>
                <td> <input type="text" name="credit" size="30" maxlength="30" onchange="credit();"> </td>
                </tr>

                <tr>
				<td>Payment Method:Type of Card</td>
				</tr>
				<tr>
				<td align="right"><input type="radio" name="American Express">
				<img src="amex.gif">
				</td>
			
				<td align="left"><input type="radio" name="Discover"> 	
				<img src="discover.jpg">
                      		</td> 
                 <tr>
				<td align="right"><input type="radio" name="Mastercard">
				<img src="mastercard.gif">
	                        </td>

				<td align="left"><input type="radio" name="Visa"> 
				<img src="visa.gif">
				</tr>
	                        </td>
				</tr>
				
<tr>				
				
						<tr>
<td>How Did You Hear About Us :</td>
<td align="left"> <select name="Reference" onchange="verify();">
             <option selected>Family/Friend</option>
             <option>Other</option> </td>
                </tr>






                <tr><td>
                Travelling Date: </td> <td align="left"> <input type="date" name="going" onchange="verify();"><br></td> </tr>

                <tr> <td>
                Returning Date:  </td> <td align="left"> <input type="date" name="returning" onchange="verify();"><br>
                </td>
                </tr>

                <tr><td>
                Passenger Medical Information:  </td><td align="left"><textarea name="Comments" rows="3" cols="30" onchange="verify();">
                          </textarea><br>
                </td></tr>	

                       <tr> <td align="right">
                     <input type="submit" id="buttonNormal" value="Send data" onclick="return putdata();">
                 <input type="reset" id="buttonNormal" value="Clear" onclick="return putdata();">
                </td></tr>
                </tr>
                </table>
            </div><!-- div02 ends -->
            
            </form>


            </td>
            </tr>
            </table>
            </div><!-- section ends --> 
            

            <div id="footer"><!-- footer starts --> 
                
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>
                
            </div><!-- footer ends --> 
            
            
        </div> <!-- header ends -->  
		
		
		
		
		
		<!----- SQL  Stuuf on addcust.php------>
	
		
		
		

        
    </body>
</html>

