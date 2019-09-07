<?php

 include"header.php";
 include"config.php";
// require('login.php');
 
 echo"<title>ймяМя цсфАи гАЦДгчти</title>" ;

$id = $_GET['id'];
if (!$id){
echo"АЦ йчЦ хймоМо гАсдгА";
}else{

$con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $questionstbl=mysql_query("SELECT * FROM questionstbl WHERE id='$id'")
  or die("can't get the gbooktbl");
  $row = mysql_fetch_array($questionstbl);
?>
<BR><div align='center'>
  <center>
<table width=95% dir='rtl'>
<form method='POST' action='do_edit.php'>

<input type ='hidden' name='up_id' value="<?php echo $row["id"] ?>">
<tr>
<td>ЦД</td>
<td> <input type ='text' name='up_name' size='50' value="<?php echo $row["name"] ?>" ></td>
</tr>
<tr>
<td>гАйгяМн</td>
<td><input type='text' name='up_one' size='50' value="<?php echo $row["one"] ?>" > </td>
</tr>
<tr>
<td>гАсдгА </td>
<td><textarea name='up_two'  rows='4' cols='40'><?php echo $row["two"] ?></textarea></td>
</tr>
<tr>
<td>гАелгхи </td>
<td><textarea name='up_three'  rows='4' cols='40'><?php echo $row["three"] ?></textarea></td>
</tr>


</table><p><input type=submit value='   мщы   '    name=send></p></form>
  <?
  }
 include"footer.php";
?>
