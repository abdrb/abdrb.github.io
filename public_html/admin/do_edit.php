<?php
//�� ������� ������ 13 ����� 2004�
// ana@abu3amer.com    ����� �������
//www.abu3amer.com
//           ***** ����� ��������� 2.0 ******
//�� ������� ���� ���� ���� ����� ������ ��� �����
//�� ����� ������ �������� ��� ���� ������ ����� ������
//����� �� ��������� ����� ������� ��� ������ ����������
//������ ��� ������� ������� ���� ���� ���� , ���� ��� ������ �� �������

include"header.php";
include"config.php";
   $up_id         = $HTTP_POST_VARS['up_id'];
   $up_name       = $HTTP_POST_VARS['up_name'];
   $up_one   = $HTTP_POST_VARS['up_one'];
   $up_two       = $HTTP_POST_VARS['up_two'];
   $up_three      = $HTTP_POST_VARS['up_three'];




 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $query =mysql_query("UPDATE  abu3amer SET name='$up_name', two='$up_two' , one='$up_one' , three='$up_three'  WHERE id='$up_id' ")
  or die("can't edit the students");

  if (!$query){
  echo"<center>���� ����� �� ������� ... ���� ��� ���� </center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
  }else{
  echo"<center>�� ������� ����� </center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
    }
     include"footer.php";
 ?>