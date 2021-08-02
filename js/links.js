var website = ""; var link = ""; var social="";
var loca = window.location.pathname;
var wpath = loca.substring(0, loca.lastIndexOf("/"));
var dName = wpath.substring(wpath.lastIndexOf(".")+1);
if(dName!=="io"){var website = "../";}
function funclinks(){
link += "<li><a href='" + website + "index.html'>Home</a></li>";
//link += "<li><a href='" + website + "services.html'>Services</a></li>";
//link += "<li><a href='" + website + "about.html'>About</a></li>";
link += "<li><a href='" + website + "typing.html'>Learn Typing</a></li>";
link += "<li><a href='" + website + "space/space.html'>Space App</a></li>";
link += "<li><a href='" + website + "solar/solar.html'>Solar|WattAmper Calc</a></li>";
link += "<li><a href='" + website + "cssg.html'>CSS Style Generator</a></li>";
link += "<li><a href='" + website + "feedback.html'>Feedback</a></li>";
link += "<li><a href='" + website + "apps.html'>تطبيقات</a></li>";
document.getElementById("links").innerHTML=link;

social += "<a href='https://codepen.io/Abdurab'><i class='fa fa-codepen'></i></a>";
social += "<a href='https://github.com/abdrb'><i class='fa fa-github'></i></a>";
social += "<a href='https://www.linkedin.com/in/abdurab'><i class='fa fa-linkedin-square'></i></a>";
social += "<a href='https://www.facebook.com/abdrb22'><i class='fa fa-facebook-square'></i></a>";
social += "<a href=''><i class='fa fa-twitter'></i></a>";
social += "<a href='https://www.youtube.com/channel/UClkT7Vp9nuIFDOVHdhrYiAw'><i class='fa fa-youtube'></i></a>";
social += "<a href=''><i class='fa fa-whatsapp'></i></a>";
social += "<a href='https://www.instagram.com/abdurab.it/'><i class='fa fa-instagram'></i></a>";
social += "<a href='feedback.html'><i class='fa fa-envelope'></i></a>";
document.getElementById("sociallinks").innerHTML=social;
}