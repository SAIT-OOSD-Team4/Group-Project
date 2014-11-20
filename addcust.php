<!--- Jasmeen Kathuria ------->

<?php


require 'confirmation.php';

      {  
         $fields =["CustFirstName", "CustLastName", "CustAddress", "CustCity","CustProv","CustPostal","CustCountry","CustHomePhone","CustBusPhone","CustEmail","AgentId"];
         
		 $addcustdata = array();
         
		 foreach ($fields as $field_name) 
		 {
            $data[$field_name] = $_REQUEST[$field_name];
			
			}
      }
	  
	      
         $fields =["from", "to", "going", "returning"];
         
		 $booking = array();
         
		 foreach ($fields as $field_name) 
		 {
            $data[$field_name] = $_REQUEST[$field_name];
			
			}
			
			
      
	  
	      // print_r($booking);// 
		  
	 
?>

