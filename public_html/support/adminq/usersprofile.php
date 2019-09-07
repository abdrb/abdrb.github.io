<? include"header.php"; ?>
<html dir="rtl">
<head>
<title>דׁßׂ בהֿה בÊßהזבזּםַ ַבדÚבזדַÊ זַבבÛַÊ</title>
</head>
<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
include "/home/londonci/public_html/support/include/z_db.php";
$usrs=mysql_query("select * from plus_signup");
echo "<table border='0' cellspacing='0' cellpadding='0' align=center width='80%'>";
echo "<tr> <td colspan='2' align='center'><font face='tahoma' size='2' align='center'>&nbsp;<b>ָםַהַÊ ַבֳÚײֱַ ַבד׃ּבםה</b></font></td></tr>";
while ($row=mysql_fetch_object($usrs))
{
echo "<tr bgcolor='#B8DFEB'><td ><font face='tahoma' size='2' >&nbsp;ַ׃ד ַבֿ־זב</td><td  > ";
echo htmlspecialchars($row->userid);
echo "</td></tr><tr bgcolor='#B8DFEB'><td ><font face='tahoma' size='2' >&nbsp;ßבדֹ ַבדׁזׁ</td><td  >";
echo htmlspecialchars($row->password) ;
echo "</td></tr><tr bgcolor='#B8DFEB'><td ><font face='tahoma' size='2' >&nbsp;ַבָׁםֿ ַבֵבßÊׁזהם</td><td  >";
echo htmlspecialchars($row->email) ;
echo "</td></tr><tr bgcolor='#B8DFEB'><td >&nbsp;<font face='tahoma' size='2' >ַבַ׃ד</td><td ><font face='tahoma' size='2'>";
echo htmlspecialchars($row->name);
echo "</td></tr><tr bgcolor='#B8DFEB'><td >&nbsp;<font face='tahoma' size='2' >ַבּה׃</td><td ><font face='tahoma' size='2'>";
echo htmlspecialchars($row->sex);
echo "</td></tr><tr><td align=center colspan=2>:: :: :: ::</td></tr>";
}
echo "</table>";
?>
<br><p><a href="javascript:history.back()">ַבÚזֹֿ בב־בÝ</a></p>
<? include"footer.php";  ?>
</body>
</html>
