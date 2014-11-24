<!--
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: Nov 21,2014
Assignment: PROJ207 Threaded Workshop Project
-->

<?php
    //calling the php session
    session_start();

    if (!isset($_SESSION['loggedin']))
    {
        $_SESSION['enterCustomer'] = "";
    }
?>


<?php
    //including funtion for the array
    include("functions.php");

    if (isset($_REQUEST['CustFirstName']))
    {
        $message = "";
        
        //validating customer's first name
        if (empty($_REQUEST['CustFirstName'])) 
        {
            $message .="Enter your First Name<br/>";  
        }
        else {
            //Allows letters and common characters
            if(!preg_match("/^[a-z A-Z\,\.\-\']+$/i", $_REQUEST['CustFirstName']))
            {
                $message .= "Enter a valid First Name<br/>";
            }
        }
        
        //validating customer's last name 
        if (empty($_REQUEST['CustLastName'])) 
        {
            $message .="Enter your Last Name<br/>";
        }
        else {
            //Allows letters and common characters
            if(!preg_match("/^[a-z A-Z\,\.\-\']+$/i", $_REQUEST['CustLastName']))
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
                $message .= "Invalid City<br/>";
            }
        }
        //validating customer's home phone number
        if (empty($_REQUEST['CustHomePhone']))
        {
            $message .="Enter your home phone number<br/>";
        }
        else 
        {
            if(!preg_match("/^[0-9\-\.\ \,\/\(\)\+]+$/i", $_REQUEST['CustHomePhone']))
            {
                $message .= "Invalid home phone number<br/>";
            }
        }
        
        //validating customer's business phone number
        if (empty($_REQUEST['CustBusPhone']))
        {
            $message .="Enter a business phone number<br/>";
        }
        else 
        {
            if(!preg_match("/^[0-9\-\.\ \,\/\(\)\+]+$/i", $_REQUEST['CustBusPhone']))
            {
                $message .= "Invalid business phone number<br/>";
            }
        }
        
        
        //validating customer's email address
        if (empty($_REQUEST['CustEmail'])) {
            $message .="Enter your Email<br/>";
        }
        else {
            if(!filter_var($_REQUEST['CustEmail'],FILTER_VALIDATE_EMAIL))
            {
                $message .= "Invalid email address";
            }
        }
        
        //validating password and checking for match
        if (empty($_REQUEST['CustPassword'])) 
        {
            $message .="Enter a password<br/>";
        }
        else 
        {
            //check that the password is at least 8 characters long 
            //and contains at least one of each of lowercase, uppercase and a number
            if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $_REQUEST['CustPassword']))
            {
                $message .= "Invalid password";
            }
            else 
            {
                if($_REQUEST['CustPassword'] != $_REQUEST['password_Rep'] )
                {
                    $message .= "Passwords do no match";
                }
            }
        }
        
        //Store error in the session variable $messsage
        $_SESSION['errorMessage'] = $message;
        
        //Checking the value returned by the function and print 
        //a success/fail message to the agent entry page
        if (!empty($message)) {
            header("Location:register.php");
        }
        else {
            $result = insertCustomer($_REQUEST);
            if ($result)
            {
                $_SESSION['enterCustomer'] ="Your information was submitted";
            }
            else
            {
                $_SESSION['enterCustomer'] ="Not able to save your data";
            }
            header("Location:index.php");
        }
    }
?>
