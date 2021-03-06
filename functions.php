<!--
Student:Leisy Moliner Hernandez, Jose Marcano, Darcie Milliken, Jasmeen Kathuria
Course Module: CPRG210
Date: October 30,2014
Assignment: PROJ207 Threaded Workshop Project
-->

<?php

    //function to receive associative array containing customer data. 
    //It will connect the travelexperts database, loop though each item in the array
    //(“INSERT” SQL statement) 

	
	//Jose Marcano & Jasmeen Kathuria & Leisy Moliner Hernandez
	//Insert customer without account info(pass&accName)
	//
	
	    function insertCustomer($customerdata)
    {   
        $sql = "INSERT INTO customers values (NULL, '$customerdata[CustFirstName]',
        '$customerdata[CustLastName]', '$customerdata[CustAddress]','$customerdata[CustCity]',
        '$customerdata[CustProv]', '$customerdata[CustPostal]', '$customerdata[CustCountry]', '$customerdata[CustHomePhone]',
		'$customerdata[CustBusPhone]',
        '$customerdata[CustEmail]',  NULL)";
        
        $link = mysqli_connect("localhost", "root","","travelexperts") or die("Error: ".mysqli_connect_error());
        
        $result = mysqli_query($link,$sql) or die("Query Error...". mysqli_error($link));
      
        mysqli_close($link);//close connection link  
        return $result;//return BOOL if inser was successful or not
    }
	//Jose Marcano & Jasmeen Kathuria
    //Inserts Booking to database
		function insertBooking($bookinginfo)
		{
		
		$bookingDate = date("Y-m-d H:i:s");
		$bookingNo= substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,6))),1,6);
		$random = rand(1,500);
			$sql = "INSERT INTO bookings values
			(NULL,
			'$bookingDate',
			'$bookingNo',
			'$bookinginfo[Passengers]',
			NULL,
			'$bookinginfo[TripType]',
			'$bookinginfo[PackageId]'
			)";
        print ("<script> alert($random); </script>");
        $link = mysqli_connect("localhost", "root","","travelexperts") or die("Error: ".mysqli_connect_error());
        
        $result = mysqli_query($link,$sql) or die("Query Error...". mysqli_error($link));
      
        mysqli_close($link);//close connection link  
        return $result;//return BOOL if insert was successful or not

    }
?>



<?php
// Darcie Milliken & Jose Marcano
// November 12 2014
// This file contains functions for the website pages to use. 


function compare_dates($dateDB)
{
	// This function returns true if the given date is later than today
	// Date comes from the database

	$today = date("Y-m-d H:i:s");          // 2001-03-10 17:16:18 (the MySQL DATETIME format)
	$value = strtotime($dateDB) - strtotime($today);
	//print("Today is $today and the package start date is $dateDB and the value is: $value <br>  ");
	if ($value < 0)
	{
		return true;
	}

}  // end function 

?>


<?php
//Jasmeen Kathuria
// This Code is linked to the Order Page (order.php)
    
    //(“INSERT” SQL statement) 
    function addcust($addcustdata)
    {   
        $sql = "INSERT INTO customers values (NULL, '$addcustdata[CustFirstName]',
        '$addcustdata[CustLastName]', '$addcustdata[CustAddress]','$addcustdata[CustCity]',
        '$addcustdata[CustProv]', '$addcustdata[CustPostal]', '$addcustdata[CustCountry]', '$addcustdata[CustHomePhone]',
        '$addcustdata[CustEmail]', '$addcustdata[CustBusPhone]', '$addcustdata[CustPassword]', '$addcustdata[AgentId]')";
        
        $link = mysqli_connect("localhost", "root","","travelexperts") or die("Error: ".mysqli_connect_error());
        
        $result = mysqli_query($link,$sql) or die("Query Error...". mysqli_error($link));
      
        mysqli_close($link);
        return $result;
    }
	
	function addbooking($booking)
    {   
        $sql = "INSERT INTO customers values (NULL, '$addbooking[from]',
        '$addcustdata[to]', '$addcustdata[going]','$addcustdata[returning]')";
        
        $link = mysqli_connect("localhost", "root","","travelexperts") or die("Error: ".mysqli_connect_error());
        
        $result = mysqli_query($link,$sql) or die("Query Error...". mysqli_error($link));
      
        mysqli_close($link);
        return $result;
    }
	
?>