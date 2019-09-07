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

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html dir="rtl">

<head>
<title>убпв сфЯф сЪпфцсцЬэЧ ЧсуксцуЧЪ цЧсслЧЪ</title>
<script type="text/javascript"> 
function validate(form) { 
if (!document.form1.agree.checked) { alert("нжсЧ№ ХобЧС ЧсЪксэуЧЪ Ыу жк ксЧуЩ ЧсеЭ ксь ЮЧфЩ ЧсХЮЪэЧб. ");
 return false; } 
return true;
}
</script>

<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">

<table border='0' width='100%' cellspacing='0' cellpadding='0' align=center><form name=form1 method=post action=signupck.php onsubmit='return validate(this)'><input type=hidden name=todo value=post>

<tr bgcolor='#B8DFEB'><td align=center colspan=2><font face='tahoma' size='2' ><b>ЪгЬэс кжц ЬЯэЯ</b></td></tr>
<tr ><td >&nbsp;<font face='tahoma' size='2' >Чгу ЧсЯЮцс (УЭбн феэЩ нои)</td><td ><font face='tahoma' size='2'><input type=text name=userid></td></tr>

<tr bgcolor='#B8DFEB'><td >&nbsp;<font face='tahoma' size='2' >псуЩ Чсубцб</td><td ><font face='tahoma' size='2'><input type=password name=password></td></tr>
<tr ><td >&nbsp;<font face='tahoma' size='2' >ХкЧЯЩ пЪЧШЩ псуЩ Чсубцб</td><td ><font face='tahoma' size='2'><input type=password name=password2></td></tr>


<tr bgcolor='#B8DFEB'><td ><font face='tahoma' size='2' >&nbsp;ЧсШбэЯ ЧсХспЪбцфэ</td><td  ><input type=text name=email></td></tr>
<tr ><td >&nbsp;<font face='tahoma' size='2' >Чгуп ЧспЧус</td><td ><font face='tahoma' size='2'><input type=text name=name></td></tr>

<tr bgcolor='#B8DFEB'><td >&nbsp;<font face='tahoma' size='2' >ЧсЬфг</td><td ><font face='tahoma' size='2'>  <input type='radio' value=male checked name='sex'>апб <input type='radio' value=female  name='sex'>УфЫь</td></tr>

<tr ><td >&nbsp;<font face='tahoma' size='2' >УцЧно ксь пЧнЩ Чсдбци цЧсЪксэуЧЪ ЧсуЪкЧбн ксэхЧ нэ Эгф ЧсЪкЧус умк уЫмс хмах ЧсЮЯуЧЪ</td><td ><font face='tahoma' size='2'><input type=checkbox name=agree value='yes'></td></tr>

<tr bgcolor='#B8DFEB'><td align=center colspan=2><input type=submit value="уЪЧШкЩ ЧсЪгЬэс"></td></tr>
</table>
<br>
<br><p><a href="javascript:history.back()">ЧскцЯЩ ссЮсн</a></p>

<?
require "bottom.php";
?>

</body>

</html>
