<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: Nov 10,2014
Assignment: CPRG210 - Web Application Concepts
-->

<?php

    //function to receive associative array containing customer data. 
    //It will connect the travelexperts database, loop though each item in the array
    //(“INSERT” SQL statement) 
    function insertCustomer($customerdata)
    {   
        $sql = "INSERT INTO customers values (NULL, '$customerdata[CustomerId]', '$customerdata[CustFirstName]',
        '$customerdata[CustLastName]', '$customerdata[CustAddress]','$customerdata[CustCity]',
        '$customerdata[CustProv]', '$customerdata[CustPostal]', '$customerdata[CustCountry]', '$customerdata[CustHomePhone]',
        '$customerdata[CustEmail]', '$customerdata[CustBusPhone]', '$customerdata[AgentId]')";
        
        $link = mysqli_connect("localhost", "root","","travelexperts") or die("Error: ".mysqli_connect_error());
        
        $result = mysqli_query($link,$sql) or die("Query Error...". mysqli_error($link));
      
        mysqli_close($link);//close connection link  
        return $result;//return BOOL if inser was successful or not
    }


/*
    function verifylogin ($u, $p)
    {
        $link = mysqli_connect("localhost", "root","","travelexperts") or die("Error: ".mysqli_connect_error());
        $sql = "SELECT password FROM users WHERE userid='$u'";
        $results = mysqli_query ($link,$sql) or die ("SQL Error:".mysqli_error());
        
        if ($pwd = mysqli_fetch_row($results))
        {
            if($pwd[0] == $p)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
        else 
        {
            return false;
        }
    }
    */
?>