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
<title>ãÑßÒ áäÏä áÊßäæáæÌíÇ ÇáãÚáæãÇÊ æÇááÛÇÊ</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
// check the login details of the user and stop execution if not logged in
require "check.php";
//////////Collect the form data ////////////////////

$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];
/////////////////////////

if(isset($todo) and $todo=="change-password"){
$password=mysql_real_escape_string($password);

//Setting flags for checking
$status = "OK";
$msg="";

			


if ( strlen($password) < 3 or strlen($password) > 8 ){
$msg=$msg."ßáãÉ ÇáãÑæÑ íÌÈ Ãä áÇ ÊÒíÏ Úä 8 ÃÍÑİ æáÇ ÊŞá Úä 3 ÃÍÑİ<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."ßáãÇÊ ÇáãÑæÑ ÛíÑ ãÊÔÇÈåÉ<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<font face='Tahoma' size='2' color=red>$msg</font><br><center><input type='button' value='ÃÚÏ ÇáãÍÇæáÉ' onClick='history.go(-1)'></center>";
}else{ // if all validations are passed.
if(mysql_query("update plus_signup set password='$password' where userid='$_SESSION[userid]'")){
echo "<font face='Tahoma' size='2' ><center>ÔßÑÇğ <br> Êã ÊÛííÑ ßáãÉ ÇáãÑæÑ ÇáÌÏíÏÉ ÈäÌÇÍ</font></center>";
}else{echo "<font face='Tahoma' size='2' color=red><center>ÚİæÇğ <br> İÔá İí ÊÛííÑ ßáãÉ ÇáãÑæÑ íÑÌì ÇáÅÊÕÇá ÈÇáãÓÆæá</font></center>";
}
}
}
require "bottom.php";

?>

</body>

</html>
