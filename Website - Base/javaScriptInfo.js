/*
Student:Leisy Moliner Hernandez
Course Module: CPRG210
Date: October 30,2014
Assignment: HTML/CSS/Javascript
*/

//funtions for main page

//Arrays for current date
var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var days = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var today = new Date();

//Array for navigation bar Images
images=new Array();
images[0]=new Image();
images[0].src="Images/t1.png";
images[1]=new Image();
images[1].src="Images/t2.png";
images[2]=new Image();
images[2].src="Images/t3.png";
images[3]=new Image();
images[3].src="Images/t4.png";
images[4]=new Image();
images[4].src="Images/t5.png";
images[5]=new Image();
images[5].src="Images/t6.png";
images[6]=new Image();
images[6].src="Images/t7.png";
images[7]=new Image();
images[7].src="Images/t8.png";

//Array for descriptions on nav bar
var desc=["Alberta",
          "British Columbia",
          "Manitoba",
          "New Brunswick",
          "Ontario",
          "P.Edward Island",
          "Quebec",
          "Saskatchewan"];

//Array for images URL on nav bar
var urlImages =["http://alberta.ca/",
                "http://www2.gov.bc.ca/",
                "http://www.gov.mb.ca/",
                "http://www2.gnb.ca/",
                "http://www.ontario.ca/",
                "http://www.gov.pe.ca/",
                "http://www.ville.quebec.qc.ca/",
                "http://www.gov.sk.ca/"];



//Array for variables name
var descInternational=["Italy",
                       "France",
                       "Germany",
                       "Japan",
                       "China"];

//Array for variables link
var urlInternational =["http://www.lonelyplanet.com/italy",
                       "http://www.lonelyplanet.com/france",
                       "http://www.lonelyplanet.com/germany",
                       "http://www.lonelyplanet.com/japan",
                       "http://www.lonelyplanet.com/china"];


//Functions
function askAndDisplayName() 
{   
    var person = prompt("Please enter your name", "John Doe");
    if (person != null) 
    {
        document.getElementById("userName").innerHTML = "Travel make just for" + person;
    }    
}

function tables()
{ 
    var info="";
    info="<table>";
    var x;
    for (x=0; x<8; x++)
    { 
        //Code for columns
        //info=info+"<tr>";
        //info=info+"<td>"+"<a onmouseup='show("+x+")';>"+desc[x]+"</td>";
        
        info=info+"<tr>";
        info=info+"<td>"+'<div onmouseover="toggleMe('+x+')" onmouseout="toggleMe('+x+')">'+"<a onmouseup='show("+x+")';>"+desc[x]+"</td>";
        //info=info+"<td><img src='"+images[x].src+"' height='50' width='100' id='x'></td>";
        //info=info+"<td>"+'<img src="IMAGE URL" alt="IMAGE ALT" id="Image[x]" style="display:none;"/>'+"</td>";
        
        //info=info+"<td>"+"<a onmouseup='show("+x+")';>"+desc[x]+"&nbsp&nbsp&nbsp&nbsp"+"</td>";
        //info=info+"<td><img src='"+images[x].src+"' height='50' width='100'></td>";
        info=info+"</tr>";
    }
    info=info+"</table>";
    picture.innerHTML=info;
    
    
        //<div onmouseover="toggleMe()" onmouseout="toggleMe()">Some Text</div>
        //<img src="IMAGE URL" alt="IMAGE ALT" id="Image1" style="display:none;"/>-->
}

//Will display new page and close it
function show(z)
    {
    var myLink = urlImages[z];
    x = window.open(myLink,"gobsite","height=900ps,width=600px,scrollbars=yes");
    setTimeout('x.close()',5000); 
}

 function toggleMe(x) {
     var id = document.getElementById('x');
     
     if(id.style.display == "block") {
        id.style.display = "none";
    } else {
        id.style.display = "block";
    }
}


//funtions for register page
function verify_all()
{   
    var ok=true;
    verify_postal();
    verify_phone();
    verify_email();
    return ok;
}

function verify_postal()
{
  var regex=new RegExp("^([A-Za-z][0-9]){3}$","g"); //long style
  var x=document.info.postal.value;
  if(!regex.test(x)) {alert('Please enter a correct postal code');ok=false;}
}

function verify_phone()
{
    var regex=/^[0-9]{10}$/;  //short style
    var x=document.info.phone.value;
    if(!regex.test(x)) {alert('Please enter a valid phone number');ok=false;}
}

function verify_email()
{
    var regex=/@/;  //short style
        var x=document.info.email.value;
        if(!regex.test(x)) {alert('Please enter a valid email');ok=false;}
}

function display_links()
{ 
    var info="";
    info="<table>";
    var x;
    for (x=0; x<5; x++)
    { 
        //Code for columns
        info=info+"<tr>";
        info=info+"<td>"+descInternational[x]+"</td>";
        info=info+"<td>"+urlInternational[x]+"</td>";
        info=info+"</tr>";
    }
    info=info+"</table>";
    internationalDestinations.innerHTML=info;
}








        
   