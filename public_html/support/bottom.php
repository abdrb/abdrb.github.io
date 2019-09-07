<HTML dir="rtl">
<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
////// To update session status for plus_login table to get who is online ////////
if(isset($_SESSION['id'])){
$tm=date("Y-m-d H:i:s");
$q=mysql_query("update plus_login set status='ON',tm='$tm' where id='$_SESSION[id]'");
echo "<center><font face='Tahoma' size='2' ><br>ãÑÍÈÇğ: $_SESSION[userid] | <a href=logout.php>ÊÓÌíá ÇáÎÑæÌ</a> | <br>";
echo "| <a href=change-password.php>ÊÛííÑ ßáãÉ ÇáãÑæÑ</a> | <br>";
echo "| <a href=update-profile.php>ÊÚÏíá ÇáÈíÇäÇÊ ÇáÔÎÕíÉ</a> | </center></font><br>";
echo "ÇáãÊæÇÌÏíä ÇáÂä: ";
echo mysql_error();}
else{
//echo "<center><font face='Tahoma' size='2' ><a href=login.php>ÅĞÇ ßäÊ ãÓÌá ãÓÈŞÇğ İÖáÇğ Şã ÈÊÓÌá ÇáÏÎæá</a> </center></font>";

}

///// ////////////// End of updating login status for who is online ///////

// Find out who is online /////////
$gap=10; // change this to change the time in minutes, This is the time for which active users are collected. 
$tm=date ("Y-m-d H:i:s", mktime (date("H"),date("i")-$gap,date("s"),date("m"),date("d"),date("Y")));
//// Let us update the table and set the status to OFF 
////for the users who have not interacted with 
////pages in last 10 minutes ( set by $gap variable above ) ///

$ut=mysql_query("update plus_login set status='OFF' where tm < '$tm'");
echo mysql_error();
/// Now let us collect the userids from table who are online ////////
$qt=mysql_query("select userid from plus_login where tm > '$tm' and status='ON'");
echo mysql_error();

while($nt=mysql_fetch_array($qt)){
echo "$nt[userid],";
}



?>
