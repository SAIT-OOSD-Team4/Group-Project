/*

*/

//index page
//Arrays
//Arrays for current date
var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var days = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var today = new Date();

//Functions



//contact page
//Arrays

//Functions



//register page
/*
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: October 30,2014
Assignment: Project Workshop HTML/CSS/Javascript 
*/
//Arrays

//Functions
function verify_all()
{   
    ok = true;
    verify_postal();
    verify_home_phone();
    verify_business_phone();
    verify_email();
    return ok;
}

function verify_postal()
{
  var regex=new RegExp("^([A-Za-z][0-9]){3}$","g"); //long style
  var x=document.info.postal.value;
  if(!regex.test(x)) {alert('Please enter a correct postal code');ok=false;}
}

function verify_home_phone()
{
    var regex=/^[0-9]+$/;  //short style
    var x=document.info.home_phone.value;
    if(!regex.test(x)) {alert('Please enter a valid home phone number');ok=false;}
}

function verify_business_phone()
{
    var regex=/^[0-9]+$/;  //short style
    var x=document.info.business_phone.value;
    if(!regex.test(x)) {alert('Please enter a valid business phone number');ok=false;}
}

function verify_email()
{
    var regex=/@/;  //short style
        var x=document.info.email.value;
        if(!regex.test(x)) {alert('Please enter a valid email');ok=false;}
}

function verify_password()
{
    if ((document.info.password.value.length < 3) || (document.info.password.value.length > 8))
    {alert('Please enter a valid password');ok=false;}
  
}


/*Navigation section - drop down menu
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: Nov 13,2014
Assignment: Project Workshop HTML/CSS/Javascript 
*/
//Array for descriptions on nav bar
var desc=["Customer Login",
          "Agent Login",
          "Register"];

//Array for link on nav bar
var urlImages =["login/index.php",
                "register.php",
                "register.php"];

/*Funtion to display dropdown menu on navigation bar*/
function dropDownMenu()
{ 
    var info="";
    info="<table>";
    var x;
    for (x=0; x<3; x++)
    { 
        //Code for rows 
        info=info+"<tr>"+"<a href="+urlImages[x]+">"+desc[x]+"</a></tr>";
    }
    info=info+"</table>";
    nationalDestinations.innerHTML=info;
}

/*Funtions for opening and clossing the dropdown menu*/
var timeout	= 1000;
var closetimer	= 0;
var ddmenuitem	= 0;

//open hidden layer
function mopen(id)
{	
	//cancel close timer
	mcancelclosetime();

	//close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	//get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
//close showed layer
function mclose() {
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime() {
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime() {
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 












        
   