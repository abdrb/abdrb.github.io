<?
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
include "include/session.php";

include "include/z_db.php";
//////////////////////////////

/*
while (list ($key,$val) = each ($_POST)) {
$$key = $val;
}
*/

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html dir="rtl">

<head>
<title>ãÑßÒ áäÏä áÊßäæáæÌíÇ ÇáãÚáæãÇÊ æÇááÛÇÊ</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
$todo=$_POST['todo'];
$name=$_POST['name'];
$email=$_POST['email'];
$sex=$_POST['sex'];
// check the login details of the user and stop execution if not logged in
require "check.php";

if(isset($todo) and $todo=="update-profile"){

// set the flags for validation and messages
$status = "OK";
$msg="";

// if name is less than 5 char then status is not ok
if (strlen($name) < 5) {
$msg=$msg."ÇÓãß íÌÈ Ãä íßæä ÃßËÑ ãä ÎãÓÉ ÃÍÑİ<BR>";
$status= "NOTOK";}	

// you can add email validation here if required. 


if($status<>"OK"){ // if validation failed
echo "<font face='tahoma' size='2' color=red>$msg</font><br><input type='button' value='ÅÚÇÏÉ ÇáãÍÇæáÉ' onClick='history.go(-1)'>";
}else{ // if all validations are passed.
if(mysql_query("update plus_signup set email='$email',name='$name',sex='$sex' where userid='$_SESSION[userid]'")){
echo "<font face='tahoma' size='2' color=green>Êã ÊÚÏíá ÈíÇäÇÊß ÈäÌÇÍ<br></font>";
}else{echo "<font face='tahoma' size='2' color=red>åäÇß ãÔßáÉ İäíÉ İí ÊÚÏíá ÈíÇäÇÊ ÇáÔÎÕíÉ íÑÌì ÇáÃÊÕÇá ÈãÓÆæá ÇáãæŞÚ<br></font>";}
}}

require "bottom.php";
?>

</body>

</html>
