<?php

include"header.php";
include"config.php";

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");



 $query =mysql_query("SELECT * FROM questionstbl")
  or die("can't select the questionstbl");
   $total_gb=mysql_num_rows($query);


            $diff= $total_gb - $limit ;

               if ($diff<=0) { echo"����� �� ���� ����� ����� ������";}else{
   $query2= mysql_query("delete from questionstbl LIMIT $diff") or die ("cann't delete");


  if (!$query2){
  echo"<center>���� ����� �� ����� ... ���� ��� ���� ���� �������� �� ���� </center><META HTTP-EQUIV=\"Refresh\" Content=3;URL=\"index.php\">";
  }else{
  echo"<center></center><META HTTP-EQUIV=\"Refresh\" Content=5;URL=\"index.php\">";
    }
     include"footer.php";
     }
 ?>
