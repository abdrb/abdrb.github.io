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
<title>���� ���� ���������� ��������� �������</title>

<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">

<form action='loginck.php' method=post>
<table border='0' cellspacing='0' cellpadding='0' align=center>
  <tr id='cat'>
  <tr> <td bgcolor='#B8DFEB' ><font face='tahoma' size='2' align='center'>  &nbsp;��� �������� (��� ������)  &nbsp; &nbsp;
</font></td> <td bgcolor='#B8DFEB' align='center'><font face='tahoma' size='2' >
<input type ='text' class='bginput' name='userid' ></font></td></tr>

<tr> <td><font face='tahoma' size='2' align='center'>  &nbsp;���� ������
</font></td> <td align='center'><font face='tahoma' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr> <td bgcolor='#B8DFEB' colspan='2' align='center'><font face='tahoma' size='2' align='center'>
<input type='submit' value='����� ������'> <input type='reset' value='����� �����'>
</font></td> </tr>


<tr> <td><font face='tahoma' size='2' align='center'> &nbsp;<a href='signup.php'>����� ������ ����</a></font></td> <td align='center'><font face='tahoma' size='2' ><a href=forgot-password.php>
���� ���� ������</a>�</font></td></tr>

<tr> <td bgcolor='#B8DFEB' colspan='2' align='center'><font face='tahoma' size='2' align='center'>
&nbsp;</font></td> </tr>


</table></center></form>
<?
require "bottom.php";
?>
<br><p><a href="javascript:history.back()">������ �����</a></p>
</body>

</html>
