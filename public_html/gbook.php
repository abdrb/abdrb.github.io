<?php



include"admingb/config.php";



function bad_words_filter($text)

   {     //��� ������� ���� ������ ������� ������ ������'������' ��� ����� ��� �� ���� �����

   $bad = array('���', '��', '���', '��', '���', '��', '���', '�����', '���', '���', '����', '���', '���', '���', '���');

   $good = "����";

   return str_replace($bad, $good, $text);

   }



 $con=mysql_connect($host,$dbuser,$dbpass)

 or die("CONNECTION FAILED");

 mysql_select_db($dbname,$con)

 or die("can't conect to DB");



 $students=mysql_query("select * from gbooktbl ORDER BY id desc LIMIT $limit ")

  or die("can't get the gbooktbl");

 ?>

 <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="no-cache" content>

    <meta http-equiv="Expires" content="-1">

    <meta http-equiv="Cache-Control" content="no-cache">

    <meta name="keywords" content="���� ����">

    <meta name="description" content="���� ����">



<html dir="rtl" lang=ar-sa>



<title>gbook.php</title>





<body bgcolor="#DFF1F6" background="images/lcitwebsite_19.gif" style="font-family: Tahoma; color: #000080">



<div align="right">



<p align="center"><font size="2"><a target="_parent" href="index.htm">������ 

��������</a></font></p>



<table width='100%' border="1" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#DFF1F6" style="font-family: Tahoma; font-size: 10pt; color: #000080" cellpadding="2" dir="rtl" align="right">
<?
  while ($row=mysql_fetch_object($students))
  {
          // I added htmlspecialchars while echoing the data so NO html codes will take effect

          $row->three=htmlspecialchars($row->three);
 	echo "<tr>";
		echo "<td width='10%'>";

  echo"<a href='mailto:";
  echo htmlspecialchars($row->one);
  echo"'style='text-decoration: none'>";
  echo htmlspecialchars($row->name);
  echo"</a>";
  
  echo "</td>";
		echo "<td rowspan='3'>";

  echo bad_words_filter($row->three);

  echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td width='10%'>";

  echo"&nbsp;��:&nbsp;";
  echo htmlspecialchars($row->two);
  
  echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td width='10%'></td>";
	echo "</tr>";
 }

 ?>

</table>
</div>

