<?php

 $send = $HTTP_POST_VARS['send'];
 include"admingb/config.php";


 echo"<title>«б жёнЏ Ён ”ћб «б“ж«—</title>" ;

 if (!$send) { ?>
<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache" content>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="г—я“ бдѕд">
    <meta name="description" content="г—я“ бдѕд">

<body text='#000080' bgcolor="#DFF1F6" background="images/lcitwebsite_19.gif">

<div align="center">
  <center>
<table width="361" dir="rtl">
<form method="POST" action="addgbook.php">
<tr>
<td colspan="3" height="36">
<p align="center"><font size="3" face="Tahoma">
		<a target="_self" href="gbook.php">
		<span style="text-decoration: none"><span lang="ar-sa">√дё— ед« бг‘«еѕ…</span> ”ћб 
		«б“ж«—</span></a></font></td>
</tr>
<tr>
<td width="93"><font face="Tahoma" size="2" color="#000080">«б«”г</font></td>
<td width="258" colspan="2"> <font color="#000080" face="Tahoma"> <input type ="text" name="name" size="30" ></font><font face="Tahoma" size="2" color="#000080">
</font><font color="#FF0000">*</font></td>
</tr>
<tr>
<td width="93"><font face="Tahoma" size="2" color="#000080">«б»—нѕ «б«бя —ждн </font> </td>
<td width="258" colspan="2"><font color="#000080" face="Tahoma">
<input type="text" name="one" size="28"></font></td>
</tr>
<tr>
<td width="93"><font face="Tahoma" size="2" color="#000080">«бѕжб…</font></td>
<td width="258" colspan="2"><font color="#000080" face="Tahoma">
<input type="text" name="two" size="17" ></font><font face="Tahoma" size="2" color="#000080">
</font><font color="#FF0000">*</font></td>
</tr>
<tr>
<td width="93"><font face="Tahoma" size="2">—”«б я<br>
(д’ «б жёнЏ)</font></td>
<td width="258" colspan="2"><font color="#000080" face="Tahoma">
<textarea rows="7" name="three" cols="28"></textarea></font><font color="#FF0000">*</font></td>
</tr>


<tr>
<td align="center" width="93" height="42">
<p align="left"><font face="Tahoma" size="2" color="#000080">√ѕќб «бяжѕ:</font></td>
<td align="center" width="115" height="42">
<p><font face="Tahoma" size="2" color="#000080">&gt;&gt;<iframe name="I1" width="63" height="23" src="lcitcodeno.php" scrolling="no" align="center" border="0" frameborder="0" marginwidth="1" marginheight="0" style="font-family: Tahoma; font-size: 12pt; color: #000080; ">г—я“ бдѕд б№  яджбжћн« «бгЏбжг«  - «бнгд Џѕд ( г—я“  ѕ—н» яг»нж — ж «д —д  ж бџ«  ) 
ѕж—«   ѕ—н»н… Ён гћ«б  ёдн… «бгЏбжг«  ж«ббџ« : »—«гћ  Ў»нён…° бџ«  »—гћ…° ‘»я« ° ’н«д…° бџ… ≈дћбн“н… 
</iframe>
<a target="I1" title=" ЌѕнЋ «бяжѕ" href="lcitcodeno.php"><img border="0" src="images/refreshicon.jpg" width="16" height="16"></a>
</font></td>
<td align="center" width="139" height="42">
<p align="right">
<input name="txtcd" size="9" style="float: right"><font color="#FF0000">*</font></td>
</tr>


</table>
<p>
<input type=submit value='   «б жёнЏ Ён ”ћб «б“ж«—  '    name=send style="font-family: Tahoma; color: #000080; font-size: 8pt"></p><font size="3" face="Tahoma">
		<a target="_self" href="gbook.php">
		<span style="text-decoration: none"><span lang="ar-sa">√дё— ед« бг‘«еѕ…</span> ”ћб 
		«б“ж«—</span></a></font></form>

  <?
}else{
   $name       = $HTTP_POST_VARS['name'];
   $one        = $HTTP_POST_VARS['one'];
   $two        = $HTTP_POST_VARS['two'];
   $three      = $HTTP_POST_VARS['three'];
   $txtcd      = $HTTP_POST_VARS['txtcd'];

   $name = addslashes($name) ;$one = addslashes($one) ;$two = addslashes($two) ;$three = addslashes($three) ;$txtcd = addslashes($txtcd);

 	if (empty($name) || empty($two)|| empty($three)|| empty($txtcd)){
    echo"<body text='#000080' bgcolor='#DFF1F6' background='images/lcitwebsite_19.gif'><font size='2' face='Tahoma'><center>:нжћѕ ќЎ√ Ён «ѕќ«б «б»н«д«  «б «бн…</center><ul>";

       if ( empty($txtcd)){
       echo"<li dir=rtl>нћ» ≈ѕќ«б «бяжѕ</li> ";
       }
       if ( empty($name)){
       echo"<li dir=rtl>нћ» я «»… «б«”г</li> ";
       }
       if ( !empty($one)){
       if (!eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $one)) {
       echo"<li dir=rtl>√ѕќб »—нѕ«р ’ЌнЌ«р √ж √ —яе Ё«—џ«р</li>";
	   }}
       if ( empty($two)){
       echo"<li dir=rtl>нћ» я «»… «”г «бѕжб…</li> ";
       }
       if ( empty($three)){
       echo"<li dir=rtl>нћ» я «»… «б жёнЏ</li>"; }
      
        echo"<br> <p align='center'> <a href=\"javascript:history.back();\"> «бЏжѕ… ббќбЁ </a></p>";
        
      }else{
             if ( !empty($one)){
       if (!eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $one)) {
       echo"<body text='#000080' bgcolor='#DFF1F6' background='images/lcitwebsite_19.gif'><font size='2' face='Tahoma'><li dir=rtl>√ѕќб »—нѕ«р ’ЌнЌ«р √ж √ —яе Ё«—џ«р</li>";
        echo"<br> <p align='center'> <a href=\"javascript:history.back();\"> «бЏжѕ… ббќбЁ </a></p>";
	   exit;
	   }}

