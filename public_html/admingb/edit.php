<?php

include"header.php";
include"config.php";


 echo"<title> ����� ������ ���������</title>" ;

$id = $_GET['id'];
if (!$id){
echo"�� ��� ������� �������";
}else{

$con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $gbooktbl=mysql_query("SELECT * FROM gbooktbl WHERE id='$id'")
  or die("can't get the gbooktbl");
  $row = mysql_fetch_array($gbooktbl);
?>
<BR><div align='center'>
  <center>
<table width=95% dir='rtl'>
<form method='POST' action='do_edit.php'>

<input type ='hidden' name='up_id' value="<?php echo $row["id"] ?>">
<tr>
<td>�����</td>
<td> <input type ='text' name='up_name' size='50' value="<?php echo $row["name"] ?>" ></td>
</tr>
<tr>
<td>������</td>
<td><input type='text' name='up_one' size='50' value="<?php echo $row["one"] ?>" > </td>
</tr>
<tr>
<td>������ </td>
<td><input type='text' name='up_two' size='50' value="<?php echo $row["two"] ?>" ></td>
</tr>
<tr>
<td>������� </td>
<td><input type='text'  name='up_three' size='50' value="<?php echo $row["three"] ?>" ></td>
</tr>


</table><p><input type=submit value='   ���   '    name=send></p></form>
  <?
  }
 include"footer.php";
?>
