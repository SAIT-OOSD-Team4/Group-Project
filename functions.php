<?php
// Darcie Milliken
// November 12 2014
// This file contains functions that the other pages of the website can use

function connect_to_database()
{
	$link = mysqli_connect("localhost", "root", "", "travelexperts") 
        or die("Connection Error: " . mysqli_connect_error()); 
}


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