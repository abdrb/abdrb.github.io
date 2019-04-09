function HoverButton()
{
      document.getElementById("butt").style.backgroundColor = "#080";
}

function Hover()
{
      document.getElementById("butt").style.backgroundColor = "#00BC8A";
}

function Show()
{
      document.getElementById("Click").style.visibility = "visible";
}

function hide()
{
      document.getElementById("Click").style.visibility = "hidden";
}

var n = 0 ;
function Hevered()
{
      n = n + 1 ;
      document.getElementById("img1").innerHTML =n ;
}

var n = 0 ;
function Hevered2()
{
      n = n + 1 ;
      document.getElementById("img2").innerHTML =n ;
}

var n = 0 ;
function Hevered3()
{
      n = n + 1 ;
      document.getElementById("img3").innerHTML =n ;
}



function clc()
{
    document.getElementById("Clicks").style.color="f50";
    document.getElementById("Clicks").style.textDecoration="underline";
}

function valid()
{
  	var t = prompt("Name ..");
	if (t == "enas")
	{
    window.location = "index.html";
   }
 else
 {
   alert ("Wrong !!");
 }

}
