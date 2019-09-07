<?
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
include "include/session.php";
include "include/z_db.php";
//////////////////////////////

$userid=$_POST['userid'];
$password=$_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html dir="rtl">

<head>
<title>דÑ‗Ò בהÏה בÊ‗הזבזÌםÇ ÇבדÚבזדÇÊ זÇבבÛÇÊ</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
$userid=mysql_real_escape_string($userid);
$password=mysql_real_escape_string($password);

if($rec=mysql_fetch_array(mysql_query("SELECT * FROM plus_signup WHERE userid='$userid' AND password = '$password'"))){
	if(($rec['userid']==$userid)&&($rec['password']==$password)){
	 include "include/newsession.php";


$tm=date("Y-m-d H:i:s");

//$ip=@$REMOTE_ADDR; 
// The above line is commented and the line below is used for the servers where register_global=Off
$ip=$_SERVER['REMOTE_ADDR'];

echo $ip;
$rt=mysql_query("insert into plus_login(id,userid,ip,tm) values('$_SESSION[id]','$_SESSION[userid]','$ip','$tm')");

echo mysql_error();
            echo "<p class=data> <center>Êד ÊÓÌםב ÏÎזב‗ ÈהÌÇÍ<br><br><a href='logout.php'> ÊÓÌםב ÇבÎÑזÌ </a><br><br><a href=welcome.php>ÅהÞÑ והÇ ÅÐÇ ‗Çה דÊÕÝÍÝ‗ בÇ םÏÚד ÇבÅהÊÞÇב ÇבÊבÞÇÆם Ãז בÇ ÊÑםÏ Ãה ÊהÊÙÑ</a><br></center>";
     print "<script>";
       print " self.location='welcome.php';"; // Comment this line if you don't want to redirect
          print "</script>";

				} 
		}	
	else {

		session_unset();
echo "<font face='tahoma' size='2' color=red>ÊÓÌםב ÏÎזב ÎÇØÆ¡ ÊÃ‗Ï דה ÕÍÉ ÇÓד ÇבÏÎזב Ãז ‗בדÉ ÇבדÑזÑ Ëד ÃÚÏ ÇבדÍÇזבÉ<br><center><input type='button' value='ÅÚÇÏÉ ÇבדÍÇזבÉ' onClick='history.go(-1)'></center>";
		
	}
?>

</body>

</html>
