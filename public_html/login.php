<? session_start();
//==========================================
// Login Session is Copyright (c)2007, Scott J. LeCompte
// Web Site: http://www.myphpscripts.net/scripts.php
//
// Login Session V1.0
// By PhpScripts.net
// DD 07/05/07 Works on Unix/Linux hosted sites.
//
// May be used free of charge. There is no copyright. Feel free to edit.
// Need help with installation or customization? Visit:
// http://www.myphpscripts.net
//============================================

// Variables - Edit These

// Self Registration:  1 to enable, 0 to disable.
$registration = 1;

// Name of your user file (Recommended to leave the extension as .inc)
$pwd = 'login.inc';

// Do not edit below this line unless you know what you are doing! 
// =============================================================

function head()  {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>LCIT Admin</title>
<style type="text/css">
body {		
	font-weight: normal;	
	font-size: 12px;	
	font-family: arial;	
	color: #000000;	
	vertical-align: top;		
	text-align: center;  		
	background-color: #FFFFFF;
	margin: 10px;
}
.password {
	border-width: 1px;
        border-style: solid;
        border-color: #C7D5E0;
        width: 300px;
        height: 150px;
	font-weight: normal;	
	font-size: 12px;	
	font-family: arial;	
	color: #000000;	
	vertical-align: top;		
	text-align: center;  		
	background-color: #FFFFFF;
        padding: 0px;
        border-collapse: collapse;
}
.password_topbar {
	border-width: 0px;
        border-style: solid;
        border-color: #C7D5E0;
        height: 20px;
	font-weight: normal;	
	font-size: 12px;	
	font-family: arial;	
	color: #FFFFFF;	
	vertical-align: middle;		
	text-align: center;  		
	background-color: #C7D5E0;
        padding: 0px;
        border-collapse: collapse;
}
.register {
	border-width: 0px;
        border-style: solid;
        border-color: #C7D5E0;
       font-weight: normal;	
	font-size: 12px;	
	font-family: arial;	
	color: #000000;	
	vertical-align: top;		
	text-align: right;  		
	background-color: #FFFFFF;
        padding: 5px;
        border-collapse: collapse;
}
.register a:hover {	
	color : #000000;	
	text-decoration : underline;	
	background : transparent;
} 

.register a {	
	color : #000000;	
	text-decoration : none;	
	background : transparent;
}
.header {
	border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #C7D5E0;
        height: 20px;
	width: 400px;
	font-weight: normal;	
	font-size: 14px;	
	font-family: arial;	
	color: #000000;	
	vertical-align: middle;		
	text-align: center;  		
	background-color: #C7D5E0;
        padding: 0px;
}
.footer {
	border-top-width: 1px;
        border-top-style: solid;
        border-top-color: #C7D5E0;
        height: 20px;
	width: 400px;
	font-weight: normal;	
	font-size: 12px;	
	font-family: arial;	
	color: #FFFFFF;
	vertical-align: middle;		
	text-align: center;  		
	background-color: #FFFFFF;
        padding: 0px;
}
.footer a:hover {	
	color : #FFFFFF;
	text-decoration : underline;	
	background : transparent;
} 

.footer a {	
	color : #FFFFFF;
	text-decoration : none;	
	background : transparent;
}
input.btn{
   color:#FFFFFF;
   font-family: arial;
   font-size: 12px;
   background-color: #000000;
   border: 1px solid;
   border-top-color: #C7D5E0;
   border-left-color: #C7D5E0;
   border-right-color: #C7D5E0;
   border-bottom-color: #C7D5E0;
   filter:progid:DXImageTransform.Microsoft.Gradient
      (GradientType=0,StartColorStr='#000000',EndColorStr='#000000');
}
</style>
</head>
<body>
<div align="center">

<div>
	<table class="header">
		<tr>
			<td>
               LCIT Admin
			</td>
		</tr>
	</table>
</div>
<br>
<?
}
function foot() {
?>
<br>
<div>
	<table>
		<tr>
			<td>
          <? echo "<a href='login.php'>Click Here to Login</a>"; ?>
            </td>
		</tr>
         <tr>
			<td class="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      <? echo base64_decode('TG9naW4gU2Vzc2lvbiAmY29weTsgMjAwNyA8YSBocmVmPSJodHRwOi8vd3d3Lm15cGhwc2NyaXB0cy5uZXQiIHRhcmdldD0iX2JsYW5rIj5teVBIUHNjcmlwdHMubmV0PC9hPg=='); ?>
            </td>
          </tr>
	</table>
</div>

</div>

</body>
</html>
<?
exit();
}
if (isset($_REQUEST['logout'])) { 
	head();
	$redirect = $_SERVER['HTTP_REFERER'];
	echo '<meta http-equiv="refresh" content="2;url=';
	echo $redirect;
	echo '">';
	echo '<strong>Logging Out.</strong><br>';
	unset($_SESSION['logged_in']); 
	foot();
}
else if ($registration == 1 && isset($_REQUEST['register'])) {
	head();
	$redirect = strtok($_SESSION['redirect'],'?');
	if (isset($_REQUEST['register_passwd']) && isset($_REQUEST['register_verify']) && isset($_REQUEST['register_password'])) {
		if ($_REQUEST['register_passwd'] == $_REQUEST['register_verify']) {
			$handle = @fopen($pwd, "r");
			while (!feof($handle)) {
				$tmpstr = fgets($handle, 100);
				$line[] = ereg_replace("\n", "", $tmpstr);
			}
			for ($i=0; $i < count($line); $i++) {
				$login_hash = strtok($line[$i],'_');
				if ($_REQUEST['register_username'] == $login_hash) {
					echo '<meta http-equiv="refresh" content="2;url=';
					echo $redirect;
					echo '">';
					echo '<font color="red"><strong>Username already exists.</strong></font><br>';
					$username_exists = 1;
					break;
				}
			}
			if ($username_exists != 1 && $_REQUEST['register_passwd'] != "" && $_REQUEST['register_username'] != "") {
			$fh = fopen($pwd, 'a+') or die("can't open file");
			$stringData = $_REQUEST['register_username'] . '_' . md5($_REQUEST['register_passwd']) . "\n";
			fwrite($fh, $stringData);
			fclose($fh);
			echo '<meta http-equiv="refresh" content="2;url=';
			echo $redirect;
			echo '">';
			echo '<strong>User Created.</strong><br>';
			}
			else if ($username_exists != 1 && $_REQUEST['register_passwd'] == "") { 
				echo '<meta http-equiv="refresh" content="2;url=';
				echo $redirect;
				echo '">';
				unset($_SESSION['logged_in']);
				echo '<font color="red"><strong>Password cannot be blank.</strong></font><br>';
			}
			else if ($username_exists != 1 && $_REQUEST['register_username'] == "") { 
				echo '<meta http-equiv="refresh" content="2;url=';
				echo $redirect;
				echo '">';
				unset($_SESSION['logged_in']);
				echo '<font color="red"><strong>Username cannot be blank.</strong></font><br>';
			}
			fclose($handle);
		}
		else {
			echo '<meta http-equiv="refresh" content="2;url=';
			echo $redirect;
			echo '">';
			unset($_SESSION['logged_in']);
			echo '<font color="red"><strong>Passwords do not match.  Please try again.</strong></font><br>';
		}
	}
	else {
		?>
		<table class="password"><tr><td class="password_topbar">Create an account.</td></tr><tr><td><br>
		<form action="login.php?register" method="post">
		Login:<br>
		<input type="text" name="register_username" size="15" maxlength="14" value=""><br><br>
		Password:<br>
		<input type="password" name="register_passwd" size="15" maxlength="14"><br><br>
		Verify:<br>
		<input type="password" name="register_verify" size="15" maxlength="14"><br><br>
		<input type="submit" name="register_password" value="Create" class="btn">
		</form>
		</td></tr></table>
		<?
	}
	foot();
}
else if (!isset($_SESSION['logged_in'])) {
head();
$redirect = $_SESSION['redirect'];
if (!file_exists($pwd)) {
	if (isset($_REQUEST['passwd']) && isset($_REQUEST['passwd_verify']) && isset($_REQUEST['save_password'])) {
		if ($_REQUEST['passwd'] == $_REQUEST['passwd_verify']) {
			$fh = fopen($pwd, 'a+') or die("can't open file");
			$stringData = $_REQUEST['username'] . '_' . md5($_REQUEST['passwd']) . "\n";
			fwrite($fh, $stringData);
			fclose($fh);
			echo '<meta http-equiv="refresh" content="2;url=';
			echo $redirect;
			echo '">';
			echo '<strong>User Created.</strong><br>';
		}
		else {
			echo '<meta http-equiv="refresh" content="2;url=';
			echo $redirect;
			echo '">';
			unset($_SESSION['logged_in']);
			echo '<font color="red"><strong>Passwords do not match.  Please try again.</strong></font><br>';
		}
	}
	else {
		$_SESSION['redirect'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		?>
		<table class="password"><tr><td class="password_topbar">Create an account.</td></tr><tr><td><br>
		<form action="login.php" method="post">
		Login:<br>
		<input type="text" name="username" size="15" maxlength="14" value=""><br><br>
		Password:<br>
		<input type="password" name="passwd" size="15" maxlength="14"><br><br>
		Verify:<br>
		<input type="password" name="passwd_verify" size="15" maxlength="14"><br><br>
		<input type="submit" name="save_password" value="Create" class="btn">
		</form>
		</td></tr></table>
		<?
	}
}
else	if (isset($_REQUEST['passwd']) && isset($_REQUEST['login'])) {
	$handle = @fopen($pwd, "r");
	if ($handle) {
		while (!feof($handle)) {
			$tmpstr = fgets($handle, 100);
			$line[] = ereg_replace("\n", "", $tmpstr);
		}
		for ($i=0; $i < count($line); $i++) {
			$pass_hash = strrev(strtok(strrev($line[$i]),_));
			$login_hash = strtok($line[$i],'_');
			if (md5($_REQUEST['passwd']) == $pass_hash && $_REQUEST['username'] == $login_hash) {
				$_SESSION['logged_in'] = 1;
				echo '<meta http-equiv="refresh" content="2;url=';
				echo $redirect;
				echo '">';
				echo '<strong>Password Accepted</strong><br>';
				break;
			}
			else if ($line[$i] == "") {
				echo '<meta http-equiv="refresh" content="2;url=';
				echo $redirect;
				echo '">';
				unset($_SESSION['logged_in']);
				echo '<font color="red"><strong>Invalid Login Credentials.</strong></font><br>';
				break;
			}
		}
	}
	fclose($handle);
}
else {
	$_SESSION['redirect'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	?>
	<table class="password"><tr><td class="password_topbar">Login Required:</td></tr><tr><td><br>
	<form action="login.php" method="post">
	Login:<br>
	<input type="text" name="username" size="15" maxlength="14"><br><br>
	Password:<br>
	<input type="password" name="passwd" size="15" maxlength="14"><br><br>
	<input type="submit" name="login" value="Login" class="btn">
	</form>
	</td></tr><? if ($registration == 1) { echo '<tr><td class="register"><a href="login.php?register">Register</a></td></tr>'; } ?></table>
	<?
}
	foot();
}
?>
