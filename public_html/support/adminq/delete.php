<?php

include"header.php";

include"config.php";

$id = $_GET['id'];
if (!$id){
echo"АЦ йчЦ хймоМо гАсдгА";
}else{

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $query =mysql_query("DELETE FROM questionstbl WHERE id=$id")
  or die("can't delete the questionstbl");

  if (!$query){
  echo"<center>МФло ЦтъАи щМ гАмпщ ... мгФА Цяи цняЛ </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
  }else{
  echo"<center>йЦ гАмпщ хДлгм </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
    }}
     include"footer.php";
 ?>
