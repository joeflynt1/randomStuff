const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
//const navLogo = document.querySelector('#navbar__logo');

const url='resume311.pdf'
// Display Mobile Menu
const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);



// funtion to make the resume appear and disapear

function myFunction() {
  var x = document.getElementById("preview__resume");
  if (x.style.display === "none") {
    x.style.display = "inline";
  } else {
    x.style.display = "none";
  }
}


// code for xml doc
if(window.XMLHttpRequest)
{
  xmlhttp=new XMLHttpRequest();
 } 
else
{
  xmlhttp= new ActiveXObject ("Microsoft.XMLHTTP");
}

xmlhttp.open("GET", "books.xml",false); // this opens xml file
xmlhttp.send(); // this sends request to file
xmlDoc= xmlhttp.responseXML;
document.getElementById("to").innerHTML= xmlDoc.getElementsByTagName("to")[1].childNodes[0].nodeValue;
//this returns the tag value
document.getElementById("from").innerHTML=xmlDoc.getElementsByTagName("from")[0].childNodes[0].nodeValue;
document.getElementById("message").innerHTML=xmlDoc.getElementsByTagName("body")[1].childNodes[0].nodeValue;

// get current location api stuff
//openweathermap api stuff

var degToCard;
$(document).ready(function(){

  $('#submitLocation').click(function(){

      //get value from input field
      var city = $("#city").val();

      //check not empty
      if (city != ''){

          $.ajax({

              url: "http://api.openweathermap.org/data/2.5/weather?&lat=32.443726&lon=-90.516513&&units=imperial" + "&APPID=9d1fc61244e7779e398d4614b38afbb5",
              type: "GET",
              dataType: "jsonp",
              success: function(data){
                  console.log(data);
                  //console.log(data.weather[0].main);
                  console.log(data.main);
                  console.log("break point here");
                  console.log(data.main.temp);
                  console.log("break point here");
                  console.log(data.current)
                  console.log("break point here");
                  var information = show(data);
                  $("#show").html(information);
              }
          });

      }else{
          $('#error').html('Field cannot be empty');
      }

  });
})

function show(data){  //determines wind direction
  console.log(data.wind.deg);
  const deg= parseInt(data.wind.deg); 
  console.log(deg);
    if (deg>=11.25 && deg<=33.75){
      degToCard= "NNE";
    }else if (deg>33.75 && deg<=56.25){
      degToCard= "ENE";
    }else if (deg>56.25 && deg<=78.75){
      degToCard= "E";
    }else if (deg>78.75 && deg<=101.25){
      degToCard= "ESE";
    }else if (deg>101.25 && deg<=123.75){
      degToCard= "ESE";
    }else if (deg>123.75 && deg<=146.25){
      degToCard= "SE";
    }else if (deg>146.25 && deg<=168.75){
      degToCard= "SSE";
    }else if (deg>168.75 && deg<=191.25){
      degToCard= "S";
    }else if (deg>191.25 && deg<=213.75){
      degToCard= "SSW";
    }else if (deg>213.75 && deg<=236.25){
      degToCard= "SW";
    }else if (deg>236.25 && deg<=258.75){
      degToCard= "WSW";
    }else if (deg>258.75 && deg<=281.25){
      degToCard= "W";
    }else if (deg>281.25 && deg<=303.75){
      degToCard= "WNW";
    }else if (deg>303.75 && deg<=326.25){
      degToCard= "NW";
    }else if (deg>326.25 && deg<=348.75){
      degToCard= "NNW";
    }else{
      degToCard= "N"; 
    }
    return  "<h3>Current Weather: "+ data.main.temp +"</h3>" + "<h3>Current Weather: "+ data.weather[0].description +"</h3>"+ "<h3>Current Weather: "+ data.weather[0].main +"</h3> <h3> Wind: " + data.wind.speed +" MPH " + degToCard ;
  } 

  