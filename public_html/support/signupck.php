<?
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

include "include/z_db.php";// database connection details stored here
// Collect the data from post method of form submission // 
$userid=$_POST['userid'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$agree=$_POST['agree'];
$todo=$_POST['todo'];
$email=$_POST['email'];
$name=$_POST['name'];
$sex=$_POST['sex'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html dir="rtl">

<head>
<title>���� ���� ���������� ��������� �������</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
if(isset($todo) and $todo=="post"){

$status = "OK";
$msg="";

// if userid is less than 3 char then status is not ok
if(!isset($userid) or strlen($userid) <3){
$msg=$msg."��� ������(��� ��������) ��� �� ���� ����� ���� �� ����<BR>";
$status= "NOTOK";}					

if(strlen($userid) >10){
$msg=$msg."��� ������(��� ��������) ��� �� �� ���� �� ���� ����<BR>";
$status= "NOTOK";}

//if(!ctype_alnum($userid)){
//$msg=$msg."��� �������� ��� �� ���� ���� ���� ���<BR>";
//$status= "NOTOK";}


if(mysql_num_rows(mysql_query("SELECT userid FROM plus_signup WHERE userid = '$userid'"))){
$msg=$msg."��� �������� ����� ������ ��� ������ ��� ���� ���.<BR>";
$status= "NOTOK";}					


if ( strlen($password) < 3 ){
$msg=$msg."���� ������ ��� �� ���� ���� �� ����� ����<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."����� ������ ��� �������<BR>";
$status= "NOTOK";}					


if ($agree<>"yes") {
$msg=$msg."��� �� ����� ��� ������ ����������<BR>";
$status= "NOTOK";}	

if($status<>"OK"){ 
echo "<font face='tahoma' size='2' color=red>$msg</font><br><input type='button' value='���� ��� ����' onClick='history.go(-1)'>";
}else{ // if all validations are passed.
$query=mysql_query("insert into plus_signup(userid,password,email,name,sex) values('$userid','$password','$email','$name','$sex')");
echo "<font face='tahoma' size='2' color=green>���� ������.. �� ������ �����<br><br><a href=login.php>���� ��� ������ ������</a><br></font>";
}
}
?>

</body>

</html>
