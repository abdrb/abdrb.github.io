<?php
include"header.php";
include"config.php";


 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $questionstbl=mysql_query("SELECT id,name,one,two,three FROM questionstbl ORDER BY id desc LIMIT $limit ")
  or die("can't get the questionstbl");
    echo"<div align='center'>
  <center> <font face='Tahoma' size='2'>
  <table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#FFFFFF' width='95%' dir='rtl' id='AutoNumber1'>
    <tr>
      <td width='70%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>«·”ƒ«·</span></td>
      <td width='10%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>Õ–›</span></td>
      <td width='20%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>—œ √Ê  ⁄œÌ·</span></td>
    </tr>";

 while ($row=mysql_fetch_object($questionstbl))
  {
         // I added  htmlspecialchars   to decode the HTML coding
  	echo"<tr>";
   	echo"<td bgcolor='#FFDDFFF' width='70%'> „‰: ";echo htmlspecialchars($row->name) . "  «—ÌŒ «·≈—”«·: " . htmlspecialchars($row->one) ; echo"</td>";
		echo"<td width='10%' rowspan='2'>";
		echo"<p align='center'><a href='delete.php?id=$row->id'>Õ–›</a></td>";
		echo"<td width='20%' rowspan='2'>";
		echo"<p align='center'><a href='edit.php?id=$row->id'>—œ √Ê  ⁄œÌ·</a></td>";
	echo"</tr>";
 echo"<tr>";
  	echo"<td width='70%'>";echo htmlspecialchars($row->two) ; echo"</td>";
	echo"</tr>";
 echo"<tr>";
	echo"<td width='70%' bgcolor='#DFDFFF'>";echo htmlspecialchars($row->three) ; echo"</td>";
	echo"</tr>";

 }
  mysql_close();
 echo"</table>
   </font>
  </center>
</div>";
 include"footer.php";
 ?>
