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
// check the login details of the user and stop execution if not logged in
require "check.php";

// If member has logged in then below script will be execuated. 
// let us collect all data of the member 
$row=mysql_fetch_object(mysql_query("select * from plus_signup where userid='$_SESSION[userid]'"));

//Let us set the period button based on the data of the sex field
// You can see male button is checked if it is set to male
// else it is  set to female  
if($row->sex == "male"){
$ckb="<input type='radio' value=male checked name='sex' checked>Male 
<input type='radio' value=female  name='sex'>Female";}
else {$ckb="<input type='radio' value=male checked name='sex' >Male 
<input type='radio' value=female  name='sex' checked>Female";}

// One form with a hidden field is prepared with default values taken from field. 
echo "<form action='update-profileck.php' method=post>
<input type=hidden name=todo value=update-profile>

<table border='0' cellspacing='0' cellpadding='0' align=center width='80%'>
 <tr> <td colspan='2' align='center'>
<font face='tahoma' size='2' align='center'>&nbsp;<b>ÊÚÏíá ÇáÈíÇäÇÊ ÇáÔÎÕíÉ</b>
</font></td> </tr>

<tr bgcolor='#B8DFEB'><td ><font face='tahoma' size='2' >&nbsp;ÇáÈÑíÏ ÇáÅáßÊÑæäí</td>
<td  ><input type=text name=email value='$row->email'></td></tr>
<tr ><td >&nbsp;<font face='tahoma' size='2' >ÇáÇÓã</td>
<td ><font face='tahoma' size='2'><input type=text name=name value='$row->name'></td></tr>

<tr bgcolor='#B8DFEB'><td >&nbsp;<font face='tahoma' size='2' >ÇáÌäÓ</td>
<td ><font face='tahoma' size='2'>  $ckb</td></tr>
<tr><td align=center colspan=2><input type=submit value='ÅÌÑÇÁ ÇáÊÚÏíá'></td></tr>


";


echo "</table>";
require "bottom.php";

?>
<br><p><a href="javascript:history.back()">ÇáÚæÏÉ ááÎáİ</a></p>
</body>

</html>
