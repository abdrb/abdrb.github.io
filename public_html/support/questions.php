<?php

include"adminq/config.php";
include "/home/londonci/public_html/support/include/session.php";
include "/home/londonci/public_html/support/include/z_db.php";

function bad_words_filter($text)
   {     //��� ������� ���� ������ ������� ������ ������'������' ��� ����� ��� �� ���� �����
   $bad = array('�����');
   $good = "����";
   return str_replace($bad, $good, $text);
   }

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");
 require "/home/londonci/public_html/support/check.php";
 $usrnm = $_SESSION[userid];
 echo $usrnm;
 $students=mysql_query("SELECT * FROM questionstbl WHERE name='$usrnm'")
  or die("can't get the table");
 ?>
 <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache" content>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="���� ����">
    <meta name="description" content="���� ����">

<html lang=ar-sa>
<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<p align="center"><a target='_self' href='addquestion.php'>���� ��� ������ ���� ����</a> <br>
<p align="center"><a target='_self' href='welcome.php'>�� ���� ��� ������ ��� ����� ��������</a> <br>
<table width='100%' border="1" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#DFF1F6" style="font-family: Tahoma; font-size: 10pt; color: #000080" cellpadding="2" dir="rtl" align="right">

 <?

  while ($row=mysql_fetch_object($students))

  {

          // I added htmlspecialchars while echoing the data so NO html codes will take effect

          $row->three=htmlspecialchars($row->three);
  echo"<tr>";
             echo"<td bgcolor='#DFDFFF'>�������: ";
             echo htmlspecialchars($row->one);
             echo"</td>";
	echo"</tr>";
	echo"<tr>";
            echo"<td>��: ";
            echo htmlspecialchars($row->name);
            echo"</td>";
	echo"</tr>";
	echo"<tr>";
            echo"<td bgcolor='#DFDFFF'>������: ";
             echo htmlspecialchars($row->two);
            echo"</td>";
	echo"</tr>";
	echo"<tr>";
            echo"<td>������: ";
            echo bad_words_filter($row->three);
            echo"</td>";
	echo"</tr>";
    	echo"<tr>";
		echo"<td bgcolor='#D6EDE2'><p align='center'> :: :: :: :: :: :: </p></td>";
	echo"</tr>";

 }

 ?>

</table>

