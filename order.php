<!--
Order Page Jasmeen Kathuria 
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
               


<table border="3" align="center">
<tr>
<td>
<!--  <img src="flowers-3.jpg">  -->
</td>
<td>
<form name="stuff" method="get" action="bounce.htm" onsubmit="return edit_all();">
<table>
<tr>
<td align="right">First Name:</td>
<td>
<input type="text" name="FirstName" size="30" maxlength="30" onchange="firstname();"> </td></tr>

<tr>
<td>Last Name :</td>
<td> <input type="text" name="LastName" size="30" maxlength="30" onchange="lastname();"> </td>
</tr>

<tr>
<td>Phone number:</td>
<td> <input type="text" name="Phone" size="30" maxlength="30" onchange="check_phone();"> </td>
</tr>
<td>Postal Code:</td>
<td> <input type="text" name="Postal Code" size="30" maxlength="30" onchange="verify();"></td>

<tr>
<td>Agency :</td>
<td> <input type="text" name="Agency" size="30" maxlength="30" onchange="agency();"> </td>
</tr>


<tr>
<td>Credit Card Number:</td>
<td> <input type="text" name="credit" size="30" maxlength="30" onchange="credit();"> </td>
</tr>

<tr>
				<td><u>Payment Method:Type of Card</u></td>
				</tr>
				<tr align="center">
				<td colspan="2"><input type="radio" name="American Express">
				<img src="amex.gif">
				</td>
			
				<td colspan="2"><input type="radio" name="Discover"> 	
				<img src="discover.jpg">
                      		</td>

				<td colspan="2"><input type="radio" name="Mastercard">
				<img src="mastercard.gif">
	                        </td>

				<td colspan="2"><input type="radio" name="Visa"> 
				<img src="visa.gif">
				
	                        </td>
				</tr>

Flight: <input type="checkbox" name="flight"><br>


Flight + Hotel: <input type="checkbox" name="fligt+hotel"><br>


Cruize: <input type="checkbox" name="cruize"><br>


Cruize + Hotel : <input type="checkbox" name="cruize+hotel"><br>

Rentals: <input type="checkbox" name="rentals"><br>

</tr>
</table>

How Did You Hear About Us: <select name="Reference" onchange="verify();">
             <option selected>Family/Friend</option>
             <option>Other</option>
        </select><br>
Travelling Date: <input type="date" name="Start" onchange="verify();"><br>

Returning Date: <input type="date" name="Start" onchange="verify();"><br>

<center>
Passenger Medical Information: <textarea name="Comments" rows="3" cols="30" onchange="verify();">
          </textarea><br>
<input type="submit" id="buttonNormal" value="Send data" onclick="return putdata();">
<input type="reset" id="buttonNormal" value="Clear" onclick="return putdata();">
</center>
</form>


</td>
</tr>
</table>




 
                <!-- section content goes here --> 
                
                
                
                
                
                
                
    
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

