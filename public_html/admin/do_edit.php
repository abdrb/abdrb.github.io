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
  echo"<center>МФло ЦтъАи щМ гАйзоМА ... мгФА Цяи цняЛ </center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
  }else{
  echo"<center>йЦ гАйзоМА хДлгм </center><META HTTP-EQUIV=\"Refresh\" Content=0;URL=\"admin_show.php\">";
    }
     include"footer.php";
 ?>