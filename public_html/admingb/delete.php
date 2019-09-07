<?php

include"header.php";

include"config.php";

$id = $_GET['id'];
if (!$id){
echo"су Ъоу ШЧЮЪэЧб ЧсЪцоэк";
}else{

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $query =mysql_query("DELETE FROM gbooktbl WHERE id=$id")
  or die("can't delete the gbooktbl");

  if (!$query){
  echo"<center>эцЬЯ удпсЩ нэ ЧсЭан ... ЭЧцс убЩ УЮбь </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
  }else{
  echo"<center>Ъу ЧсЭан ШфЬЧЭ </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
    }}
     include"footer.php";
 ?>
