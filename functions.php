<?php
// Darcie Milliken
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