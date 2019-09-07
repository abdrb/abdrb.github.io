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
include "include/z_db.php"; // We must have db connection to change the status of plus_login
$q=mysql_query("update plus_login set status='OFF' where id='$_SESSION[id]'");

session_unset();
session_destroy();

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

echo "<center><font face='tahoma' size='2' >Êד Ê׃ּםב ־ׁזּß ָהַּֽ <br><br> </font></center>";
require "bottom.php";

?>

</body>

</html>
