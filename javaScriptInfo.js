/*

*/

//index page
//Arrays

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
    var ok = true;
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
    var regex=/^[0-9]{10}$/;  //short style
    var x=document.info.home_phone.value;
    if(!regex.test(x)) {alert('Please enter a valid home phone number');ok=false;}
}

function verify_business_phone()
{
    var regex=/^[0-9]{10}$/;  //short style
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


//order page
//Arrays

//Functions









        
   