<?php
require('login.php');
 $send = $HTTP_POST_VARS['send'];
 include"admin/config.php";


 echo"<title>�����</title>" ;

 if (!$send) { ?>
<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
    <meta http-equiv="no-cache" content>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="���� ����">
    <meta name="description" content="���� ����">

<div align="center">
  <center>
<table width=95% dir="rtl">
<form method="POST" action="add.php">
<tr>
<td>�����</td>
<td> <input type ="text" name="name" size="30" > </td>
</tr>
<tr>
<td>������ ���������� </td>
<td><input type="text" name="one" size="30"></td>
</tr>
<tr>
<td>���� ������</td>
<td><input type="text" name="two" size="30" > </td>
</tr>
<tr>
<td>�������</td>
<td><input type="text"  name="three" size="30"></td>
</tr>
<tr>
<td>���� ����</td>
<td><input type="text" name="pswrd" size="30" > </td>
</tr>

</table><p><input type=submit value='   ����  '    name=send></p></form>

  <?
}else{
   $name       = $HTTP_POST_VARS['name'];
   $one        = $HTTP_POST_VARS['one'];
   $two        = $HTTP_POST_VARS['two'];
   $three      = $HTTP_POST_VARS['three'];
   $pswrd      = $HTTP_POST_VARS['pswrd'];

   $name = addslashes($name) ;$one = addslashes($one) ;$two = addslashes($two) ;$three = addslashes($three) ;$pswrd = addslashes($pswrd) ;

   if ((!$three)||(!$pswrd)){
   echo"<html dir=rtl lang=ar-sa><center>���� ��� �� ����� �������� ������� :</center><ul>";

 if ($pswrd != 711448104)
{
        echo"<li dir=rtl>�����.. ��� ���� �������� ������ �����</li>";
        exit ;
}

       if ( empty($three)){
       echo"<li dir=rtl> ��� ����� ���� �������� </li>"; }
        echo"<a href=\"javascript:history.back();\">������ �����</a>";
      }else{



   $con= mysql_connect($host,$dbuser,$dbpass )  // �����  ������� ������ �������� ��� ���� ��� ������� �� �����
  or die("Connectwo Faild!");

   mysql_select_db($dbname,$con);

$query2 = "INSERT INTO abu3amer(id,name,one,two,three)
VALUES(NULL,'$name','$one','$two','$three')";

$result2 = mysql_query($query2);
if(!$result2){
echo"<BR><BR><BR><BR><center>���� ���� �� ����� ������� ���� ��� ����<br><p><a href=\"javascript:history.back();\">������ �����</a></p></center>";
}else{
echo"<center><BR><BR><BR><BR>��� �� ����� ������� ����� ....<br>���� ����� ��� ������� ���� ���� 5 �����</center><BODY onLoad=\"setTimeout(window.close, 5000)\">";

}
}
}



?>