<?php

include"header.php";

include"config.php";





 $con=mysql_connect($host,$dbuser,$dbpass)

 or die("CONNECTION FAILED");

 mysql_select_db($dbname,$con)

 or die("can't conect to DB");



 $abu3amer=mysql_query("SELECT id,three FROM abu3amer ")

  or die("can't get the abu3amer");

    echo"<div align='center'>

  <center>

  <table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='95%' dir='rtl' id='AutoNumber1'>

    <tr>

      <td width='80%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>ÇáÅÚáÇä</span></td>

      <td width='10%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>ÍĞİ</span></td>

      <td width='10%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>ÊÚÏíá</span></td>

    </tr>";

  while ($row=mysql_fetch_object($abu3amer))

  {



         // I added  htmlspecialchars   to decode the HTML coding

  echo" <tr><td width='80%' align='center'>";echo htmlspecialchars($row->three) ; echo"</td>

      <td width='10%' align='center'><a href='delete.php?id=$row->id'>ÍĞİ</a></td>

      <td width='10%' align='center'><a href='edit.php?id=$row->id'>ÊÚÏíá</a></td>

    </tr>";

 }

  mysql_close();

 echo"</table>

  </center>

</div>";

 include"footer.php";

 ?>