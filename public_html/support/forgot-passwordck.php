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

include "include/z_db.php"; // database connection details stored here
//////////////////////////////
while (list ($key,$val) = each ($_POST)) {
$$key = $val;
}

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html dir="rtl">

<head>
<title>���� ���� ���������� ��������� �������</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
<meta charset="utf-8">

</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
$email=mysql_real_escape_string($email);
$status = "OK";
$msg="";
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
if (!stristr($email,"@") OR !stristr($email,".")) {
$msg="����� ���������� ��� ����<BR>";
$status= "NOTOK";}


echo "<br><br>";
if($status=="OK"){  $query="SELECT email,userid,password FROM plus_signup WHERE plus_signup.email = '$email'";
$st=mysql_query($query);
 $recs=mysql_num_rows($st);
$row=mysql_fetch_object($st);
$em=$row->email;// email is stored to a variable
 if ($recs == 0) {  echo "<center><font face='tahoma' size='2' color=red><b>�� ���� ���� ����</b><br> ����� ����� ���������� ��� ����� ����ǡ ����� ������� ��� �� �� ����� ������ <BR><BR><a href='signup.php'> ������� ���� </a> </center>"; exit;}

        $headers4="lcit@londoncit.com";         ///// Change this address within quotes to your address ///
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 
//$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers;// for html mail un-comment this line

 if(mail("$em","Your detail in LCIT","This is your detail of login to www.londoncit.com \n \n User name: $row->userid \n Password: $row->password \n\n Thank you \n \n Webmaster","$headers")){echo "<center><font face='tahoma' size='2' ><b>����� ��</b> <br>�� ������ ���� ������ ��� ����� ���������� ����� ���� ���� ����� ��� ����� </center>";}
else{ echo " <center><font face='tahoma' size='2' color=red >���� ����� ���� �� ����� ������� ����� ���� ������ ������ <br><br><input type='button' value='����� ��������' onClick='history.go(-1)'></center></font>";}


	} 

	else {echo "<center><font face='tahoma' size='2' color=red >$msg <br><br><input type='button' value='����� ��������' onClick='history.go(-1)'></center></font>";}
?>

</body>

</html>
