<html dir="rtl">
<p align="center">
<body bgcolor="#EEEEEE" text="#FF0000">

<?php

$dtime=getdate(time());

echo $dtime['hours'] * $dtime['mon'] * $dtime['mday'] + $dtime['year'];

?>

</p>
</html>