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

$id = $_GET['id'];
if (!$id){
echo"АЦ йчЦ хгнйМгя гАгЕога";
}else{

 $con=mysql_connect($host,$dbuser,$dbpass)
 or die("CONNECTION FAILED");
 mysql_select_db($dbname,$con)
 or die("can't conect to DB");

 $query =mysql_query("DELETE FROM abu3amer WHERE id=$id")
  or die("can't delete the abu3amer");

  if (!$query){
  echo"<center>МФло ЦтъАи щМ гАмпщ ... мгФА Цяи цняЛ </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
  }else{
  echo"<center>йЦ гАмпщ хДлгм </a></center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
    }}
     include"footer.php";
 ?>