$dtime=getdate(time());
$yn=$dtime['hours'] * $dtime['mon'] * $dtime['mday'] + $dtime['year'];
$xn=$txtcd;
if ($yn != $xn)
{
       echo"<body  bgcolor='#DFF1F6' background='images/lcitwebsite_19.gif' text='#000080'><font size='2' face='Tahoma'><li dir=rtl>нћ» я «»… «бяжѕ »«б‘яб «б’ЌнЌ</li>";
       echo"<br> <p align='center'> <a href=\"javascript:history.back();\"> «бЏжѕ… ббќбЁ </a></p>";
       exit ;
}



   $con= mysql_connect($host,$dbuser,$dbpass )  // дЏ«жѕ  «б« ’«б »ё«Џѕ… «б»н«д«  г—… «ќ—м б«д «б« ’«б ёѕ «дёЎЏ
  or die("Connectwo Faild!");

   mysql_select_db($dbname,$con);

$query2 = "INSERT INTO gbooktbl(id,name,one,two,three)
VALUES(NULL,'$name','$one','$two','$three')";

$result2 = mysql_query($query2);
if(!$result2){
echo"<body  bgcolor='#DFF1F6' background='images/lcitwebsite_19.gif' text='#000080'><font size='2' face='Tahoma'><BR><BR><BR><BR><center>нжћѕ ќЎ«Ѕ Ќ«жб г—… √ќ—м<br><p><a href=\"javascript:history.back();\"> «бЏжѕ… ббќбЁ </a></p></center>";
}else{
echo"<body  bgcolor='#DFF1F6' background='images/lcitwebsite_19.gif' text='#000080'><font size='2' face='Tahoma'><center><BR><BR><BR><BR>бёѕ  г ≈÷«Ё… «б жёнЏ »дћ«Ќ<br><a target='_self' href='gbook.php'>√дё— ед« бг‘«еѕ… ”ћб «б“ж«—</a>";
}
}
}



?>