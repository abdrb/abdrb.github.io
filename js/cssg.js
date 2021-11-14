var save1 = [];
var save2 = [];

function myFunction () {
if(document.getElementById("tag").value === "" || document.getElementById("att").value === "" || document.getElementById("val").value === ""){
	alert("Fields must be filled");
	return "";
}
	var type = document.getElementById("type").value;
	var tag = document.getElementById("tag").value;
	var att = document.getElementById("att").value;
	var val = document.getElementById("val").value;
	var nl = "\n";
	var start = " {";
	var end = "}";
	var cssStyle = "";
	var addNew = "";
	var num = Number(document.getElementById("hN").value);
if(type === "class"){
	tag = "." + document.getElementById("tag").value;
	}
else if (type === "id"){
	tag = "#" + document.getElementById("tag").value;
	}
else {
	tag = document.getElementById("tag").value;
	}

for(var i = 1; i <= num; i++){
	addNew += document.getElementById("att" + i).value + ": ";
	addNew += document.getElementById("val" + i).value + ";\n";
}
if(Number(document.getElementById("hN").value) === 0) {
	addNew = "";
}
cssStyle = tag + start + nl + att + ": " + val + ";" + nl + addNew + end + nl;
document.getElementById("cssBox").value = cssStyle;
}

function func (){
	var type = document.getElementById("type").value;
if(type === "class"){
	document.getElementById("slct").innerHTML = "Type the class name";
}
else if (type === "id"){
	document.getElementById("slct").innerHTML = "Type the ID name";
}
else {
	document.getElementById("slct").innerHTML = "Type the tag name";
	}
}

function add(){
var n = Number(document.getElementById("hN").value) + 1;
if(n >= 2){
save1[(n - 2)] = document.getElementById("att" + (n - 1)).value;
save2[(n - 2)] = document.getElementById("val" + (n - 1)).value;
}
var txt = "<input list='lst' id='att" + n + "' class='inl'>" + "<input type='text' id='val" + n + "' class='inl'>";
document.getElementById("hN").value = n;
document.getElementById("newA").innerHTML += txt;
for(var i = 2; i <= n; i++){
document.getElementById("att" + (i - 1)).value = save1[(i - 2)];
document.getElementById("val" + (i - 1)).value = save2[(i - 2)];
}
}

function clr(){
document.getElementById("newA").innerHTML = "";
document.getElementById("hN").value = 0;
}