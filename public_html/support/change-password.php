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

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html dir="rtl">

<head>
<title>דׁßׂ בהֿה בÊßהזבזּםַ ַבדÚבזדַÊ זַבבÛַÊ</title>

<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
// check the login details of the user and stop execution if not logged in
require "check.php";

echo "<form action='change-passwordck.php' method=post><input type=hidden name=todo value=change-password>

<table border='0' cellspacing='0' cellpadding='0' align=center>
 <tr bgcolor='#B8DFEB' > <td colspan='2' align='center'><font face='Tahoma' size='2' align='center'>&nbsp;<b>ÊÛםםׁ ßבדֹ ַבדׁזׁ</b> </font></td> </tr>

<tr> <td ><font face='Tahoma' size='2' align='center'>  &nbsp;ßבדֹ ַבדׁזׁ ַבּֿםֹֿ
</font></td> <td  align='center'><font face='Tahoma' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr bgcolor='#B8DFEB' > <td ><font face='Tahoma' size='2' align='center'>  &nbsp;ֵÚַֹֿ ßÊַָֹ ßבדֹ ַבדׁזׁ ַבּֿםֹֿ
</font></td> <td  align='center'><font face='Tahoma' size='2' >
<input type ='password' class='bginput' name='password2' ></font></td></tr>

<tr> <td colspan=2 align=center><input type=submit value='ÊÛםםׁ ßבדֹ ַבדׁזׁ'><input type=reset value='ÊÝׁםÛ ַבֽÞזב'></font></td></tr>

";


echo "</table>";

require "bottom.php";

?>

<br><p><a href="javascript:history.back()">ַבÚזֹֿ בב־בÝ</a></p>
</body>

</html>
