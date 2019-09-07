<?php
require('login.php');
 $send = $HTTP_POST_VARS['send'];
 include"admin/config.php";


 echo"<title>إعلان</title>" ;

 if (!$send) { ?>
<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
    <meta http-equiv="no-cache" content>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="مركز لندن">
    <meta name="description" content="مركز لندن">

<div align="center">
  <center>
<table width=95% dir="rtl">
<form method="POST" action="add.php">
<tr>
<td>الاسم</td>
<td> <input type ="text" name="name" size="30" > </td>
</tr>
<tr>
<td>البريد الالكتروني </td>
<td><input type="text" name="one" size="30"></td>
</tr>
<tr>
<td>رابط الموقع</td>
<td><input type="text" name="two" size="30" > </td>
</tr>
<tr>
<td>الإعلان</td>
<td><input type="text"  name="three" size="30"></td>
</tr>
<tr>
<td>كلمة السر</td>
<td><input type="text" name="pswrd" size="30" > </td>
</tr>

</table><p><input type=submit value='   ارسل  '    name=send></p></form>

  <?
}else{
   $name       = $HTTP_POST_VARS['name'];
   $one        = $HTTP_POST_VARS['one'];
   $two        = $HTTP_POST_VARS['two'];
   $three      = $HTTP_POST_VARS['three'];
   $pswrd      = $HTTP_POST_VARS['pswrd'];

   $name = addslashes($name) ;$one = addslashes($one) ;$two = addslashes($two) ;$three = addslashes($three) ;$pswrd = addslashes($pswrd) ;

   if ((!$three)||(!$pswrd)){
   echo"<html dir=rtl lang=ar-sa><center>يوجد خطأ في ادخال البيانات التالية :</center><ul>";

 if ($pswrd != 711448104)
{
        echo"<li dir=rtl>عفواً.. ليس لديك الصلاحية لإضافة إعلان</li>";
        exit ;
}

       if ( empty($three)){
       echo"<li dir=rtl> يجب كتابة النص الإعلاني </li>"; }
        echo"<a href=\"javascript:history.back();\">العودة للخلف</a>";
      }else{



   $con= mysql_connect($host,$dbuser,$dbpass )  // نعاود  الاتصال بقاعدة البيانات مرة اخرى لان الاتصال قد انقطع
  or die("Connectwo Faild!");

   mysql_select_db($dbname,$con);

$query2 = "INSERT INTO abu3amer(id,name,one,two,three)
VALUES(NULL,'$name','$one','$two','$three')";

$result2 = mysql_query($query2);
if(!$result2){
echo"<BR><BR><BR><BR><center>يوجد خطاء في إضافة الإعلان حاول مرة أخرى<br><p><a href=\"javascript:history.back();\">العودة للخلف</a></p></center>";
}else{
echo"<center><BR><BR><BR><BR>لقد تم اضافة الإعلان بنجاح ....<br>سيتم اغلاق هذه النافذة آليا خلال 5 ثواني</center><BODY onLoad=\"setTimeout(window.close, 5000)\">";

}
}
}



?>