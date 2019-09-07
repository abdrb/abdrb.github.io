<?php
 $send = $HTTP_POST_VARS['send'];
 include"adminq/config.php";
 include "/home/londonci/public_html/support/include/session.php";
 include "/home/londonci/public_html/support/include/z_db.php";
 require "/home/londonci/public_html/support/check.php";

 echo"<title>ֵײַÝֹ ׃ִַב</title>" ;
 echo"<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080'>";
 if (!$send) { ?>
<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache" content>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="דׁßׂ בהֿה">
    <meta name="description" content="דׁßׂ בהֿה">

<table align="center" width=95% dir="rtl" style="font-family: Tahoma; font-size: 8pt; color: #000080">
<form method="POST" action="addquestion.php">
<tr>
<td>דה</td>
<td> <? echo "<input type ='hidden' name='name' size='30' value='$_SESSION[userid]'>" . $_SESSION[userid] ?> </td>
</tr>
<tr>
<td>ַבÊַׁם־</td>
<td><? $showdate = date("D, d/ m/ Y");
 echo $showdate;
 echo"<input type='hidden' name='one' size='30' value='$showdate'>"?></td>
</tr>
<tr>
<td>ַב׃ִַב</td>
<td><textarea  type="text" name="two" rows="8" cols="38"></textarea> </td>
</tr>
<tr>
<td> </td>
<td><input type="hidden"  name="three" rows="4" cols="40"></td>
</tr>
</table><p align="center"><input type=submit value='  ֳׁ׃ב ַב׃ִַב '   name=send></p></form>

  <?
}else{
   $name       = $HTTP_POST_VARS['name'];
   $one        = $HTTP_POST_VARS['one'];
   $two        = $HTTP_POST_VARS['two'];
   $three      = $HTTP_POST_VARS['three'];

   $name = addslashes($name) ;$one = addslashes($one) ;$two = addslashes($two) ;$three = addslashes($three) ;

   if ((!$name) || (!$two)){
   echo"<html dir=rtl lang=ar-sa><center>םזּֿ ־״ֳ Ýם ַֿ־ַב ַבָםַהַÊ ַבÊַבםֹ :</center><ul>";


       if ( empty($name)){
       echo"<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080'><li dir=rtl>בÊÊדßה דה ַבדװַׁßֹ םָּ Ê׃ּםב ַבֿ־זב ֳזבַנ</li> ";
       }
     if ( empty($two)){
       echo"<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080'><li dir=rtl>םָּ ßÊַָֹ ַב׃ִַב</li> ";
       }}
       else{

   $con= mysql_connect($host,$dbuser,$dbpass )  // הÚַזֿ  ַבַÊױַב ָÞַÚֹֿ ַבָםַהַÊ דֹׁ ַ־ׁל בַה ַבַÊױַב Þֿ ַהÞ״Ú
  or die("Connectwo Faild!");

   mysql_select_db($dbname,$con);

$query2 = "INSERT INTO questionstbl(id,name,one,two,three)
VALUES(NULL,'$name','$one','$two','$three')";

$result2 = mysql_query($query2);
if(!$result2){
echo"<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080'><font size='2' face='Tahoma'><BR><BR><BR><BR><center>םזּֿ ־״ֱַ ַֽזב דֹׁ ֳ־ׁל<br><p><a href=\"javascript:history.back();\">ַבÚזֹֿ בב־בÝ</a></p></center>";
}else{
echo"<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080'><font size='2' face='Tahoma'><center><BR><BR><BR><BR>בÞֿ Êד ֵײַÝֹ ׃ִַבß ָהַּֽ ז׃םÊד ַבֿׁ Úבםß Ýם ֳÞָׁ זÞÊ דדßה<br><a target='_self' href='questions.php'>ֳהÞׁ והַ בדװַוֹֿ ּדםÚ ֳ׃ֶבÊß</a>";
}
}
}
?>
<br><p align="center"><a target='_self' href='welcome.php'>ֳהÞׁ והַ בבּׁזÚ ֵבל ױÝֽÊß ַבֶׁם׃םֹ</a> <br>
<p align="center"><a target='_self' href='questions.php'>ֳז ֳהÞׁ והַ בדװַוֹֿ ֳ׃ֶבÊß</a> <br>
