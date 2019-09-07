<?php

include"admin/config.php";

function bad_words_filter($text)
   {     //ÇÖÝ ÇáßáãÇÊ ÇáÊí áÇÊÑíÏ ÇÙåÇÑåÇ ÈÇáÔßá ÇáÊÇáí'ÇáßáãÉ' æÖÚ ÝÇÕáÉ Èíä ßá ßáãÉ æÃÎÑì
   $bad = array('ÍíæÇä', 'ÌÍÔ', 'ßáÈ', 'ÃÍÈß', 'ÇÍÈ', ' ÈÍÈ', 'ÈÍÈßã', 'ÇÍÈßã');
   $good = "*****";
   return str_replace($bad, $good, $text);
   }

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $students=mysql_query("select * from abu3amer ORDER BY id desc LIMIT $limit ")
  or die("can't get the abu3amer");
 ?>
 <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache" content>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="">
    <meta name="description" content="">

<html lang=ar-sa>

<SCRIPT LANGUAGE="JavaScript">
<!-- ÌÇÝÇ ÓßÑÈÊ áÝÊÍ ÕÝÍÉ ÇÖÇÝÉ ÇåÏÇÁ Ýí äÇÝÐÉ ÕÛíÑÉ
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=250,left = 199.5,top = 196.5');");
}
// äåÇíÉ ÇáÌÇÝÇ ÓßÑÈÊ -->
</script>

<body background="images/lcitwebsite_12.gif" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" style="font-family: Tahoma; font-size: 8pt; color: #000080">

<table width='100%'><tr>
<td width='90%'><marquee direction=right height='35' onmouseover=this.scrollAmount=0 onmouseout=this.scrollAmount=3>

<?

  while ($row=mysql_fetch_object($students))
  {
          // I added htmlspecialchars while echoing the data so NO html codes will take effect
          $row->three=htmlspecialchars($row->three);

  echo"<font face='Tahoma' size=2>";echo"&nbsp;&nbsp;<a href='mailto:";echo htmlspecialchars($row->one); echo"'  style='text-decoration: none'>";echo htmlspecialchars($row->name); echo"  </a>&nbsp;";echo htmlspecialchars($row->two);echo"&nbsp;"; echo bad_words_filter($row->three);echo" &nbsp;<img src='lcit_icon.gif'  alt='LCIT' >&nbsp;";



 }
 ?></p></marquee></td><td width='10%' valign="top">
 <b><font face='MS Sans Serif' size='2'>
 <a href=javascript:popUp('add.php') style="text-decoration: none">
 <font color='#000000'>
 </font></a></span></font></b></td></tr></table>
 <center><font size=2><br><a href='' target=_blank ></a>
