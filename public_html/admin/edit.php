<?php
//йЦ гАйзоМА хйгяМн 13 гхяМА 2004Ц
// ana@abu3amer.com    хяЦли цхФзгЦя
//www.abu3amer.com
//           ***** съяхй гАгЕогагй 2.0 ******
//йЦ гсйногЦ огАи АзоЦ чхФА гъФго гАЕйЦА зДо гАзяж
//йЦ йзоМА гАсязи хгАгжгщи зДо ЦяФя гАЦгФс МйФчщ гАтяМь
//АЦрМо ЦД гАЦзАФЦгй МЦъДъ ЦягсАйМ зхя гАхяМо гАгАъйяФДМ
//гАялга зоЦ гсйногЦ гАсъяхй щМЦг Мшжх гААЕ , ФзоЦ мпщ гАмчФч ЦД гАсъяхй

include"header.php";
include"config.php";


 echo"<title> йзоМА ЦзАФЦгй гЕога</title>" ;

$id = $_GET['id'];
if (!$id){
echo"АЦ йчЦ хгнйМгя гАгЕога";
}else{

$con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $abu3amer=mysql_query("SELECT * FROM abu3amer WHERE id='$id'")
  or die("can't get the abu3amer");
  $row = mysql_fetch_array($abu3amer);
?>
<BR><div align='center'>
  <center>
<table width=95% dir='rtl'>
<form method='POST' action='do_edit.php'>

<input type ='hidden' name='up_id' value="<?php echo $row["id"] ?>">
<tr>
<td>гАгсЦ</td>
<td> <input type ='text' name='up_name' size='50' value="<?php echo $row["name"] ?>" ></td>
</tr>
<tr>
<td>гАхяМо</td>
<td><input type='text' name='up_one' size='50' value="<?php echo $row["one"] ?>" > </td>
</tr>
<tr>
<td>гАоФАи </td>
<td><input type='text' name='up_two' size='50' value="<?php echo $row["two"] ?>" ></td>
</tr>
<tr>
<td>гАгЕога </td>
<td><input type='text'  name='up_three' size='50' value="<?php echo $row["three"] ?>" ></td>
</tr>


</table><p><input type=submit value='   мщы   '    name=send></p></form>
  <?
  }
 include"footer.php";
?>