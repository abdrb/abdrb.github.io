<?php

include"header.php";

include"config.php";

$id = $_GET['id'];
if (!$id){
echo"�� ��� ������� �������";
}else{

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $query =mysql_query("DELETE FROM gbooktbl WHERE id=$id")
  or die("can't delete the gbooktbl");

  if (!$query){
  echo"<center>���� ����� �� ����� ... ���� ��� ���� </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
  }else{
  echo"<center>�� ����� ����� </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
    }}
     include"footer.php";
 ?>
