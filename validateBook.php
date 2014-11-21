<!--
Student:Jose Marcano & Leisy Moliner Hernandez
Course Module: CPRG210
Date: Nov 10,2014
Assignment: CPRG210 - Web Application Concepts
-->

<?php
    session_start();
    if (!isset($_SESSION['loggedin'])){
        $_SESSION['enterCustomer'] = "";
    }
?>


<?php
    include("functions.php");//including funtion for the array

    if (isset($_REQUEST['CustFirstName']))
    {
        $message = "";
        
        //validating first name
        if (empty($_REQUEST['CustFirstName'])) {
            $message .="Enter your First Name<br/>";  
        }
        else {
            //Allows letters and common char
            if(!preg_match("/^[a-z A-Z\,\. -]+$/i", $_REQUEST['CustFirstName']))
            {
                $message .= "Enter a valid First Name<br/>";
            }
        }
        
        
        //validating last name 
        if (empty($_REQUEST['CustLastName'])) {
            $message .="Enter your Last Name<br/>";
        }
        else {
            //Allows only letters
            if(!preg_match("/^[a-z A-Z\,\. -]+$/i", $_REQUEST['CustLastName']))
            {
                $message .= "Enter a valid Last Name<br/>";
            }
        }
        
        //validating agent phone number
        if (empty($_REQUEST['CustCity']))
        {
            $message .="You must enter a city<br/>";
        }
        else 
        {
            if(!preg_match("/^[a-z A-Z]+$/i", $_REQUEST['CustCity']))
            {
                $message .= "Invalid character in city<br/>";
            }
        }
        //validating agent phone number
        if (empty($_REQUEST['CustHomePhone']))
        {
            $message .="Enter a home phone number<br/>";
        }
        else 
        {
            if(!preg_match("/^[0-9\-\.\ \,\/\(\)\+]+$/i", $_REQUEST['CustHomePhone']))
            {
                $message .= "Invalid character in home phone number<br/>";
            }
        }
        
        //validating agent phone number
        if (empty($_REQUEST['CustBusPhone']))
        {
            $message .="Enter a business phone number<br/>";
        }
        else 
        {
            if(!preg_match("/^[0-9\-\.\ \,\/\(\)\+]+$/i", $_REQUEST['CustBusPhone']))
            {
                $message .= "Invalid character in phone number<br/>";
            }
        }
        
        
        //validating agent email number
        if (empty($_REQUEST['CustEmail'])) {
            $message .="Enter your Email<br/>";
        }
        else {
            if(!filter_var($_REQUEST['CustEmail'],FILTER_VALIDATE_EMAIL))
            {
                $message .= "Enter a valid email";
            }
        }
        
        
        //Store error in the session variable $messsage
        $_SESSION['errorMessage'] = $message;
        
        //Checking the value returned by the function and print 
        //a success/fail message to the agent entry page
        if (!empty($message)) {
            header("Location:order.php");
        }
        else {
            $result1 = insertCustomer($_REQUEST);
			$result2 = insertBooking($_REQUEST);
            if ($result1 & $result2)
            {
                $_SESSION['enterCustomer'] ="Information submitted";
            }
            else
            {
                $_SESSION['enterCustomer'] ="Not able to save the data";
            }
            header("Location:index.php");
        }
    }
?>
